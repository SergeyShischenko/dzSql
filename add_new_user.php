<?php
require_once 'Connectic.php';
require_once 'Usersi.php';

if (!empty($_POST)) {
    $newUser = new Usersi();

    !key_exists('firstName', $_POST) ?: $newUser->setFirstName($_POST['firstName']);
    !key_exists('lastName', $_POST) ?: $newUser->setLastName($_POST['lastName']);
    !key_exists('phone', $_POST) ?: $newUser->setPhone($_POST['phone']);
    !key_exists('email', $_POST) ?: $newUser->setEmail($_POST['email']);

    !key_exists('roleId', $_POST) ?: $newUser->setRoleId($_POST['roleId']);
    !key_exists('addressStreetId', $_POST) ?: $newUser->setAddressStreetId($_POST['addressStreetId']);

    if (
        key_exists('password', $_POST)
        && key_exists('passwordConfirm', $_POST)
        && $_POST['password'] === $_POST['passwordConfirm']
    ) {
        $newUser->setPassword($_POST['password']);

        $newUser->insertUsers();
        header('Location: usersss.php');
    }else
    echo 'Пароли не совпадают, повторите ввод!';
    require_once 'add_user_form.php';
    exit();
}


require_once 'add_user_form.php';