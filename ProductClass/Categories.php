<?php
require_once 'Connectic.php';

class Categories extends Connectic

{
    private $id;
    private $parentId;
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
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * @param mixed $parent_id
     */
    public function setParentId($parentId): void
    {
        $this->parentId = $parentId;
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

    public function selectAllCategories()
    {
        $pdo = Connectic::makeConnect();
        $pdo->setAttribute(PDO::ATTR_CASE, PDO::CASE_NATURAL);
        $sql = 'SELECT * FROM categories';
        $stmt = $pdo->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Categories');
        $stmt->execute();
        return $stmt->fetchAll();
    }



}