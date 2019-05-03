<?php
require_once 'Connectic.php';
require_once 'Usersi.php';

    $searchUser = new Usersi();

    if (!empty($_POST)) {
        !key_exists('search', $_POST) ?: $searchUser->setPhone($_POST['search']);
        $searchResult = $searchUser->searchByPhone($_POST['search']);

        foreach ($searchResult as $phone):
        endforeach;
    }else

    header('Location: usersss.php');