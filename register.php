<?php
session_start();
include 'temp/header.php';
include 'temp/nav.php';

$mysqli = new mysqli("localhost", "root", "", "flores");
$mysqli->connect_error;
if (!empty($_POST)) {
$fio = $_POST['fio'];
$login = $_POST['login'];
$password = $_POST['password'];
$sql = "INSERT INTO `users'(`fio`, `login`, `password`) WHERE ('$fio', '$login', '$password')";
}
?>

<div class="container">
    <div class="row">
      <h1>Регистрация</h1>
<form method="POST">
<div class="mb-3">
<label for="fio" class="form-label required">ФИО:</label>
<input type="text" class="form-control" id="fio" name="fio"> 
</div>
<div class="mb-3">
<label for="login" class="form-label required">Придумайте Ваш логин:</label>
<input type="text" class="form-control" id="login" name="login"> 
</div>
<div class="mb-3">
<label for="password" class="form-label required">Придумайте Ваш пароль:</label>
<input type="password" class="form-control" id="password" name="password"> 
</div>
 <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
</form>
    </div>
</div>
