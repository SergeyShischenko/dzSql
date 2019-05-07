<?php

class AddressStreets extends Connectic
{
    private $id;
    private $sityId;
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
    public function getSityId()
    {
        return $this->sityId;
    }

    /**
     * @param mixed $sityId
     */
    public function setSityId($sityId): void
    {
        $this->sityId = $sityId;
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
        $sql = "SELECT * FROM address_streets WHETE id = :id";
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

//    public function insertStreet($idCiti)
//    {
//        $pdo = Connectic::makeConnect();
//        $sql = "INSERT INTO address_streets(id, cityId, type, name) VALUES (:id, :cityId, :type, :name)";
//        $stmt = $pdo->prepare($sql);
//        $stmt->execute([
//            ':id' => null,
//            ':cityId' => $idCiti,
//            ':type' => $this->getType(),
//            ':name' => $this->getName(),
//        ]);
//    }



}