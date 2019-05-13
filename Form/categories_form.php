<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Категории.</title>
</head>
<body>

<?php require_once 'categories.php';?>

        <table border="1">
            <tr bgcolor="gray">
                <th>id</th>
                <th>parentId</th>
                <th>name</th>
            </tr>

            <?php foreach ($allCategories as $nameCateg):?>
            <tr>
                <td><?php echo $nameCateg->getId()?></td>
                <td><?php echo $nameCateg->getParentId()?></td>
                <td><?php echo $nameCateg->getName()?></td>
            </tr>
            <?php endforeach;?>

        </table>



</body>
</html>

