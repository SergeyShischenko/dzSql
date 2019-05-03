<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Список пользователей.</title>
</head>
<body>

<h1>Список мой:</h1>
<a href="add_new_user.php">Добавить нового пользователя!</a><br><br>

    <form action="usersss.php" method="post">

    <label>Сортировать:</label><br>
    <input type="hidden" name="sort_whot">
    <select name="sort_what_name" id="sort_what_name">
        <option value="sort_lastName">По фамилии</option>
        <option value="sort_phone">По телефону</option>
    </select><br><br>

    <label>Сортировать:</label><br>
    <input type="hidden" name="sort_by">
    <select name="sort_by_growth" id="sort_by_growth">
        <option value="bottom">По убыванию</option>
        <option value="top">По возрастанию</option>
    </select>





</form><br>


<table border="1">
    <tr bgcolor="#f5f5dc" style="padding:5px">
        <th>Номер</th>
        <th>Имя</th>
        <th>Фамилия</th>
        <th>Почта</th>
        <th>Телефон</th>
        <th>Действия</th>
    </tr>

    <?php $i = 0; ?>
    <?php foreach ($useri as $user): ?>
    <tr>
        <td><?php echo ++$i; ?></td>
        <td><?php echo $user->getFirstName(); ?></td>
        <td><?php echo $user->getLastName(); ?></td>
        <td><?php echo $user->getEmail(); ?></td>
        <td><?php echo $user->getPhone(); ?></td>

        <td>
            <a href="edit_user.php?id=<?php echo $user->getId()?>">Редактитовать</a><br>
            <a href="delete_user.php?id=<?php echo $user->getId()?>">Удалить</a><br>
        </td>
    </tr>

    <?php endforeach;?>



</table>


</body>
</html>
