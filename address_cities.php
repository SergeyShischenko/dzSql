<?php
require_once 'Connectic.php';
require_once 'Class/AddressCities.php';

$adressCities = new AddressCities();
$allCitis = $adressCities->selectAllCiti();
$citiById = $adressCities->selectCitiById($_GET['id']);

foreach ($citiById as $citiId):
    endforeach;

        if (!empty($_POST['citi_add'])) {
            !key_exists('citi_add', $_POST) ?: $adressCities->setName($_POST['citi_add']);
            if (!empty($_POST['countriId'])){
                $adressCities->insertCiti($_POST['countriId']);
                header('Location: admin_panel.php');
            }
        }

        if (!empty($_POST['id_citi']) && !empty($_POST['update_citi'])) {
            $adressCities->updateCitiesName($_POST['id_citi'], $_POST['update_citi']);
            header('Location: admin_panel.php');
        }

