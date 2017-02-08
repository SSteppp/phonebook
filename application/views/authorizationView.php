<?php
session_start();
?>
<html>
<head>
<meta charset="utf-8">
<title>Авторизация на сайте</title>
</head>
<body>
<div align="center"><h2>Авторизация на сайте:</h2>
<form method="post" >
Логин: <input type="text" name="login" required placeholder="Ваш логин"><br>
Пароль: <input type="password" name="password" required placeholder="Ваш пароль"><br>
<input type="submit" name="submit" >
</form>
<a href="registration" >Регистрация</a></div>
</body>
</html>