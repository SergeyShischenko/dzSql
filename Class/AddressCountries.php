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
}