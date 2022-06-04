<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/detail.css">
    <title>Database</title>
  </head>
  <body>
    @foreach($data as $item)
	  <!-- Informasi Pribadi -->
	<div class="container mt-3 mb-2 text-justify shadow-lg"id="biodata">
		<h4>Informasi Pribadi</h4>
      <div class="container" id="biodata">
        <div class="row">
            <div class="col mt-2 text-justify" id="identitas">
              <p>Nama Karyawan<br>
                Tempat tanggal lahir<br>
                Golongan darah<br>
                Alamat Domisili<br>
                No Telepon<br>
                No Telepon Darurat<br>
                Nama Perusahaan/Posisi
              </p>
            </div>
              <div class="col mt-2 text-justify">
                <p>: {{$item->nameUser}}<br>
                : {{$item->birthPlace}} {{Carbon\Carbon::parse($item->birthDate)->format('d-m-Y')}}<br>
                : {{$item->BloodType}}<br>
                : {{$item->Address}}<br>
                : {{$item->phoneNumber}}<br>
                : {{$item->emergencyphoneNumber}}<br>
                : {{$item->CompanyName}}/{{$item->CompanyPosition}}
              </p>
              </div>
            </div>
        </div>
	<!-- Lampiran -->
      <div class="container mt-2 mb-2 text-center">
        <h4>Lampiran</h4>
      </div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12">
            <table class="table table-sm table-bordered">
              <thead>
              <tr class="text-center">
                  <th scope="col-2">Photo 3x4 </th>
                  <th scope="col-2">KTP</th>
                </tr>
              </thead>
              <tbody>
                <tr class="text-center">
                  <td><img src="/storage/{{$item->photo}}"width="200px" height="300px"></td>
                <td><img src="/storage/{{$item->identity}}"width="200px" height="300px" alt=""></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      
      <div class="container mb-3">
        <div class="row justify-content-center">
          <div class="col-12">
            <table class="table table-sm table-bordered text-center">
              <tr>
                <th>Lampiran</th>
                <th>File</th>
              </tr>
              <tr>
                <td>Vaksin</td>
                <td><a href="/storage/{{$item->vaccine}}">Preview</a></td>
              </tr>
              <tr>
                <td>Antigen</td>
                <td><a href="/storage/{{$item->antigen}}">Preview</a></td>
              </tr>
              <tr>
                <td>Visa</td>
                <td><a href="/storage/{{$item->visa}}">Preview</a></td>
              </tr>
              <tr>
                <td>Lisensi Operator</td>
                <td><a href="/storage/{{$item->operatorLicense}}">Preview</a></td>
              </tr>
              <tr>
                <td>Sertifikat Lainnya</td>
                <td><a href="/storage/{{$item->certificate}}">Preview</a></td>
              </tr>
              <tr>
                <td>Riwayat Penyakit</td>
                <td>{{$item->riwayat_penyakit}}</td>
              </tr>
              <tr>
                <td>Schedulue</td>
                <td>{{$item->schedule}}</td>
              </tr>
          </table>
          </div>
        </div>
      </div>

	<!-- Lampiran tambahan -->
  

    
    @endforeach
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