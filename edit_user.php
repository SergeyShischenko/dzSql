<?php
session_start();
require_once 'Connectic.php';
require_once 'Usersi.php';

$newUsersi = new Usersi();

$editUser = $newUsersi->selectById($_GET['id']);
$_SESSION['POST_ID'] = $_POST['id'];

foreach ($editUser as $user):
endforeach;

    if (!empty($_POST)) {
    !key_exists('firstName', $_POST) ?: $newUsersi->setFirstName($_POST['firstName']);
    !key_exists('lastName', $_POST) ?: $newUsersi->setLastName($_POST['lastName']);
    !key_exists('phone', $_POST) ?: $newUsersi->setPhone($_POST['phone']);
    !key_exists('email', $_POST) ?: $newUsersi->setEmail($_POST['email']);

        if (
            key_exists('password', $_POST)
            && key_exists('passwordConfirm', $_POST)
            && $_POST['password'] === $_POST['passwordConfirm']
        ) {
            $newUsersi->setPassword($_POST['password']);

            $newUsersi->updateUsers($_POST['id'], $_POST['firstName'], $_POST['lastName'], $_POST['phone'], $_POST['email'], $_POST['password']);


            header('Location: usersss.php');
            unset($_SESSION['POST_ID']);
        }else

        header('Location: error_password.php');

}

require_once 'edit_user_form.php';