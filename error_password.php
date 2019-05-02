<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Неправильный палоль.</title>
</head>
<body>
<?php
require_once 'Connectic.php';
require_once 'Usersi.php';
$newUsersi = new Usersi();
$editUser = $newUsersi->selectById($_SESSION['POST_ID']);

foreach ($editUser as $user):
endforeach;
echo $user->getFirstName().' '. $user->getLastName();
?>
<p>Неправильный ввод пароля.</p>
<?php require_once 'edit_user_form.php';?>

</body>
</html>