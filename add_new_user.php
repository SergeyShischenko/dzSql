<?php
require_once 'Connectic.php';
require_once 'Usersi.php';

if (!empty($_POST)) {
    $newUser = new Usersi();

    !key_exists('firstName', $_POST) ?: $newUser->setFirstName($_POST['firstName']);
    !key_exists('lastName', $_POST) ?: $newUser->setLastName($_POST['lastName']);
    !key_exists('phone', $_POST) ?: $newUser->setPhone($_POST['phone']);
    !key_exists('email', $_POST) ?: $newUser->setEmail($_POST['email']);

    !key_exists('admin', $_POST) ?: $newUser->setRoleId('1');
    !key_exists('menedger', $_POST) ?: $newUser->setRoleId('2');
    !key_exists('solomenka', $_POST) ?: $newUser->setAddressStreetId('3');
    !key_exists('lasheka', $_POST) ?: $newUser->setAddressStreetId('4');

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