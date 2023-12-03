<?php
    session_start();
    if (isset($_SESSION['user'])) {
        header('Location: profile.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admin.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="brand-logo"></div>
    <div class="brand-title">DIMOA</div>
    <form action="admin_config.php" method="post">
        <input type="text" name="login" placeholder="Логин"/>
        <input type="password" name="password" placeholder="Введите проль" />
        <button type="submit">ВХОД</button>
    </form>
</div>
</body>
</html>