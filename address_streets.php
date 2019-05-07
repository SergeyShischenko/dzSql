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
//var_dump($_POST);

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