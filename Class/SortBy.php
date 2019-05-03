<?php


class SortBy extends Connectic
{
    private $sortWhatName;
    private $sortByGrowth;

    /**
     * @return mixed
     */
    public function getSortWhatName()
    {
        return $this->sortWhatName;
    }

    /**
     * @param mixed $sortWhatName
     */
    public function setSortWhatName($sortWhatName): void
    {
        $this->sortWhatName = $sortWhatName;
    }

    /**
     * @return mixed
     */
    public function getSortByGrowth()
    {
        return $this->sortByGrowth;
    }

    /**
     * @param mixed $sortByGrowth
     */
    public function setSortByGrowth($sortByGrowth): void
    {
        $this->sortByGrowth = $sortByGrowth;
    }

    /**
     * @return array
     */
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


}