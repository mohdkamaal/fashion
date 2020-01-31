
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

<section id="products" class="product">
  <div class="container">
<h3>Products</h3>
<div class="row">
  <div class="col-sm-3 kolum">
    <div class="card kard" style="width:300px">
      <img class="card-img-top" src="image/card.jpg" alt="Card image">
      <div class="card-body">
       <h4 class="card-title">Shirts Styles</h4>
        <p class="card-text">Some example text.</p>
      <a href="#" class="btn btn-primary">Buy $10.00 only</a>
    </div>
  </div>
</div>

<div class="col-sm-3">
    <div class="card" style="width:300px">
    <img class="card-img-top" src="image/card2.jpg" alt="Card image">
    <div class="card-body">
    <h4 class="card-title">Top Style</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Buy $12.00 only</a>
  </div>
</div>
</div>
<div class="col-sm-3">
    <div class="card" style="width:300px">
  <img class="card-img-top" src="image/card3.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">T-shirts Styles</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">Buy $8.00 only</a>
  </div>
</div>
</div>
<div class="col-sm-3">
    <div class="card" style="width:300px">
  <img class="card-img-top" src="image/card4.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Tops Style</h4>
    <p class="card-text">Some example text.</p>
    <p5><small>offer only for today</small></p5>
    <a href="#" class="btn btn-primary">Buy $6.00 (offer)</a>
  </div>
</div>
</div>
</div>
</div>
</section>


<?php
  include("footer.php")
?>