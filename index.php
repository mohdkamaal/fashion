<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  
  </head>
  <body>
  <?php
    include("header.php");
    
  ?>


<!-- Slider -->
<section id="slider">

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/slider.jpg" class="imageslider" alt="...">
    </div>
    <div class="carousel-item">
      <img src="image/slider2.jpg" class="imageslider" alt="...">
    </div>
    <div class="carousel-item">
      <img src="image/slider3.jpg" class="imageslider" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</section>

<!--Products  -->

<section id="products" class="container">
<h3>PRODUCTS</h3>
<div class="row">
  <div class="col-sm-3">
    <div class="card" style="width:400px">
  <img class="card-img-top" src="image/card.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Shirts Styles</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Buy $10.00 only</a>
  </div>
</div>
</div>

<div class="col-sm-3">
    <div class="card" style="width:400px">
  <img class="card-img-top" src="image/card2.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Top Style</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Buy $12.00 only</a>
  </div>
</div>
</div>
<div class="col-sm-3">
    <div class="card" style="width:400px">
  <img class="card-img-top" src="image/card3.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">T-shirts Styles</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Buy $8.00 only</a>
  </div>
</div>
</div>
<div class="col-sm-3">
    <div class="card" style="width:400px">
  <img class="card-img-top" src="image/card4.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Tops Style</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Buy $6.00 (offer)</a>
  </div>
</div>
</div>
</div>

</section>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <?php
    include("footer.php");
    ?>
    </body>
</html>