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
    <title>Register</title>
  </head>
  <body>
    <!-- Navbar -->
      <div class="container-navbar">
        <nav class="navbar navbar-expand-lg navbar-dark shadow">
            <div class="container">
              <a class="navbar-brand" href="/dashboard"><span><img src="/asset/SMCC-HK-LOGO-NOBG.png" width="100%" height="30px" alt=""></span></a>
                <form action="/logout" method="POST">
                  @csrf
                  <a><button style="border:0px; background-color: transparent; color:white" type="submit">Logout</button></a>
                  </form>
                </div>
              </div>
          </nav>
      </div>
      <!-- End Navbar -->

      <!-- Form Register -->
      <div class="container mt-3">
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
      </div>
      <div class="container mb-5" id="form-registered">
        <div class="card mx-auto" id="form" style="width: 22rem;">
          <div class="card-body">
              <h5 class="card-title text-center" style="margin-bottom: 40px; margin-top: 20px;">Form Register | Daftar</h5>
            <form action="/dashboard" method="POST" enctype="multipart/form-data">
              @csrf
                <!-- Company Name -->
                  <div class="mb-3">
                    <label for="CompanyName" class="form-label">Nama Perushaaan / Company name</label>
                    <input type="text" class="form-control @error('CompanyName') is-invalid @enderror"name="CompanyName" id="CompanyName">
                    @error('CompanyName')
                    <div class="alert alert-danger"> {{$message}}</div>
                    @enderror
                  </div>
                <!-- Company Position -->
                <div class="mb-3">
                    <label for="form-label">Posisi di Perusahaan / Position in Company <span style="color: red;">*</span></label>
                    <select class="form-select @error('CompanyPosition') is-invalid @enderror" name="CompanyPosition" aria-label="Default select example"Required>
                      <option selected></option>
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
                    <input type="text" name="nameUser" class="form-control @error('nameUser') is-invalid @enderror" id="nameUser" >
                    @error('nameUser')
                    <div class="alert alert-danger"> {{$message}}</div>
                    @enderror
                  </div>
                    <!-- Birth Place -->
                  <div class="mb-3">
                    <label for="birthPlace" class="form-label">Tempat Lahir / Birth Place <span style="color: red;">*</span></label>
                    <input type="text" name="birthPlace" class="form-control @error('birthPlace') is-invalid @enderror" id="birthPlace" >
                    @error('birthPlace')
                    <div class="alert alert-danger"> {{$message}}</div>
                    @enderror
                  </div>
                  <!-- Birth date -->
                  <div class="mb-3">
                    <label for="birthDate" class="form-label"> Tanggal Lahir / Birth Date <span style="color: red;">*</span></label>
                    <input type="date" name="birthDate" class="form-control @error('birthDate') is-invalid @enderror" id="birthDate" >
                    @error('birthDate')
                    <div class="alert alert-danger"> {{$message}}</div>
                    @enderror
                  </div>

                  <!-- Blood type -->
                  <div class="mb-3">
                    <label for="form-label">Golongan Darah / Blood Type</label>
                    <select class="form-select @error('BloodType') is-invalid @enderror" name="BloodType" aria-label="Default select example" >
                      <option selected></option>
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
                      <option selected></option>
                      <option value="Laki-Laki/Man">Laki-Laki/Man</option>
                      <option value="Perempuan/Woman">Perempuan/Woman</option>
                    </select>
                    @error('gender')
                    <div class="alert alert-danger"> {{$message}}</div>
                    @enderror
                  </div>
              <!-- Adress -->
              <div class="mb-3">
                  <label for="form-label">Alamat / Address <span style="color: red;">*</span></label>
                  <textarea type="text" class="form-control @error('Address') is-invalid @enderror" name="Address" id="Address" style="height: 100px" ></textarea>
                  @error('Address')
                    <div class="alert alert-danger"> {{$message}}</div>
                    @enderror
                </div>
                  <!-- Phone Number -->
              <div class="mb-3">
                  <label for="phoneNumber" class="form-label">Nomor Telpon / Phone Number <span style="color: red;">*</span></label>
                  <input type="text" name="phoneNumber" class="form-control @error('phoneNumber') is-invalid @enderror" id="phoneNumber" >
                  @error('phoneNumber')
                    <div class="alert alert-danger"> {{$message}}</div>
                    @enderror
                </div>
                <div class="mb-3">
                  <label for="emergencyphoneNumber" class="form-label"> Nama dan Nomor Telpon Darurat / Name & Emergency Phone Number <span style="color: red;">*</span></label>
                  <input type="text" name="emergencyphoneNumber" class="form-control @error('emergencyphoneNumber') is-invalid @enderror" id="emergencyphoneNumber" >
                  @error('phoneNumber')
                    <div class="alert alert-danger"> {{$message}}</div>
                    @enderror
                </div>
              
                <!-- Email -->
                  <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" aria-describedby="emailHelp">
                    @error('email')
                    <div class="alert alert-danger"> {{$message}}</div>
                    @enderror
                  </div>


                  <div class="mb-5 mt-5 text-center" style="background-color: red; color:white;">
                    <h3>File yang dibutuhkan / Required File</h3>
                    <p>Yang diberi tanda * Wajib diisi</p>
                  </div>
