<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Улица.</title>
</head>
<body>


<?php require_once '../address_streets.php';?>

    <form action="../address_streets.php" method="post">
        <input type="hidden" name="id_street" value="<?php echo $idStreet->getId()?>">
        <input type="text" name="new_name_street" value="<?php echo $idStreet->getName()?>">
        <input type="submit" value="Изменить">

    </form>



</body>
</html>
