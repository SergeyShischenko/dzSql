<?php


class AddressCities extends Connectic
{
    private $id;
    private $countryId ;
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
    public function getCountryId()
    {
        return $this->countryId;
    }

    /**
     * @param mixed $countryId
     */
    public function setCountryId($countryId): void
    {
        $this->countryId = $countryId;
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

    public function insertCiti($countryId)
    {
        $sql = "INSERT INTO address_cities(id, countryId, name) VALUES (:id, :countryId, :name)";
        $stmt = Connectic::makeConnect()->prepare($sql);
        $stmt->execute([
             ':id' => null,
             ':countryId' => $countryId,
             ':name' => $this->getName(),
         ]);
    }

    public function selectAllCiti()
    {
        $pdo = Connectic::makeConnect();
        $pdo->setAttribute(PDO::FETCH_CLASS, 'AddressCities');
        $sql = "SELECT * FROM address_cities";
        $stmt = $pdo->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'AddressCities');
        $stmt->execute();
        return $stmt->fetchAll();
    }



}