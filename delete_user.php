<?php
require_once 'Connectic.php';
require_once 'Usersi.php';

$newUsersi = new Usersi();
$deleteUser = $newUsersi->selectById($_GET['id']);

    foreach ($deleteUser as $user):
    endforeach;

    if (!empty($_POST)) {
        //!key_exists('id', $_POST) ?: $newUsersi->setId($_POST['id']);
        !key_exists('delete', $_POST) ?: $newUsersi->deleteUsers($_POST['id']);
        header('Location: usersss.php');
        !key_exists('notDelete', $_POST) ?: header('Location: usersss.php');
    }

require_once 'delete_user_form.php';