<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Редактировать город.</title>
</head>
<body>

<?php require_once '../address_cities.php';?>

        <form action="../address_cities.php" method="post">

            <input type="hidden" name="id_citi" value="<?php echo $citiId->getId()?>">
            <input type="text" name="update_citi"  value="<?php echo $citiId->getName() ?>">
            <input type="submit" value="Изменить">


        </form>



</body>
</html>