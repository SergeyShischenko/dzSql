<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Добавить пользователя.</title>
</head>
<body>

<div class="wrep">
    <form action="add_new_user.php" method="post">
        <input type="text" required="required" name="firstName" placeholder="Имя"><br>
        <input type="text" required="required" name="lastName" placeholder="Фамилия"><br>
        <input type="text" required="required" name="phone" placeholder="Телефон"><br>
        <input type="text" required="required" name="email" placeholder="Почта"><br>
        <input type="password" required="required" name="password" placeholder="Пароль"><br>
        <input type="password" required="required" name="passwordConfirm" placeholder="Подтвердить пароль"><br>
        <input type="submit">
    </form>
</div>

</body>
</html>
