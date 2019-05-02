<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Добавить пользователя.</title>
</head>
<body>

<div class="wrep">
    <form action="add_new_user.php" method="post">

        <label>Должность:</label><br>
        <input type="hidden" name="actRole">
        <select name="roleId" id="roleId">
            <option value="1">Администратор</option>
            <option value="2">Менеджер</option>
        </select><br><br>

        <label>Улица:</label><br>
        <input type="hidden" name="addrStr">
        <select name="addressStreetId" id="addressStreetId">
            <option value="3">Соломенка</option>
            <option value="4">Ляшека</option>
        </select><br><br>

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
