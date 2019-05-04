<?php
require_once 'Connectic.php';
require_once 'Class/AddressCountries.php';

if (!empty($_POST)) {
    $addressCountry = new AddressCountries();

    !key_exists('add_country', $_POST) ?: $addressCountry->setNameCountri($_POST['add_country']);

    $addressCountry->insertCountri();
}

require_once 'form_address_countries.php';