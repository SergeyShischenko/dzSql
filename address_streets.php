<?php
require_once 'Connectic.php';
require_once 'Class/AddressStreets.php';
require_once 'Class/AddressCities.php';

$newCitis = new AddressCities();
$allCitis = $newCitis->selectAllCiti();

$addreessStreets = new AddressStreets();
$allStreets = $addreessStreets->selectAllStreets();
$streetById = $addreessStreets->selectStreetById($_GET['id']);

foreach ($streetById as $idStreet):
    endforeach;
//var_dump($streetById);

        // Добавление в базу улицы:
        if (!empty($_POST['add_type_street'])) {
            !key_exists('add_type_street', $_POST) ?: $addreessStreets->setType($_POST['add_type_street']);
            if (!empty($_POST['add_street'])){
                !key_exists('add_street', $_POST) ?: $addreessStreets->setName($_POST['add_street']);
            }
            if (!empty($_POST['id_citi'])){
                $addreessStreets->insertStreet($_POST['id_citi']);
                header('Location: admin_panel.php');
            }
        }

        //Редактирование улицы:
        if (!empty($_POST['new_name_street'])) {
            !key_exists('new_name_street', $_POST) ?: $addreessStreets->setName($_POST['new_name_street']);
            $addreessStreets->updateStreet($_POST['id_street']);
            header('Location: admin_panel.php');
        }
