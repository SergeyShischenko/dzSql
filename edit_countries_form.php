<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Редактировать.</title>
</head>

<?php require_once 'address_countries.php'; ?>


<form action="address_countries.php" method="post">
    <label>Редактировать название страны:</label><br>
    <input type="hidden" name="id_country" required="required" value="<?php echo $countri->getIdCountri()?>">

    <input type="text" name="update_country" required="required" value="
<?php echo $countri->getNameCountri()?>
">


    <input type="submit" value="Изменить страну">
</form><br>


</body>
</html>
