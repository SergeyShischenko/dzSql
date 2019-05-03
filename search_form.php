<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Поиск</title>
</head>
<body>
<?php require_once 'search.php'?>

    <?php
    if (!empty($searchResult)) {
        foreach ($searchResult as $phone){
            if (!empty($phone)) {
                echo 'Результат поиска :'.$phone->getFirstName().' '. $phone->getLastName().', '. 'телефон :'.' '.$phone->getPhone().'<br>';
            } else exit();
        }
    }


    ?><br><br>

<form action="usersss.php" method="post">
    <input type="hidden" name="searchPhone">
    <input type="text" name="search" placeholder="Поиск">
    <input type="submit" value="Искать">
</form><br>




</body>
</html>
