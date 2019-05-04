<?php
require_once 'Connectic.php';
require_once 'Class/AddressCountries.php';

$addressCountry = new AddressCountries();
$allCountris = $addressCountry->selectCountris();

if (!empty($_POST)) {
    !key_exists('add_country', $_POST) ?: $addressCountry->setNameCountri($_POST['add_country']);

    $addressCountry->insertCountri();
    header('Location: admin_panel.php');
}

require_once 'form_address_countries.php';