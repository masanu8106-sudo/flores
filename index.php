<?php 
include 'temp/header.php';
include 'temp/nav.php';
$mysqli = new mysqli("localhost", "root", "", "flores");
$mysqli->connect_error;
?>
<main>
<div class="container">
    <div class="row">
        <h3 class="text-center">Каталог товаров</h3>
//<?php
//$sql = "SELECT * FROM tovar";
//$result = $mysqli->query($sql);
//echo '<div class="row row-cols-1 row-cols-md-3 g-4">';
          //  foreach ($result as $row) {
            //    echo '<div class="card">
             //   <img src="'.$row['photo'].'" class="card-img-top" alt="...">
              //  <div class="card-body">
              //    <h5 class="card-title">'.$row['name'].'</h5>
              //    <p class="card-text">Цена: '.$row['price'].'</p>
              //    <p class="card-text">Количество: '.$row['koll'].'</p>
              //  </div>
              //  <button type="button" class="btn btn-primary"></button>
              //  </div>';
           // }
//?>
    </div>
</div>
</main>