<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple Registration</title>
</head>
<body>

<table align="center" border="1">
    <tr>
        <td> Имя </td>
        <td> Email </td>
        <td> Зарегестрирован </td>
    </tr>
    <?php if (count($arr) === 0): ?>
        <tr>
            <td colspan="3"> Пользователей не найдено</td>
        </tr>
    <?php else :?>
        <?php
        foreach ($arr as $user){ ?>
        <tr>
            <td><?php echo $user[0] ?></td>
            <td><?php echo $user[1] ?></td>
            <td><?php echo $user[3]?'Зарегестрирован' : 1 ?></td>
        </tr>
    <?php } endif ?>
</table>

</body>
</html>
