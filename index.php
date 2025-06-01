<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <title>Academia</title>
    <link rel="icon" href="" type="image/x-icon">
</head>
<body class="montserrat-fonte">
    <header>
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid  container-lg py-3">
              <a class="navbar-brand" href="#">Prof. Raquel</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                  <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                  <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                          <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                      </ul>
                    </li>
                  </ul>
                  <form class="d-flex mt-3" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                  </form>
                </div>
              </div>
            </div>
          </nav>
    </header>
    <main>
      <div style="background-color: lightgray;">
        <div class="container-lg d-flex justify-content-between">
            <div>
                <h1 class="pb-1 pt-5" style="color: red; font-size: 50px;">AULAS FITNESS</h1>
                <h3 style="font-size: 35px;" class="pb-5">Mudando vidas, aqui mesmo</h3>
                <p style="font-size: 27px;">Com mais de 100 aulas para escolher, oferecemos <br> algo para todas as idades, níveis de <br> condicionamento físico e habilidades. Temos <br> favoritos de condicionamento físico como Zumba,<br> Spin e Yoga, bem como aulas novas e exclusivas <br> como Group Cycle.</p>
                <a class="cadastro" href="cadastro.php">Inscrever-se</a>
            </div>
            <div style="float: right;">
                <img style="width: 70%;" class="mt-5" src="/img/Raquel.png" alt="Feia que treina">
            </div>
        </div>
      </div>

      <div class="cartoes">
        <div class="row justify-content-center">
        <?php
          for ($i=0; $i < 3; $i++) { 
            ?>

              <div class="card mx-5 my-4" style="width: 18rem;">
                <img src="/img/<?=$i?>.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>

              
          
            <?php
          }
        ?>
        </div>

        <div class="row">
          <div class="col-6 text-center mt-5">
            <h1>Treinamentos de <br> Fitness Completos</h1>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit <br> esse cillum dolore eu fugiat nulla pariatur. Excepteur sint<br> occaecat cupidatat non proident, sunt in culpa qui officia<br> deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-6">
             <img style="width: 70%;" class="mt-5" src="/img/Raquel.png" alt="Feia que treina">
          </div>
        </div>

      </div>


    <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false" data-bs-ride="carousel" data-bs-interval="3000" data-bs-pause="false">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="/img/c1.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="/img/c2.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="/img/c3.png" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>



    </main>
    <footer>
      
    </footer>
</body>
</html>