<?php

require_once 'Connectic.php';
require_once 'Usersi.php';

$newUsers = new Usersi();
$useri = $newUsers->selectAll();

require_once 'show_users.php';