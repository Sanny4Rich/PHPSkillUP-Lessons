<?php

    $arr = [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<form action="" method="get">
    <label> Введите имя : <input type="text" name="user" required placeholder="Введите имя"
                                 value="<?php if(isset($_REQUEST['user'])) echo $_REQUEST['user'] ?>"></label>
    <br>
    <label> Введите пароль : <input type="password" required name="password"
                                    value="<?php if(isset($_REQUEST['password'])) echo $_REQUEST['password'] ?>"></label>
    <br>
    <label><textarea name="massage" value="<?php echo $_REQUEST['user'] ?>"></textarea></label><br>
    <input type="submit" value="Отправить на сервер"
</form>


</body>
</html>
