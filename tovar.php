<?php
session_start();
include 'temp/header.php';
include 'temp/navbar_cab.php';
$mysqli = new mysqli("localhost", "root", "", "flores");
$mysqli->connect_error;
if(!empty($_POST)){
    $name = $_POST['name'];
    $price = $_POST['price'];
    $koll = $_POST['koll'];
    $sql = "SELECT * FROM tovar(name, price, koll) WHERE ('$name', '$price', '$koll')";
}
?>
<div class="container">
    <div class="row">
        <h4>Добавление нового товара</h4>
<form method="POST">
<div class="mb-3">
<label for="fio" class="form-label required">Название:</label>
<input type="text" class="form-control" id="name" name="name"> 
</div>
<div class="mb-3">
<label for="login" class="form-label required">Цена:</label>
<input type="text" class="form-control" id="price" name="price"> 
</div>
<div class="mb-3">
<label for="password" class="form-label required">Количество цветов в букете:</label>
<input type="password" class="form-control" id="koll" name="koll"> 
</div>
 <button type="submit" class="btn btn-primary">Добавить</button>
</form>
    </div>
</div>