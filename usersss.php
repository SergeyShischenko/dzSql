<?php

require_once 'Connectic.php';
require_once 'Usersi.php';
require_once 'Class/SortBy.php';

$newUsers = new Usersi();
$sortBy = new SortBy();

if (!empty($_POST)) {

    !key_exists('sort_what_name', $_POST) ?: $sortBy->setSortWhatName($_POST['sort_what_name']);
    !key_exists('sort_by_growth', $_POST) ?: $sortBy->setSortByGrowth($_POST['sort_by_growth']);
}




$useri = $newUsers->selectAll();

require_once 'show_users.php';