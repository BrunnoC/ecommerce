<?php 
    $LoginAtiva = " active ";
    $titulo = "Fusa | Login";
    include_once "utils/header.php";
?>

  <!--DESTAQUES-->
  <div class="container" id="featured-container">
    <div class="col-12">
      <h2 class="title primary-color">Categorias dos nossos produtos</h2>
      <p class="subtitle secondary-color">
        Conheça nosso catálogo
      </p>
    </div>
    <div class="col-12" id="featured-images">
      <div class="row g-4">
        <div class="col-12 col-md-4">
          <img src="img/violino.png" alt="Categoria de Cordas" class="img-fluid">
          <div class="banner-content">
            <p class="secondary-color">Categoria</p>
            <h3>Cordas</h3>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <img src="img/saxofone.png" alt="Categoria de Sopro de Madeira" class="img-fluid">
          <div class="banner-content">
            <p class="secondary-color">Categoria</p>
            <h3>Sopro de Madeira</h3>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <img src="img/trompete.jpg" alt="Categoria de Sopro de Metal" class="img-fluid">
          <div class="banner-content">
            <p class="secondary-color">Categoria</p>
            <h3>Sopro de Metal</h3>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <img src="img/ukulele.jpg" alt="Categoria de violão, viola e ukuleles" class="img-fluid">
          <div class="banner-content">
            <p class="secondary-color">Categoria</p>
            <h3>Violão, viola e ukuleles</h3>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <img src="img/guitarra.jpg" alt="Categoria de Elétricos" class="img-fluid">
          <div class="banner-content">
            <p class="secondary-color">Categoria</p>
            <h3>Elétricos</h3>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <img src="img/pedaleira.jpg" alt="Categoria de Eletrônicos" class="img-fluid">
          <div class="banner-content">
            <p class="secondary-color">Categoria</p>
            <h3>Eletrônicos</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--INFO-->
  <div class="container" id="info-container">
    <div class="col-12">
      <h2 class="title primary-color">Detalhes Importantes</h2>
      <p class="subtitle secondary-color">
        como estamos melhorando o mundo...
      </p>
    </div>
    <div class="row">
      <div class="col-12 col-md-5" id="info-banner">
        <img src="img/loja.jpg" alt="Loja Interno" class="img-fluid">
      </div>
      <div class="col-12 col-md-7 bg-secondary-color" id="info-content">
        <div class="row">
          <div class="col-12">
            <h2 class="title primary-color">Estes dados fazem a diferença</h2>
            <p class="subtitle secondary-color">
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos odio corporis, delectus minus architecto laudantium molestiae, reprehenderit aperiam, eaque voluptas optio. Eaque aperiam consectetur perspiciatis aliquam expedita! Ratione, voluptas asperiores.
            </p>
          </div>
          <div class="col-12" id="info-numbers">
            <div class="row">
              <div class="col-4">
                <h3 class="primary-color">18</h3>
                <p class="secondary-color">Anos no ramo musical</p>
              </div>
              <div class="col-4">
                <h3 class="primary-color">1489</h3>
                <p class="secondary-color">Instrumentos vendidos</p>
              </div>
              <div class="col-4">
                <h3 class="primary-color">2073</h3>
                <p class="secondary-color">Clientes apaixonados pela música</p>
              </div>
            </div>
          </div>
          <div class="col-12">
            <a href="#" class="btn btn-dark">saber Mais</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <?php
  require_once "utils/footer.php";
?>