<?php
require_once 'Connectic.php';
require_once 'Class/AddressCities.php';

$adressCities = new AddressCities();
$allCitis = $adressCities->selectAllCiti();

        if (!empty($_POST['citi_add'])) {
            !key_exists('citi_add', $_POST) ?: $adressCities->setName($_POST['citi_add']);
            if (!empty($_POST['countriId'])){
                $adressCities->insertCiti($_POST['countriId']);
                header('Location: admin_panel.php');
            }
        }

