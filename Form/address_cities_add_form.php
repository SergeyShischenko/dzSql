<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Город.</title>
</head>
<body>

        <form action="/sql/address_cities.php" method="post">
            <label>Добавить в базу город:</label><br>
            <select name="countriId">
                <option disabled selected>Выбрать страну</option>
                <option value="4">Украина</option>
                <option value="5">Польша</option>
                <option value="6">Америка</option>
                <option value="7">Германия</option>
                <option value="8">Франция</option>
                <option value="9">Италия</option>
                <option value="13">Россия</option>
                <option value="15">Канада</option>
            </select><br>

            <input type="text" name="citi_add" placeholder="Название города" required="required">
            <br><input type="submit" value="Добавить"><br><br>

        </form><br>

        <?php require_once 'address_cities.php'; ?>

        <table border="1">
        <tr bgcolor="#bdb76b">
            <th>Номер</th>
            <th>Город</th>
            <th>Действие</th>
        </tr>

            <?php $i = 0; ?>
            <?php foreach ($allCitis as $citi): ?>
        <tr>
            <td><?php echo ++$i; ?></td>
            <td><?php echo $citi->getName()?></td>
        </tr>
            <?php endforeach;?>
        </table><br><br>



</body>
</html>
