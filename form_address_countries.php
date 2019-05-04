<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Админ панель.</title>
</head>
<body>

    <form action="address_countries.php" method="post">
        <label>Добавить в базу страну:</label><br>
        <input type="text" name="add_country" required="required" placeholder="Название страны">
        <input type="submit" value="Добавить страну">
    </form><br>


    <table border="1">
        <tr bgcolor="#a9a9a9">
            <th>Номер</th>
            <th>Страна</th>
        </tr>

        <?php $i = 0; ?>
        <?php foreach ($allCountris as $countri): ?>
        <tr>
            <td><?php echo ++$i; ?></td>
            <td><?php echo $countri->getNameCountri()?></td>
        </tr>
        <?php endforeach;?>



    </table>



</body>
</html>
