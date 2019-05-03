<?php

require_once 'Connectic.php';
require_once 'Usersi.php';


$newUsers = new Usersi();


if (!empty($_POST)) {

    !key_exists('sort_by_growth', $_POST) ?: $newUsers->setSortByGrowth($_POST['sort_by_growth']);
    $useri = $newUsers->orderByPhoneAsc($_POST['sort_by_growth']);
}else

$useri = $newUsers->selectAll();


require_once 'show_users.php';