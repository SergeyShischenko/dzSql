<?php
require_once 'Connectic.php';
require_once 'Usersi.php';

    $searchUser = new Usersi();

    if (!empty($_POST)) {
        !key_exists('search', $_POST) ?: $searchUser->setPhone($_POST['search']);
        $searchResult = $searchUser->searchByPhone($_POST['search'], $_POST['search'], $_POST['search']);
    }

