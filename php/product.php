<?php
    include("php/db.php"); //файл з'єднання з БД
    $resultm = mysqli_query($link,"SELECT*FROM product");
    $pre_id = mysqli_query($link,"SELECT product_id FROM product ORDER BY product_id ASC");

    if ($resultm) {
        while ($myrowd = mysqli_fetch_array ($resultm)) {
          //оформлення
            switch ($myrowd["product_id"]) {
                case 1:
                    echo'<div class="col">'.'<div class="card" style="background-color:#FCD55E; height: 800px">'.
                    '<a href="#"><img src="img/phone5.jpg" class="card-img-top my-img" alt="..."></a>'.'<div class="card-body">';
                  break;
                case 2:
                    echo'<div class="col">'.'<div class="card" style="background-color:#FCD55E; height: 800px">'.
                    '<a href="#"><img src="img/silmarillion.jpg" class="card-img-top my-img" alt="..."></a>'.'<div class="card-body">';
                  break;
                case 3:
                    echo'<div class="col">'.'<div class="card" style="background-color:#FCD55E; height: 800px">'.
                    '<a href="#"><img src="img/scooter.jpg" class="card-img-top my-img" alt="..."></a>'.'<div class="card-body">';
                  break;
                case 4:
                    echo'<div class="col">'.'<div class="card" style="background-color:#FCD55E; height: 800px">'.
                    '<a href="#"><img src="img/microphone.jpg" class="card-img-top my-img" alt="..."></a>'.'<div class="card-body">';
                  break;
                case 5:
                    echo'<div class="col">'.'<div class="card" style="background-color:#FCD55E; height: 800px">'.
                    '<a href="#"><img src="img/diski.jpg" class="card-img-top my-img" alt="..."></a>'.'<div class="card-body">';
                  break; 
              } 
          //внесення даних з БД
        echo'<h5 class="card-title">'.$myrowd["name"].'</h5>';
        echo'<p class="card-text">'.$myrowd["description"].'</p>';
        echo'<b class="card-text" style="position:absolute; bottom: 10px;">Ціна: '.$myrowd["price"].'$</b>';
            //логотипи компаній
        switch ($myrowd["business_id"]) {
            case 1:
                echo '<img src="img/rozetka.svg" class="card-img-top business-logo" style="position:absolute; bottom: 10px; right: 10px; width: 150px;" alt="...">';
              break;
            case 2:
                echo '<img src="img/yakaboo.svg" class="card-img-top business-logo" style="position:absolute; bottom: 10px; right: 10px; width: 150px;" alt="...">';
                break;
            case 3:
                echo '<img src="img/allo.svg" class="card-img-top business-logo" style="position:absolute; bottom: 10px; right: 10px; width: 150px;" alt="...">';
              break;
            case 4:
                echo '<img src="img/radius.svg" class="card-img-top business-logo" style="position:absolute; bottom: 10px; right: 10px; width: 150px;" alt="...">';
              break;
          }
        echo'</div>'.'</div>'.'</div>';
        } 
    }
?>