<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/dashboard.css">
    <title>Dashboard!</title>
  </head>
  <body>
        <!-- Navbar -->
        <div class="container-navbar">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">
            <div class="container">
            @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('success')}}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
              <a class="navbar-brand" href="/admin">ADMIN</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                  
                  <a class="nav-link" href="/admin/data-post">Database</a>
                  <!-- <a class="nav-link" href="#">Layout</a> -->
                  <form action="/logout" method="POST">
                  @csrf
                  <a><button style="background-color: transparent; border:0px; color:white" class="btn" type="submit">Logout</button></a>
                  </form>

                </div>
              </div>
            </div>
          </nav>
      </div>
      <!-- End Navbar -->
    
    <div class="container text-center" id="taglineAdmin">
        <h2>Selamat Datang Di Halaman Admin</h2>
    </div>
    <div class="container text-center" id="taglineAdmin">
        <h5>Berisi Panduan untuk Operator dan Admin</h5> <br><br>
        <p>Button View Untuk melihat dan Print secara manual data dari User</p>
        <p>Button Details Untuk melihat Lampiran detail user</p>
    </div>

    <footer class="fixed-bottom text-center">
      <p class="mt-2">IT SUPPORT 0895610399549</p>
    </footer>



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