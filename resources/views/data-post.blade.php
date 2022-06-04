<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{URL::asset('css/dashboard.css');}} ">

    <title>Database</title>
  </head>
  <body>
        <!-- Navbar -->
        <div class="container-navbar">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">
            <div class="container">
              <a class="navbar-brand" href="/admin">ADMIN</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                  <a class="nav-link" href="/admin/data-post">Database</a>
                  <a class="nav-link" href="/admin/grafik">Grafik</a>
                  <!-- <a class="nav-link active" href="/admin/view">Layout</a> -->
                  <form action="/logout" method="POST">
                  @csrf
                  <a><button style="background-color: transparent; border:0px; color:white" class="btn" type="submit">Logout</button></a>
                  </form>
                </div>
              </div>
            </div>
          </nav>
      </div>
    
    <div class="container text-center">
        <h2 id="titletable">Dashboard Admin</h2>
    
    <div class="row justify-content-center">
    <div class="col-6 mt-5">
        <form action="/admin/data-post" method="GET">
          <div class="input-group mb-3">
          <input type="search" class="form-control" placeholder="Search..Posisi/Perusahaan/Gender" name="search" value="{{$search}}">
            <button type="submit" class="btn btn-primary">Search</button>
          </div>
          </form>
        </div>
    </div>
    <div class="row justify-content-center">
    <div class="col-6">
        @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('success')}}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
        </div>
    </div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12">
        <div class="table-responsive text-center">
        <table class="table table-sm table-bordered text-center">
            <thead>
              <tr>
                <th style="width:10%;">ID</th>
                <th style="width:10%;">Username</th>
                <th style="width:10%;">Company Name</th>
                <th style="width:10%;">Company Position</th>
                <th style="width:10%;">Gender</th>
                <th style="width:10%;">Phone Number</th>
                <th style="width:10%;">schedule</th>
                <th style="width:20%;">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($data_user as $data)
              
              <tr>
                <th scope="row">{{$data -> id}}</th>
                <td>{{$data -> nameUser}}</td>
                <td>{{$data['CompanyName']}}</td>
                <td>{{$data['CompanyPosition']}}</td>
                <td>{{$data['gender']}}</td>
                <td>{{$data['phoneNumber']}}</td>
                <td>{{$data['schedule']}}</td>
                <td>
                <form method="GET" action="view/{{$data->id}}" style="display: inline-block;">
                  @csrf
                  <button class="btn btn-sm btn-primary" id="action">View</button></form>
                  <form method="GET" action="detail/{{$data->id}}" style="display: inline-block;">
                  @csrf
                  <button class="btn btn-sm btn-secondary"id="action">Detail</button> </form>
                  <form method="GET" action="edit/{{$data->id}}" style="display: inline-block;">
                  @csrf
                  <button class="btn btn-sm btn-warning" id="action">Edit</button> </form>
                  
                  <form method="POST" action="destroy/{{$data->id}}" style="display: inline-block;">
                  @csrf
                  <button class="btn btn-sm btn-danger"id="action" onclick="return confirm('Delete?')">Delete</button> </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {{$data_user->links()}}
          </div>
        </div>
      </div>
    </div>
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