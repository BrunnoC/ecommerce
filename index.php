<?php
    $HomeAtiva = " active ";
    $titulo = "Fusa Instrumentos Musicais";
    require_once "utils/header.php";
?>

  <!--SLIDER-->
  <div class="container" id="slider-container">
    <div class="carousel slide" id="slider" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button 
          type="button" 
          class="active" 
          data-bs-target="#slider" 
          data-bs-slide-to="0" 
          aria-current="true" 
          aria-label="Slide 1"
          ></button>
          <button 
          type="button" 
          data-bs-target="#slider" 
          data-bs-slide-to="1" 
          aria-label="Slide 2"
          ></button>
          <button 
          type="button" 
          data-bs-target="#slider" 
          data-bs-slide-to="2" 
          aria-label="Slide 3"
          ></button>
      </div>
      <div class="carousel-inner">

        <div class="carousel-item active">
          <img src="img/banner1.jpg" alt="banner 1" class="d-block w-100">
          <div class="carousel-caption">
            <h5>Instrumentos de corda</h5>
            <a href="#" class="btn btn-dark">Ver Instrumentos</a>
          </div>
        </div>

        <div class="carousel-item">
          <img src="img/banner2.jpg" alt="banner 2" class="d-block w-100">
          <div class="carousel-caption">
            <h5>Instrumentos de sopro</h5>
            <a href="#" class="btn btn-dark">Ver Instrumentos</a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/banner3.jpg" alt="banner 3" class="d-block w-100">
          <div class="carousel-caption">
            <h5>Instrumentos de percurssão</h5>
            <a href="#" class="btn btn-dark">Ver Instrumentos</a>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#slider" data-bs-slide="prev">
        <i class="bi bi-chevron-compact-left"></i>
        <span class="visually-hidden">Anterior</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#slider" data-bs-slide="next">
        <i class="bi bi-chevron-compact-right"></i>
        <span class="visually-hidden">Proxima</span>
      </button>
    </div>
    <!--MINIBANNERS-->
    <div class="col-12 col-md-10 offset-md-1" id="mini-banners">
      <div class="row">
        <div class="col-12 col-md-4">
          <div class="card text-center">
            <i class="bi bi-box primary-color"></i>
            <div class="card-body">
              <h5 class="card-title primary-color">Projetos completos</h5>
              <p class="card-text secondary-color">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
              </p>
              <a href="#" class="btn btn-dark">Saber Mais</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="card text-center">
            <i class="bi bi-layers primary-color"></i>
            <div class="card-body">
              <h5 class="card-title primary-color">Você Participa Também</h5>
              <p class="card-text secondary-color">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
              </p>
              <a href="#" class="btn btn-dark">Saber Mais</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="card text-center">
            <i class="bi bi-lightbulb primary-color"></i>
            <div class="card-body">
              <h5 class="card-title primary-color">Novas ideias</h5>
              <p class="card-text secondary-color">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
              </p>
              <a href="#" class="btn btn-dark">Saber Mais</a>
            </div>
          </div>
        </div>
      </div>
    </div>


  </div>
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