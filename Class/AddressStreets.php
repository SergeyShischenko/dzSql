<?php

class AddressStreets extends Connectic
{
    private $id;
    private $cityId;
    private $type;
    private $name;

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
    public function getCityId()
    {
        return $this->cityId;
    }

    /**
     * @param mixed $cityId
     */
    public function setCityId($cityId): void
    {
        $this->sityId = $cityId;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type): void
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    public function selectStreetById($id)
    {
        $pdo = Connectic::makeConnect();
        $pdo->setAttribute(PDO::FETCH_CLASS, PDO::CASE_NATURAL);
        $sql = "SELECT * FROM address_streets WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'AddressStreets');
        $stmt->execute([
            ':id' => $id,
        ]);
        return $stmt->fetchAll();

    }

    public function selectAllStreets()
    {
        $pdo = Connectic::makeConnect();
        $pdo->setAttribute(PDO::ATTR_CASE, PDO::CASE_NATURAL);
        $sql = "SELECT * FROM address_streets";
        $stmt = $pdo->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'AddressStreets');
        $stmt->execute();
        return $stmt->fetchAll();

    }


    public function insertStreet($idCiti)
    {
        $pdo = Connectic::makeConnect();
        $sql = "INSERT INTO address_streets(id, cityId, type, name) VALUES (:id, :cityId, :type, :name)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':id' => null,
            ':cityId' => $idCiti,
            ':type' => $this->getType(),
            ':name' => $this->getName(),
        ]);
    }


    /**
     * @param $id
     */
    public function updateStreet($id)
    {
        $pdo = Connectic::makeConnect();
        $sql = "UPDATE address_streets SET name=:name WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':id' => $id,
            ':name' => $this->getName(),
        ]);
    }

    public function selectUnionTabl()
    {
        $pdo = Connectic::makeConnect();
        $pdo->setAttribute(PDO::ATTR_CASE, PDO::CASE_NATURAL);


        $sql = "SELECT * FROM address_countries 
        LEFT JOIN address_cities ON address_countries.id = address_cities.countryId 
        LEFT JOIN address_streets ON address_cities.id = address_streets.cityId";


        $stmt = $pdo->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'AddressStreets');
        $stmt->execute();
        return $stmt->fetchAll();
    }


}