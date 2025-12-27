<?php
session_start();
include 'temp/header.php';
include 'temp/nav.php';

$mysqli = new mysqli("localhost", "root", "", "flores");
$mysqli->connect_error;
if (!empty($_POST)) {
$login = $_POST['login'];
$password = $_POST['password'];
$sql = "SELECT * FROM users WHERE login='$login' AND password='$password'";
$result = $mysqli->query($sql);
    $users = mysqli_fetch_assoc($result);
    $id_user = $row['id_user'];
    $role = $row['role'];
    if (!empty($users)) {
        $_SESSION['id_users'] = $users['id_users'];
        $_SESSION['role'] = $users['role'];
        header("Location: users.php");
        exit;
    } else {
        $error  = 'Неверный логин или пароль';
        echo $error;
    }}
   
?>

<div class="container">
    <div class="row">
      <h1>Авторизация</h1>
<form method="POST">
<div class="mb-3">
<label for="login" class="form-label required">Ваш логин:</label>
<input type="text" class="form-control" id="login" name="login"> 
</div>
<div class="mb-3">
<label for="password" class="form-label required"> Ваш пароль:</label>
<input type="password" class="form-control" id="password" name="password"> 
</div>
 <button type="submit" class="btn btn-primary">Войти</button>
</form>
    </div>
</div>
