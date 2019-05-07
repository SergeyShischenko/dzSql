<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Город.</title>
</head>
<body>

<?php require_once 'address_streets.php';?>


    <form action="/sql/address_streets.php" method="post">
        <label>Добавить в базу улицу:</label><br>
        <select name="id_citi">
            <?php $i = 0;?>
            <?php foreach ($allCitis as $citi):?>
<!--            <option disabled selected>Выбрать город</option>-->
            <option value="<?php echo $citi->getId();?>"><?php echo $citi->getName()?></option>
            <?php endforeach;?>


        </select><br>

        <input type="text" name="add_street" placeholder="Ввести название улицы" required="required"><br>
        <input type="text" name="add_type_street" placeholder="Это проспект, улица..." required="required"><br>
        <input type="submit" value="Добавить">
    </form>

    <table border="1">

    <tr bgcolor="#deb887">
        <th>Номер</th>
        <th>Тип</th>
        <th>Улица</th>
        <th>Действие</th>
    </tr>

    <?php $i = 0?>
        <?php foreach ($allStreets as $street):?>
    <tr>
        <td><?php echo ++$i; ?></td>
        <td><?php echo $street->getType()?></td>
        <td><?php echo $street->getName()?></td>
        <td><a href="Form/address_streets_edit_form.php?id<?php echo $street->getId()?>">Редактировать</a></td>
    </tr>
        <?php endforeach;?>

    </table><br>

</body>
</html>