<!-- Wajib Diisi -->

                  <!-- File KTP/SIM/Passport -->
                  <div class="mb-3">
                    <label for="identity" class="form-label">KTP/SIM/PASSPORT <span style="color: red;">*</span></label>
                    <input class="form-control @error('identity') is-invalid @enderror" name="identity" type="file" id="identity"accept="image/*" >
                    @error('identity')
                    <div class="alert alert-danger"> {{$message}}</div>
                    @enderror
                  </div>

                  <!-- Photo 3x4 -->

                  <div class="mb-3">
                      <label for="photo" class="form-label">Photo 3x4 <span style="color: red;">*</span></label>
                      <input class="form-control @error('photo') is-invalid @enderror" type="file" name="photo" id="photo" accept="capture=camera">
                    @error('photo')
                    <div class="alert alert-danger"> {{$message}}</div>
                    @enderror
                    </div>
                 <!-- Antigen Result -->

                  <div class="mb-3">
                    <label for="Antigen" class="form-label"> Hasil Antigen / Antigen Result <span style="color: red;">*</span></label>
                    <input class="form-control @error('antigen') is-invalid @enderror" type="file" name="antigen" id="Antigen"accept="file/*" >
                    @error('antigen')
                    <div class="alert alert-danger"> {{$message}}</div>
                    @enderror
                  </div>

                  <!-- Vaccine status -->

                  <div class="mb-3">
                    <label for="Vaccine" class="form-label">Bukti Vaksin / Vaccine Status <span style="color: red;">*</span></label>
                    <input class="form-control @error('vaccine') is-invalid @enderror" type="file" name="vaccine" id="Vaccine"accept="file/*" >
                    @error('vaccine')
                    <div class="alert alert-danger"> {{$message}}</div>
                    @enderror
                  </div>

                  <!-- Certificate of Health -->

                  <div class="mb-3">
                    <label for="Health" class="form-label">Surat Keterangan Sehat / Certificate of Health <span style="color: red;">*</span></label>
                    <input class="form-control @error('health') is-invalid @enderror" type="file" name="health" id="Health"accept="file/*" >
                    @error('health')
                    <div class="alert alert-danger"> {{$message}}</div>
                    @enderror
                  </div>

<!-- Tidak Wajib -->
                   <!-- Visa -->
                  <div class="mb-3">
                    <label for="visa" class="form-label">Visa</label>
                    <input class="form-control @error('visa') is-invalid @enderror" type="file" name="visa" id="visa"accept="file/*">
                    @error('visa')
                    <div class="alert alert-danger"> {{$message}}</div>
                    @enderror
                  </div>

                  <!-- Operator License -->

                  <div class="mb-3">
                    <label for="LicenseOp" class="form-label">Surat Izin Operator / Operator License</label>
                    <input class="form-control @error('operatorLicense') is-invalid @enderror" type="file" name="operatorLicense" id="LicenseOp"accept="file/*">
                    @error('operatorLicense')
                    <div class="alert alert-danger"> {{$message}}</div>
                    @enderror
                  </div>

                  <!-- Other Certificate -->

                  <div class="mb-3">
                    <label for="Certificate" class="form-label">Sertifikat lainnya / Other Certificate</label>
                    <input class="form-control @error('email') is-invalid @enderror" type="file" name="certificate" id="Certificate"accept="image/*">
                    @error('certificate')
                    <div class="alert alert-danger"> {{$message}}</div>
                    @enderror
                  </div>

                <!-- Disease History -->
                <div class="mb-3">
                    <label for="riwayat_penyakit" class="form-label">Riwayat Penyakit / Disease History</label>
                    <input type="text" name="riwayat_penyakit" class="form-control @error('riwayat_penyakit') is-invalid @enderror" id="riwayat_penyakit" >
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