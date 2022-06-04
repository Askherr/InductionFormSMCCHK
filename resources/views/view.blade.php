<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/view.css">
    <title>Database</title>
  </head>
  <body>
  <!-- <a class="btn btn-sm btn-secondary" style="display: inline-block;" onclick="window.print()">Print</a> -->

    @foreach($data as $item)
    <!-- Header -->
    <div class="container" id="titleform">
      <div class="row">
        <div id="col-3" class="col-3 text-center">
            <img src="/asset/SMCC-HK-LOGO.png" width="100%" height="70px" alt="">
        </div>
        <div id="col-6" class="col-6 text-center">
            <h4>Form Induction</h4>
            <p style="font-weight: bold ;">Project MRT Phase 2 CP 203 SMCC - HK JO</p>
        </div>
        <div id="col-3" class="col-3">
            <h5>Doc.No : <span style="color:black; text-decoration: underline; white-space: pre;">                       </span></h5>
			<!-- <span style="color:black; text-decoration: underline; white-space: pre;">                  </span></h5> -->
            <h5 style="margin-top:7px;">Date :<span style="color:black;white-space: pre;">{{ Carbon\Carbon::parse($item->created_at)->format('d-m-Y') }}</span></h5></h5>

        </div>
      </div>
      <div class="row">
        <div class="col-5 mt-3 text-justify "id="biodata">
           <p>Nama Karyawan <span style="color:blue; font-style:italic;">Name of Employee</span><br>
            Tempat tanggal lahir <span style="color:blue; font-style:italic;">Birth Date </span><br>
            Golongan darah <span style="color:blue; font-style:italic;">BloodType </span><br>
            Alamat Domisili <span style="color:blue; font-style:italic;">Address</span><br>
            No Telepon <span style="color:blue; font-style:italic;">Phone Number </span><br>
            No Telepon Darurat <span style="color:blue; font-style:italic;">Emergency Phone Number</span><br>
            Nama Perusahaan/Posisi <span style="color:blue; font-style:italic;">Company/Position</span></p>
        </div>
        <div class="col-4 mt-3 text-justify" id="biodata">
          <p>: {{$item->nameUser}}<br>
          : {{$item->birthPlace}}<br>
          : {{$item->BloodType}}<br>
          : {{$item->Address}}<br>
          : {{$item->phoneNumber}}<br>
          : {{$item->emergencyphoneNumber}}<br>
          : {{$item->CompanyName}} / {{$item->CompanyPosition}}</p>

        </div>
        <div class="col-3 mt-2 text-justify">
          <div class="container">
            <img src="/storage/{{$item->photo}}" width="100%" height="140px" id="photo" alt="">
          </div>
          <!-- Foto -->
        </div>
      </div>
    </div>

	<div class="container" id="komitmen">
		<div class="row">
			<div class="col-12 text-center">
				<p id="komitmenkaryawan">Komitmen Karyawan</p>
			</div>
			<div class="col-12">
				<p id="isikomitmenkaryawan">Setelah saya mengikuti kelas pengenalan Safety Induction dari awal hingga akhir, saya telah memahami materi tersebut. Pemahaman tersebut secara sadar saya gunakan untuk menyetujui lembar perjanjian ini dimana bila melanggar ketentuan-ketentuan atau peraturan-peraturan proyek maka saya bersedia menerima sanksi sesuai aturan yang berlaku. <br> 
					<span style="color:blue; font-style:italic;">After I took the HSE Field Introduction (Safety Induction) class from beginning to end, I understood the material. I consciously use this understanding to agree to this agreement sheet where if I violate the project provisions or regulations, I am willing to accept sanctions according to the applicable rules.</span>br
				</p>
			</div>
			<div class="col-12 text-center">
				<p id="policies">Melanggar kebijakan dan peraturan Perusahaan dan proyek  <span class="span">Violating Company and project policies and regulations</span></p>
			</div>
			<div class="col-1">
			<p id="check"><span style="border-style:solid; border-left:0px;   border-top:0px; border-right:0px; border-width: 1px; white-space: pre; color:black;">                        </span><br>
			<span style="border-style:solid;border-left:0px;    border-top:0px; border-right:0px; border-width: 1px; white-space: pre; color:black;">                        </span><br>
			<span style="border-style:solid;border-left:0px;    border-top:0px; border-right:0px; border-width: 1px; white-space: pre; color:black;">                        </span>
			 </p>
			</div>
			<div class="col-6">
				<p id="commitleft">Pelanggaran Pertama <span>First violation</span><br>
				Pelanggaran Kedua <span> Second violation</span><br>
				Pelanggaran Ketiga <span>Third violation</span>
			 </p>
			</div>
			<div class="col-5">
			<p id="commitright">Peringatan lisan <span>Verbal warning</span> <br>
				Peringatan tertulis <span> Written warning</span> <br>
				Diberhentikan <span>Dismissed</span>
			 </p>
			</div>
			<div class="col-12 text-center">
				<p id="policies">Mengoperasikan alat/kendaraan selain operator <span class="span">driver Operate tools/vehicles other than operator/driver</span></p>
			</div>
			<div class="col-1">
			<p id="check"><span style="border-style:solid; border-left:0px;   border-top:0px; border-right:0px; border-width: 1px; white-space: pre; color:black;">                        </span><br>
			<span style="border-style:solid;border-left:0px;    border-top:0px; border-right:0px; border-width: 1px; white-space: pre; color:black;">                        </span><br>
			 </p>
			</div>
			<div class="col-6">
				<p id="commitleft">Pelanggaran Pertama <span>First violation</span><br>
				Pelanggaran Kedua <span>Second violation</span>
			 </p>
			</div>
			<div class="col-5">
			<p id="commitright">
				<!-- Peringatan lisan <span>Verbal warning</span> <br> -->
				Peringatan tertulis <span>Written warning </span><br>
				Diberhentikan <span>Dismissed</span>
			 </p>
			</div>
			<div class="col-12 text-center">
				<p id="policies">Menggunakan telepon seluler saat berkendara  <span class="span">Using handphone while driving</span></p>
			</div>
			<div class="col-1">
			<p id="check"><span style="border-style:solid; border-left:0px;   border-top:0px; border-right:0px; border-width: 1px; white-space: pre; color:black;">                        </span><br>
			<span style="border-style:solid;border-left:0px;    border-top:0px; border-right:0px; border-width: 1px; white-space: pre; color:black;">                        </span><br>
			 </p>
			</div>
			<div class="col-6">
				<p id="commitleft">Pelanggaran Pertama <span>First violation</span><br>
				Pelanggaran Kedua <span>Second violation</span>
				<!-- Pelanggaran Ketiga / Third violation -->
			 </p>
			</div>
			<div class="col-5">
			<p id="commitright">
				<!-- Peringatan lisan <span>Verbal warning</span> <br> -->
				Peringatan tertulis <span>Written warning </span><br>
				Diberhentikan <span>Dismissed</span>
			 </p>
			 </p>
			</div>
			<div class="col-12 text-center">
				<p id="policies">Mengkonsumsi alkohol atau membawa minuman keras di lokasi kerja <span  class="span">Consuming alcohol or carrying alcohol in work site</span> </p>
			</div>
			<div class="col-1">
			<p id="check"><span style="border-style:solid; border-left:0px;   border-top:0px; border-right:0px; border-width: 1px; white-space: pre; color:black;">                        </span><br>
			 </p>
			</div>
			<div class="col-6">
			<p id="commitleft">Pelanggaran Pertama <span>First violation</span><br>
				<!-- Pelanggaran Kedua / Second violation <br> -->
				<!-- Pelanggaran Ketiga / Third violation -->
			 </p>
			</div>
			<div class="col-5">
			<p id="commitright">
				<!-- Peringatan lisan Verbal warning<br> -->
				<!-- Peringatan tertulis Written warning <br> -->
				Diberhentikan <span>Dismissed</span>
			 </p>
			</div>
			<div class="col-12 text-center">
				<p id="policies">Berkelahi Fighting/quarrel</p>
			</div>
			<div class="col-1">
			<p id="check"><span style="border-style:solid; border-left:0px;   border-top:0px; border-right:0px; border-width: 1px; white-space: pre; color:black;">                        </span><br>
			 </p>
			</div>
			<div class="col-6">
			<p id="commitleft">Pelanggaran Pertama <span>First violation</span><br>
				<!-- Pelanggaran Kedua / Second violation <br> -->
				<!-- Pelanggaran Ketiga / Third violation -->
			 </p>
			</div>
			<div class="col-5">
			<p id="commitright">
				<!-- Peringatan lisan Verbal warning<br> -->
				<!-- Peringatan tertulis Written warning <br> -->
				Diberhentikan <span>Dismissed</span>
			 </p>
			</div>
			<div class="col-12 text-center">
				<p id="policies">Bergurau atau bercanda yang berlebihan yang dapat membahayakan <span class="span">Excessive joking that can be harmful</span> </p>
			</div>
			<div class="col-1">
			<p id="check"><span style="border-style:solid; border-left:0px;   border-top:0px; border-right:0px; border-width: 1px; white-space: pre; color:black;">                        </span><br>
			 </p>
			</div>
			<div class="col-6">
			<p id="commitleft">Pelanggaran Pertama <span>First violation</span><br>
				<!-- Pelanggaran Kedua / Second violation <br> -->
				<!-- Pelanggaran Ketiga / Third violation -->
			 </p>
			</div>
			<div class="col-5">
			<p id="commitright">
				<!-- Peringatan lisan Verbal warning<br> -->
				<!-- Peringatan tertulis Written warning <br> -->
				Diberhentikan <span>Dismissed</span>
			 </p>
			</div>
			<div class="col-12 text-center">
				<p id="policies">Mengubah bentuk perancah tanpa haknya <span class="span">Changing the shape of the scaffold without rights</span>  </p>
			</div>
			<div class="col-1">
			<p id="check"><span style="border-style:solid; border-left:0px;   border-top:0px; border-right:0px; border-width: 1px; white-space: pre; color:black;">                        </span><br>
			<span style="border-style:solid; border-left:0px;   border-top:0px; border-right:0px; border-width: 1px; white-space: pre; color:black;">                        </span><br>

			 </p>
			</div>
			<div class="col-6">
			<p id="commitleft">Pelanggaran Pertama <span>First violation</span><br>
				Pelanggaran Kedua <span>Second violation</span>
				<!-- Pelanggaran Ketiga / Third violation -->
			 </p>
			</div>
			<div class="col-5">
			<p id="commitright">
				<!-- Peringatan lisan <span>Verbal warning</span> <br> -->
				Peringatan tertulis <span>Written warning </span><br>
				Diberhentikan <span>Dismissed</span>
			 </p>

			</div>
			<div class="col-12 text-center">
				<p id="policies">Tidak menggunakan Alat Pelindung Diri <span class="span">Not using Personal Protective Equipment</span></p>
			</div>
			<div class="col-1">
			<p id="check"><span style="border-style:solid; border-left:0px;   border-top:0px; border-right:0px; border-width: 1px; white-space: pre; color:black;">                        </span><br>
			<span style="border-style:solid; border-left:0px;   border-top:0px; border-right:0px; border-width: 1px; white-space: pre; color:black;">                        </span><br>
			<span style="border-style:solid; border-left:0px;   border-top:0px; border-right:0px; border-width: 1px; white-space: pre; color:black;">                        </span><br>
			 </p>
			</div>
			<div class="col-6">
			<p id="commitleft">Pelanggaran Pertama <span>First violation</span><br>
				Pelanggaran Kedua <span>Second violation</span><br>
				Pelanggaran Ketiga <span>Third violation</span> 
			 </p>
			</div>
			<div class="col-5">
			<p id="commitright">Peringatan lisan <span>Verbal warning</span> <br>
				Peringatan tertulis <span> Written warning</span> <br>
				Diberhentikan <span>Dismissed</span>
			 </p>
			</div>
			<div class="col-12 text-center">
				<p id="policies">Membawa senjata api, amunisi, bahan peledak, dan senjata tajam <span class="span">Carrying firearms, ammunition, explosives, and sharp weapons</span></p>
			</div>
			<div class="col-1">
			<p id="check"><span style="border-style:solid; border-left:0px;   border-top:0px; border-right:0px; border-width: 1px; white-space: pre; color:black;">                        </span><br>
			 </p>
			</div>
			<div class="col-6">
			<p id="commitleft">Pelanggaran Pertama <span>First violation</span><br>
				<!-- Pelanggaran Kedua <span>Second violation</span><br> -->
				<!-- Pelanggaran Ketiga / Third violation -->
			 </p>
			</div>
			<div class="col-5">
			<p id="commitright">
				<!-- Peringatan lisan Verbal warning<br> -->
				<!-- Peringatan tertulis Written warning <br> -->
				Diberhentikan <span>Dismissed</span>
			 </p>
			</div>
			<div class="col-12 text-center">
				<p id="policies">Mengoperasikan alat atau kendaraan melebihi batas kecepatan maksimum <span class="span">Operate equipment or vehicles over speed limits</span> </p>
			</div>
			<div class="col-1">
			<p id="check"><span style="border-style:solid; border-left:0px;   border-top:0px; border-right:0px; border-width: 1px; white-space: pre; color:black;">                        </span><br>
			<span style="border-style:solid; border-left:0px;   border-top:0px; border-right:0px; border-width: 1px; white-space: pre; color:black;">                        </span><br>

			 </p>
			</div>
			<div class="col-6">
			<p id="commitleft">Pelanggaran Pertama <span>First violation</span><br>
				Pelanggaran Kedua <span>Second violation</span><br>
				<!-- Pelanggaran Ketiga / Third violation -->
			 </p>
			</div>
			<div class="col-5">
			<p id="commitright">
				<!-- Peringatan lisan Verbal warning<br> -->
				Peringatan tertulis <span>Written warning </span><br>
				Diberhentikan <span>Dismissed</span>
			 </p>
			</div>
			<div class="col-12 text-center">
				<p id="policies">Melakukan pelanggaran “9 Rules Civil Engineering” <span class="span">Violating "9 Rules Civil Engineering"</span>  </p>
			</div>
			<div class="col-1">
			<p id="check"><span style="border-style:solid; border-left:0px;   border-top:0px; border-right:0px; border-width: 1px; white-space: pre; color:black;">                        </span><br>
			<span style="border-style:solid; border-left:0px;   border-top:0px; border-right:0px; border-width: 1px; white-space: pre; color:black;">                        </span><br>

			 </p>
			</div>
			<div class="col-6">
			<p id="commitleft">Pelanggaran Pertama <span>First violation</span><br>
				Pelanggaran Kedua <span>Second violation</span><br>
				<!-- Pelanggaran Ketiga / Third violation -->
			 </p>
			</div>
			<div class="col-5">
			<p id="commitright">
				<!-- Peringatan lisan Verbal warning<br> -->
				Peringatan tertulis <span>Written warning </span><br>
				Diberhentikan <span>Dismissed</span>
			 </p>
			</div>
			<div class="col-12 text-center">
				<p id="policies">Menggunakan Jalan Pintas di Lokasi Kerja <span class="span">Using Shortcuts at Work</span></p>
			</div>
			<div class="col-1">
			<p id="check"><span style="border-style:solid; border-left:0px;   border-top:0px; border-right:0px; border-width: 1px; white-space: pre; color:black;">                        </span><br>
			<span style="border-style:solid; border-left:0px;   border-top:0px; border-right:0px; border-width: 1px; white-space: pre; color:black;">                        </span><br>

			 </p>
			</div>
			<div class="col-6">
			<p id="commitleft">Pelanggaran Pertama <span>First violation</span><br>
				Pelanggaran Kedua <span>Second violation</span><br>
				<!-- Pelanggaran Ketiga / Third violation -->
			 </p>
			</div>
			<div class="col-5">
			<p id="commitright">
				<!-- Peringatan lisan Verbal warning<br> -->
				Peringatan tertulis <span>Written warning </span><br>
				Diberhentikan <span>Dismissed</span>
			 </p>
			</div>
			<div class="col-12 text-center">
				<p id="policies"></p>
			</div>
		</div>

		<!-- Lampiran -->
		<table class="table table-bordered table-sm">
	<thead class="table-light">
    <tr class="text-center">
      <th scope="col-8">Berkas Dokumen</th>
      <th scope="col-2">Ada / Yes</th>
      <th scope="col-2">Tidak Ada / No</th>
      <!-- <th scope="col-2"></th> -->

    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Foto <span>Photo</span></td>
      <td></td>
      <td></td>
      


    </tr>
    <tr>
      
	  <td>Fotokopi KTP <span>ID Liccense</span></td>
      <td></td>
      <td></td>
      

    </tr>
    <tr>
      
	  <td>Fotokopi Sertifikat Vaksin <span>Vaccine Certificate</span></td>
      <td></td>
      <td></td>
      

    </tr>
	<tr>
	  <td>Fotokopi sertifikat pelatihan <span>Qualified Trained Certificate</span></td>
      <td></td>
      <td></td>
      

	</tr>
  </tbody>
</table>



<table class="table table-bordered table-sm">
	<thead class="table-light table-sm">
    <tr class="text-center">
      <th scope="col-2">Karyawan <span>Employee</span></th>
      <th scope="col-2">Induction By</th>
      <th scope="col-2">Diverifikasi Oleh</th>
      <th scope="col-6">Catatan/Rekomendasi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><br><br></td>
      <td></td>
      <td></td>
	  <td></td>
      


    </tr>
    <tr>
      
	  <td>Nama/Name :</td>
      <td></td>
      <td></td>
	  <td></td>
      

    </tr>
    <tr>
      
	  <td>Tanggal / Date :</td>
      <td style="text-align: center;" >HSE</td>
      <td></td>
	  <td></td>
      

    </tr>
  </tbody>
</table>
	</div>
    
    <!-- End Of Header -->
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