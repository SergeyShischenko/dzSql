<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Удалить прльзователя.</title>
</head>
<body>

<p>Удалить пользователя <?php echo $user->getFirstName(); echo ' '. $user->getLastName()?>:</p>
<div class="wrep">
    <form action="delete_user.php" method="post">
        <input type="hidden" name="id" value="<?php echo $user->getId() ?>">
        <input type="submit" name="delete" value="Удалить.">
        <input type="submit" name="notDelete" value="Отменить удаление." >
    </form>
</div>

</body>
</html>