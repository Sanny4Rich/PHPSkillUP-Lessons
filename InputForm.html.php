<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple Registration</title>
</head>
<body>

<form action="Index.php" method="post">
    <?php if ($userAdded): ?>
        <p>Спасибо за регистрацию</p>
    <?php else :?>
    <label> Введите имя :<input type="text" name="name" placeholder="Введите имя" value="<?=$values['name']?>">
    </label><?=isset($errors['name']) ? $errors['name'] : ''?><br>

    <label> Введите email:<input type="email" name="email" placeholder="Email" value="<?=$values['email'] ?>">
    </label><?=isset($errors['email']) ? $errors['email'] : ''?><br>

    <label> Пароль : <input type="password" name="password" placeholder="Пароль">
    </label><?=isset($errors['password']) ? $errors['password'] : ''?><br>

    <label> Подписаться на рассылку :<input type="checkbox" name="checked" value="1"<?=$values['checked'] ? 'checked' : ''?>></label><br>
    <input type="submit" value="Отправить на сервер">
    <?php endif ?>
</form>

</body>
</html>
