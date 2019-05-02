<?php


class Usersi extends Connectic
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var string
     */
    private $phone;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $password;

    public function setId($id)
    {
        $this->id = $id;
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = hash("sha256", $password );
    }

    /**
     * @param $password
     * @return bool
     */
    public function chekPassword($password)
    {
        $chek = hash("sha256", $password );
        if ($chek === $this->getPassword()) {
            return true;
        } return false;
    }

    /**
     * @return array
     */
    public function selectAll()
    {
        $pdo = Connectic::makeConnect();
        $pdo->setAttribute(PDO::ATTR_CASE, PDO::CASE_NATURAL);
        $sql = ("SELECT * FROM users");
        $sth = $pdo->prepare($sql);
        $sth->setFetchMode(PDO::FETCH_CLASS, 'Usersi');
        $sth->execute();
        return $sth->fetchAll();
    }

    public function selectById($id)
    {
        $pdo = Connectic::makeConnect();
        $pdo->setAttribute(PDO::ATTR_CASE, PDO::CASE_NATURAL);
        $sql = "SELECT * FROM users WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Usersi');
        $stmt->execute([':id' => $id]);
        return $stmt->fetchAll();
    }

    /**
     * @return array
     */
    public function selectWhere()
    {
        $pdo = Connectic::makeConnect();
        $pdo->setAttribute(PDO::ATTR_CASE, PDO::CASE_NATURAL);
        $sql = "SELECT * FROM users WHERE phone BETWEEN :phone1 AND :phone2";
        $sth = $pdo->prepare($sql);
        $sth->setFetchMode(PDO::FETCH_CLASS, 'Usersi');
        $sth->execute([
            ':phone1'=> '2500',
            ':phone2'=> '3200',
        ]);
        return $sth->fetchAll();
    }

    public function orderBy()
    {
        $pdo = Connectic::makeConnect();
        $pdo->setAttribute(PDO::ATTR_CASE, PDO::CASE_NATURAL);
        $sql = "SELECT firstName, lastName, phone FROM users ORDER BY phone DESC";
        $stmt = $pdo->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Usersi');
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function groupBy()
    {
        $pdo = Connectic::makeConnect();
        $pdo->setAttribute(PDO::ATTR_CASE, PDO::CASE_NATURAL);
        $sql = "SELECT lastName, SUM(phone) AS sumPhone FROM users GROUP BY lastName HAVING SUM(phone) > 7000";
        $stmt = $pdo->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Usersi');
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function distinctUsers()
    {
        $pdo = Connectic::makeConnect();
        $pdo->setAttribute(PDO::FETCH_CLASS, PDO::CASE_NATURAL);
        $sql = "SELECT DISTINCT lastName FROM users";
        $stmt = $pdo->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Usersi');
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function joinUsers()
    {
        $pdo = Connectic::makeConnect();
        $pdo->setAttribute(PDO::FETCH_CLASS, PDO::CASE_NATURAL);
        $sql = "SELECT * FROM users LEFT JOIN address_streets ON users.addressStreetId = address_streets.id";
        $stmt = $pdo->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Usersi');
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function insertUsers():void
    {
        $sql = 'INSERT INTO `users`(`id`, `firstName`, `lastName`, `phone`, `email`, `password`, `roleId`, `addressStreetId`) VALUES (:id, :firstName, :lastName, :phone, :email, :password, :roleId, :addressStreetId)';
        $sth = Connectic::makeConnect()->prepare($sql);
        $sth->execute([
            ':id' => NULL,
            ':firstName' => $this->getFirstName(),
            ':lastName' => $this->getLastName(),
            ':phone' => $this->getPhone(),
            ':email' => $this->getEmail(),
            ':password' => $this->getPassword(),
            ':roleId'=> '2',
            ':addressStreetId' => '4',
        ]);
    }

//    public function updateUsers(Usersi $user)
//    {
//        $sql = "UPDATE users SET firstName = :firstName, lastName = :lastName, phone = :phone, email = :email, password = :password WHERE id = :id";
//        $sth = Connectic::makeConnect()->prepare($sql);
//        $sth->execute([
//            ':firstName' => $user->getFirstName(),
//            ':lastName' => $user->getLastName(),
//            ':phone' => $user->getPhone(),
//            ':email' => $user->getEmail(),
//            ':password' => $user->getPassword(),
//            ':id' => $user->getId(),
//        ]);
//    }



    public function updateUsers($id, $firstName = null, $lastName = null, $phone = null, $email =null, $password =null)
{
    $sql = "UPDATE users SET firstName = :firstName, lastName = :lastName, phone = :phone, email = :email, password = :password WHERE id = :id";
    $sth = Connectic::makeConnect()->prepare($sql);
    $sth->execute([
        ':firstName' => $firstName,
        ':lastName' => $lastName,
        ':phone' => $phone,
        ':email' => $email,
        ':password' => $password,
        ':id' => $id,
    ]);
}

    public function deleteUsers($id)
    {
        $_POST ['id'] = $id;
        $sql = "DELETE FROM `users` WHERE id = :id";
        $sth = Connectic::makeConnect()->prepare($sql);
        $sth->bindParam(':id', $_POST['id']);
        $sth->execute();
    }


}