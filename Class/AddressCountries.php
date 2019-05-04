<?php

class AddressCountries extends Connectic
{
    private $id;
    private $name;

    /**
     * @return mixed
     */
    public function getIdCountri()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getNameCountri()
    {
        return $this->name;
    }

    /**
     * @param mixed $nameCountri
     */
    public function setNameCountri($name): void
    {
        $this->name = $name;
    }


    public function insertCountri()
    {
        $sql = "INSERT INTO address_countries(id, name) VALUES (:id, :name)";
        $stmt = Connectic::makeConnect()->prepare($sql);
        $stmt->execute([
            ':id' => null,
            ':name'=> $this->getNameCountri(),
        ]);
    }

    /**
     * @return array
     */
    public function selectCountris()
    {
        $pdo = Connectic::makeConnect();
        $pdo->setAttribute(PDO::ATTR_CASE, PDO::CASE_NATURAL);
        $sql = "SELECT * FROM address_countries";
        $stmt = $pdo->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'AddressCountries');
        $stmt->execute();
        return $stmt->fetchAll();
    }

    /**
     * @param $id
     * @return array
     */
    public function selectById($id)
    {
        $pdo = Connectic::makeConnect();
        $pdo->setAttribute(PDO::ATTR_CASE, PDO::CASE_NATURAL);
        $sql = "SELECT * FROM address_countries WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'AddressCountries');
        $stmt->execute([':id' => $id]);
        return $stmt->fetchAll();
    }

    /**
     * @param $id
     * @param $name
     */
    public function updateCountriName($id, $name)
    {
        $pdo = Connectic::makeConnect();
        $sql = "UPDATE address_countries SET name = :name WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':id' => $id,
            ':name' => $name,
        ]);
    }
}