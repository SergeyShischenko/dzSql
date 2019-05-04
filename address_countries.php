<?php

require_once 'Connectic.php';
require_once 'Class/AddressCountries.php';

$addressCountry = new AddressCountries();
$allCountris = $addressCountry->selectCountris();

$selectById = $addressCountry->selectById($_GET['id']);

foreach ($selectById as $countri):
    endforeach;

            if (!empty($_POST['add_country'])) {
                !key_exists('add_country', $_POST) ?: $addressCountry->setNameCountri($_POST['add_country']);

                $addressCountry->insertCountri();
                header('Location: admin_panel.php');
            }

            if (!empty($_POST)) {

                if (is_string($_POST['id_country']) && is_string($_POST['update_country'])){
                    $id = $_POST['id_country'];
                    $name = $_POST['update_country'];
                    $addressCountry->updateCountriName($id, $name);
                    header('Location: admin_panel.php');
                }
            }






