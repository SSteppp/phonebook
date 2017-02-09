<?php
session_start();
?>

<div align="center"><h2>Авторизация на сайте:</h2>
<form method="post" >
Логин: <input type="text" name="login" required placeholder="Ваш логин"><br>
Пароль: <input type="password" name="password" required placeholder="Ваш пароль"><br>
<input type="submit" name="submit" >
</form>
<a href="registration" >Регистрация</a></div>
