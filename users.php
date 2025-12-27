<?php
session_start();
include 'temp/header.php';
include 'temp/navbar.php';
$mysqli = new mysqli("localhost", "root", "", "flores");
$mysqli->connect_error;
?>
<div class="container">
    <div class="row">
        <h4 class="text-center">Ваш личный кабинет</h4>
        <h4>Ваши заказы</h4>
     <table class="table">
  <thead class="table-dark">
      <th scope="col">№_Товара</th>
      <th scope="col">Имя товара</th>
      <th scope="col">Статус</th>
  </thead>
  <tbody>
   
</tbody>
</table>
    </div>
</div>