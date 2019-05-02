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
}