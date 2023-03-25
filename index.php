<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="css/main.css" rel="stylesheet">
  <title>ПокупайКа</title>
</head>

<body style="background-color: rgb(250, 255, 208);">
  <!-- Верхня стрічка -->
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #fdc732;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <h3>
          <img src="img/logo.svg" alt="Logo" width="50" height="40" class="d-inline-block align-text-top">
          <b>ПокупайКа</b>
        </h3>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Пошук" aria-label="Пошук" style="width: 600px;">
        <button class="btn btn-outline-success" type="submit">Пошук</button>
      </form>

      <h4>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Вхід</a>
          </li>
          <li _ngcontent-rz-client-c129="" class="header-actions__item header-actions__item--language">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" href="#" style="font-size: small;">
                  <!----> Eng
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#" style="font-size: small;">
                  <!----> UA
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </h4>
    </div>
  </nav>

  <div class="container-fluid align-items-end" style="height: 45px;background-color: #FCD55E">
    <h2 id="Category" style="text-align: center;">Категорії товарів</h2>
  </div>

    <!-- Сarousel 1 -->
  <section>
    <div id="carouselExampleIndicators" class="carousel slide my-carousel" data-ride="carousel" data-bs-interval="5000">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
          aria-label="Slide 4"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <a href="#"><img src="img/notepad.jpg" class="w-100" alt="..."></a>
          <div class="carousel-caption d-none d-md-block">
            <a href="#" style="color: white;">
              <h5>ТЕХНІКА</h5>
            </a>
          </div>
        </div>
        <div class="carousel-item" style="padding: 0px;">
          <a href="#"><img src="img/bike.jpg" class="d-block w-100" alt="..."></a>
          <div class="carousel-caption d-none d-md-block">
            <a href="#" style="color: white;">
              <h5>СПОРТ</h5>
            </a>
          </div>
        </div>
        <div class="carousel-item">
          <a href="#"><img src="img/books.jpg" class="d-block w-100" alt="..."></a>
          <div class="carousel-caption d-none d-md-block">
            <a href="#" style="color: white;">
              <h5>КНИГИ</h5>
            </a>
          </div>
        </div>
        <div class="carousel-item">
          <a href="#"><img src="img/disky.jpg" class="d-block w-100" alt="..."></a>
          <div class="carousel-caption d-none d-md-block">
            <a href="#" style="color: white;">
              <h5>АВТОЗАПЧАСТИНИ</h5>
            </a>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>

    <div class="container-fluid" style="height: 45px; background-color: #FCD55E;">
      <h2 id="Category" style="text-align: center;">Новинки</h2>
    </div>
    <!-- 5 товарів на сторінці, інформація до яких береться з БД -->
    <div class="row row-cols-md-5 g-5 my-col">
      <?php
        include("php/product.php");
      ?>
    </div>

    <h1 style="padding-top: 20px;"></h1>
    <div class="container-fluid" style="height: 45px; background-color: #FCD55E;">
      <h3 id="animation-1" style="text-align: center;">Тут будуть ЗНИЖКИ!!!</h3>
    </div>

        <!--  Carousel 2-->

        <section class="mb-0"> <!--mb-0 отступ после слайда-->
          <div id="carousel-1" class="carousel slide" data-ride="carousel">
        
            <ol class="carousel-indicators">
              <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-1" data-slide-to="1"></li>
              <li data-target="#carousel-1" data-slide-to="2"></li>
              <li data-target="#carousel-1" data-slide-to="3"></li>
            </ol>
        
            <div class="carousel-inner" role="listbox">
        
              <div class="carousel-item active">
                <img class="d-block img-fluid w-100" src="https://picsum.photos/1600/400/?image=666" alt="slide">
                <div class="carousel-caption d-none d-md-block">
                  <h3>1 Lorem ipsum dolor</h3>
                  <p>two and more carousel in one page example...</p>
                </div>
              </div>
        
              <div class="carousel-item">
                <img class="d-block img-fluid w-100" src="https://picsum.photos/1600/400/?image=676" alt="Slide">
                <div class="carousel-caption d-none d-md-block">
                  <h3>2 Lorem ipsum dolor</h3>
                  <p>Lorem ipsum dolor sit amet, consetetur sadipscing...</p>
                </div>
              </div>
        
              <div class="carousel-item">
                <img class="d-block img-fluid w-100" src="https://picsum.photos/1600/400/?image=686" alt="Slide">
                <div class="carousel-caption d-none d-md-block">
                  <h3>3 Lorem ipsum dolor</h3>
                  <p>Lorem ipsum dolor sit amet, consetetur sadipscing...</p>
                </div>
              </div>
        
              <div class="carousel-item">
                <img class="d-block img-fluid w-100" src="https://picsum.photos/1600/400/?image=696" alt="Slide">
                <div class="carousel-caption d-none d-md-block">
                  <h3>4 Lorem ipsum dolor</h3>
                  <p>Lorem ipsum dolor sit amet, consetetur sadipscing...</p>
                </div>
              </div>
        
            </div><!-- e carousel-inner -->
        
            <a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">prev</span>
            </a>
        
            <a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">next</span>
            </a>
        
          </div><!-- e carousel -->
        </section>


        <form id="contact_form" enctype="multipart/form-data">
              <div class="field-wrapper">
               <div class="form-row col-md-6 col-sm-12">
                <div class="form-group has-feedback">
                  <input type="text" class="form-control" id="name" name="name" placeholder="Ваше Ім'я" />                  
                </div>
                <div class="form-group has-feedback">  
                  <input type="email" class="form-control" id="email" name="email" placeholder="Ваш Email " />                  
                </div>
                <div class="form-group has-feedback">
                  <input type="text" class="form-control" id="phone" name="phone" placeholder="Ваш телефон" />                 
                </div>
               </div>
               <div class="form-row col-md-6 col-sm-12">
                <div class="form-group has-feedback">
                   <textarea cols="60" rows="3" id="comment" name="comment" class="form-control" 
                   placeholder="Напишіть Ваші побажання - країна, готель, дати..."></textarea>                  
                </div>   
               </div>
               <div class="clear"></div>
               <div class="form-row  col-md-12">
                <h3 class="text-center">
                 <div id="error" class="text-center" style="color: #ff0000; "></div>
                </h3>
               </div>
               <div class="form-row  col-md-12">                
                 <!-- Кнопка, що відправляє форму по AJAX -->  
                <div class="text-center">
                  <button type="submit" class="btn btn-primary btn-lg">Відправити</button>
                </div>
               </div>
             </div>
            </form>
      
    <!-- Підвал -->

    <div class="footer" style="background-color:#fdc732">
      <h4 style="text-align: end;">
        <ul style="display:flex; list-style:none;">
          <li class="nav-item">
            <a class="nav-link active" style="color: black;" aria-current="page" href="#">Контакти</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color: black;" href="#">Про нас</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color: black;" href="#">Підтримка</a>
          </li>
        </ul>
      </h4>
    </div>

    <script src="js/animation.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" rel="stylesheet">
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/form.js"></script>
  

</body>

</html>