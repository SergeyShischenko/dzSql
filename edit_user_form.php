<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Редактировать пользователя.</title>
</head>
<body>


<p>Редактирвать пользователя <?php echo $user->getFirstName().' '. $user->getLastName()?>:</p>
<div class="wrep">
    <form action="edit_user.php" method="post">
        <input type="hidden" name="id" value="<?php echo $user->getId() ?>" ><br>
        <input type="text" name="firstName" value="<?php echo $user->getFirstName()?>"><br>
        <input type="text" name="lastName" value="<?php echo $user->getLastName()?>"><br>
        <input type="text" name="phone" value="<?php echo $user->getPhone()?>"><br>
        <input type="text" name="email" value="<?php echo $user->getEmail()?>"><br>
        <input type="password" name="password" placeholder="Изменить Пароль"><br>
        <input type="password" name="passwordConfirm" placeholder="Подтвердить пароль"><br>
        <input type="submit">
    </form>
</div>

</body>
</html>