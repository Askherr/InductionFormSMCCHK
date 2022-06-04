<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{URL::asset('css/style.css');}} ">
    <!-- Text -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Outfit&family=Overpass:wght@300&family=Ubuntu&display=swap" rel="stylesheet">
    
    <!-- Tittle -->
    <title>Induction Register SMCC-HK JO</title>
  </head>
  <body>
    
    <!-- Navbar -->

      <div class="container-navbar">
        <nav class="navbar navbar-expand-lg navbar-dark shadow">
            <div class="container">
            <a class="navbar-brand" href="/dashboard"><span><img src="/asset/SMCC-HK-LOGO-NOBG.png" width="100%" height="30px" alt=""></span></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                  <a class="nav-link active" aria-current="page" href="/about">About</a>
                  <a class="nav-link active" href="/register">Register</a>
                  <a class="nav-link active" href="/login">Login</a>
                </div>
              </div>
            </div>
          </nav>
      </div>
      <!-- End Navbar -->


      <!-- Tagline -->
      <div class="container text-center" id="welcome">
      @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('success')}}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
          <h1>Selamat datang</h1> <br>
          <h2 style="color: rgb(202, 199, 199);">
              Induction Form
              SMCC-HK Joint Operation 
              MRT JAKARTA CP-203
            </h2>
      </div>

      <!-- buttongroup login register -->
      <div class="container text-center">
          <div class="btn-group">
              <a href="/register" type="button" class="btn btn-primary" id="btn">Register</a>
            </div>
        </div>






    


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>