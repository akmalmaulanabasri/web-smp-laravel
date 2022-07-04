<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <title>PONPES Fathan Mubina | {{ $page }}</title>
  </head>
  <body>

  <style>
    .c-main{
        color: #8743CC;
    }
    .b-main{
        background-color: #8743CC;
    }
  </style>

  <div class="container p-3 d-flex text-center justify-content-around align-items-center">
    <img src="https://fathanmubina.com/wp-content/uploads/2019/12/logo.png" alt="" width="100px" class="img-fluid">
    <div class="">
        <h2 class="c-main text-center">PONDOK PESANTREN FATHAN MUBINA</h2>
        <h4 class="text-secondary text-center">Insan Cendekia Berakhlak Mulia</h4>
    </div>
  </div>

  <nav data-aos="fade-down" data-aos-duration="1500" class="b-main navbar navbar-expand-lg text-light" id="mainNav">
        <div class="container container-custom">
            <!-- <a class="navbar-brand text-light" href="/">Akmal Maulana</a> -->
            <button class="navbar-toggler font-weight-bold bg-info text-dark rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi bi-list"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item mx-0 mx-lg-4"><a class="nav-link py-3 px-0 px-lg-3 rounded text-light" href="/">Beranda</a></li>
                    <li class="nav-item mx-0 mx-lg-4"><a class="nav-link py-3 px-0 px-lg-3 rounded text-light" href="/artikel">Artikel</a></li>
                    <li class="nav-item mx-0 mx-lg-4"><a class="nav-link py-3 px-0 px-lg-3 rounded text-light" href="/galeri">Galeri</a></li>
                    <li class="nav-item mx-0 mx-lg-4"><a class="nav-link py-3 px-0 px-lg-3 rounded text-light" href="/kontak">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>

  @yield('content')

  <div class="sticky-bottom container-fluid b-main fixed-button pt-3 pb-3">
    <div class="container">
        <div class="text-center text-white">
            2022 @akmalmaulana
        </div>
    </div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>