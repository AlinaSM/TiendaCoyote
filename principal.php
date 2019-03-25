<?php
require_once('head.php');
require_once('header.php');
?>


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="resources/img/slider/slider01.jpg">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="resources/img/slider/slider02.jpg" >
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="resources/img/slider/slider03.jpg" >
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="resources/img/slider/slider04.jpg" >
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

<?php
require_once('footer.php');
?>