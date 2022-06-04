<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-  datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <title>Edit Data</title>
  </head>
  <body>
    <!-- Navbar -->
      <div class="container-navbar">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">
            <div class="container">
              <a class="navbar-brand" href="/dashboard"><span><img src="/asset/SMCC-HK-LOGO-NOBG.png" width="100%" height="30px" alt=""></span></a>
                </div>
              </div>
          </nav>
      </div>
      <!-- End Navbar -->
      <!-- Form Register -->
      @foreach($data as $data)
      <div class="container" id="form-registered">
        <div class="card mx-auto" id="form" style="width: 22rem;">
          <div class="card-body">
          <span><img src="/asset/SMCC-HK-LOGO.png" width="100%" alt=""></span>
              <h5 class="card-title text-center" style="margin-bottom: 40px; margin-top: 20px;">Edit Data</h5>
              <!-- Form -->
              <form action="edit/" method="POST" enctype="multipart/form-data">
              @csrf
              <input type="hidden" name="id" value="{{ $data->id }}"> <br/>
                <!-- Company Name -->
                  <div class="mb-3">
                    <label for="CompanyName" class="form-label">Nama Perushaaan / Company name</label>
                    <input value="{{$data->CompanyName}}" type="text" class="form-control @error('CompanyName') is-invalid @enderror"name="CompanyName" id="CompanyName">
                    @error('CompanyName')
                    <div class="alert alert-danger"> {{$message}}</div>
                    @enderror
                    
                  </div>
                <!-- Company Position -->
                <div class="mb-3">
                    <label for="form-label">Posisi di Perusahaan / Position in Company <span style="color: red;">*</span></label>
                    <select class="form-select @error('CompanyPosition') is-invalid @enderror" name="CompanyPosition" aria-label="Default select example"Required>
                      <option selected>{{$data->CompanyPosition}}</option>
                      <option value="Visitor">HSE</option>
                      <option value="Visitor">Visitor</option>
                      <option value="Worker / Pekerja Harian">Worker / Pekerja Harian</option>
                      <option value="SPV / Supervisor">SPV / Supervisor</option>
                      <option value="Operator Heavy Equipment">Operator Heavy Equipment</option>
                      <option value="Manager">Manager</option>
                      <option value="Deputy Manager">Deputy Manager</option>
                      <option value="Chief">Chief</option>
                      <option value="Engineer">Engineer</option>
                      <option value="Inspector">Inspector</option>
                      <option value="Foreman">Foreman</option>
                      <option value="Inspector">Inspector</option>
                      <option value="Administration">Administration</option>
                      <option value="Security Personnel">Security Personnel</option>
                      <option value="Logistic/Warehouse">Logistic/Warehouse</option>
                      <option value="Surveyor">Surveyor</option>
                      <option value="Scaffolder">Scaffolder</option>
                      <option value="Rigger">Rigger</option>
                      <option value="Driver">Driver</option>
                      <option value="Welder">Welder</option>
                      <option value="Carpenter">Carpenter</option>
                      <option value="Mechanic">Mechanic</option>
                      <option value="Electrician">Electrician</option>
                      <option value="Rebarman">Rebarman</option>
                    </select>
                    @error('BloodType')
                    <div class="alert alert-danger"> {{$message}}</div>
                    @enderror
                  </div>

                <!-- nameUser -->
                  <div class="mb-3">
                    <label for="nameUser" class="form-label">Name <span style="color: red;">*</span></label>
                    <input value="{{$data->nameUser}}" type="text" name="nameUser" class="form-control @error('nameUser') is-invalid @enderror" id="nameUser" >
                    @error('nameUser')
                    <div class="alert alert-danger"> {{$message}}</div>
                    @enderror
                  </div>
                    <!-- Birth Place -->
                  <div class="mb-3">
                    <label for="birthPlace" class="form-label">Tempat Lahir / Birth Place <span style="color: red;">*</span></label>
                    <input value="{{$data->birthPlace}}" type="text" name="birthPlace" class="form-control @error('birthPlace') is-invalid @enderror" id="birthPlace" >
                    @error('birthPlace')
                    <div class="alert alert-danger"> {{$message}}</div>
                    @enderror
                  </div>
                  <!-- Birth date -->
                  <div class="mb-3">
                    <label for="birthDate" class="form-label"> Tanggal Lahir / Birth Date <span style="color: red;">*</span></label>
                    <input value="{{$data->birthDate}}" type="date" name="birthDate" class="form-control @error('birthDate') is-invalid @enderror" id="birthDate" >
                    @error('birthDate')
                    <div class="alert alert-danger"> {{$message}}</div>
                    @enderror
                  </div>

                  <!-- Blood type -->
                  <div class="mb-3">
                    <label for="form-label">Golongan Darah / Blood Type</label>
                    <select class="form-select @error('BloodType') is-invalid @enderror" name="BloodType" aria-label="Default select example" >
                      <option selected>{{$data->BloodType}}</option>
                      <option value="A">A</option>
                      <option value="B">B</option>
                      <option value="AB">AB</option>
                      <option value="O">O</option>
                    </select>
                    @error('BloodType')
                    <div class="alert alert-danger"> {{$message}}</div>
                    @enderror
                  </div>
                    <!-- Gender type -->
                  <div class="mb-3">
                    <label for="form-label">Jenis Kelamin / Gender</label>
                    <select class="form-select @error('gender') is-invalid @enderror" name="gender" aria-label="Default select example"required >
                      <option selected>{{$data->gender}}</option>
                      <option value="Laki">Laki-Laki/Man</option>
                      <option value="Wanita">Perempuan/Woman</option>
                    </select>
                    @error('gender')
                    <div class="alert alert-danger"> {{$message}}</div>
                    @enderror
                  </div>
              <!-- Adress -->
              <div class="mb-3">
                  <label for="form-label">Alamat / Address <span style="color: red;">*</span></label>
                  <textarea placeholder="{{$data->Address}}" type="text" class="form-control @error('Address') is-invalid @enderror" name="Address" id="Address" style="height: 100px" ></textarea>
                  @error('Address')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                  <!-- Phone Number -->
              <div class="mb-3">
                  <label for="phoneNumber" class="form-label">Nomor Telpon / Phone Number <span style="color: red;">*</span></label>
                  <input value="{{$data->phoneNumber}}" type="text" name="phoneNumber" class="form-control @error('phoneNumber') is-invalid @enderror" id="phoneNumber" >
                  @error('phoneNumber')
                    <div class="alert alert-danger"> {{$message}}</div>
                    @enderror
                </div>
                <div class="mb-3">
                  <label for="emergencyphoneNumber" class="form-label"> Nama dan Nomor Telpon Darurat / Name & Emergency Phone Number <span style="color: red;">*</span></label>
                  <input value="{{$data->emergencyphoneNumber}}"type="text" name="emergencyphoneNumber" class="form-control @error('emergencyphoneNumber') is-invalid @enderror" id="emergencyphoneNumber" >
                  @error('phoneNumber')
                    <div class="alert alert-danger"> {{$message}}</div>
                    @enderror
                </div>
              
                <!-- Email -->
                  <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input value="{{$data->email}}"type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" aria-describedby="emailHelp">
                    @error('email')
                    <div class="alert alert-danger"> {{$message}}</div>
                    @enderror
                  </div>                  
                <!-- Disease History -->
                <div class="mb-3">
                    <label for="riwayat_penyakit" class="form-label">Riwayat Penyakit / Disease History</label>
                    <input value="{{$data->riwayat_penyakit}}" type="text" name="riwayat_penyakit" class="form-control @error('riwayat_penyakit') is-invalid @enderror" id="riwayat_penyakit" >
                    @error('riwayat_penyakit')
                    <div class="alert alert-danger"> {{$message}}</div>
                    @enderror
                  </div>

                <!-- Schedule Safety Induction -->
                <div class="container">
                  <div class="mb-3">
                    <label for="Schedule" class="form-label">Schedule Safety Induction </label>
                    <select class="form-select @error('schedule') is-invalid @enderror" name="schedule" id="Schedule">
                      <!-- <option selected>~</option>> -->
                      <option value="Senin sesi 1">Senin / Monday Sesi 1 / Session 1 (9.00 - 11.00)</option>
                      <option value="Senin sesi 2">Senin / Monday Sesi 2 / Session 2 (13.30 - 15.30)</option>
                      <option value="Rabu sesi 1">Rabu / Wednesday Sesi 1 / Session 1 (9.00 - 11.00)</option>
                      <option value="Rabu  sesi 2">Rabu / Wednesday Sesi 2 / Session 2 (13.30 - 15.30)</option>
                      <option value="Kamis  sesi 1">Kamis / Thursday Sesi 1 / Session 1 (9.00 - 11.00)</option>
                      <option value="Kamis  sesi 2">Kamis / Thursday Sesi 2 / Session 2 (13.30 - 15.30)</option>
                    </select>
                    @error('schedule')
                      <div class="alert alert-danger"> {{$message}}</div>
                      @enderror
                  </div>
                </div>

                <div class="mb-2 text-center">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
              </form>
          </div>
        </div>
        @endforeach
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