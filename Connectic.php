<?php

class Connectic
{

    /**
     * @return PDO
     */
    public static function makeConnect():PDO
    {
        $dsn = 'mysql:host=localhost;dbname=dz20sql';
        $userName = 'root';
        $password = '';

        try {
            return new PDO($dsn, $userName, $password);
        } catch (PDOException $e) {
            echo 'Error connect:' . $e->getMessage();
        }
    }
}