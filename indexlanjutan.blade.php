<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>PHP Lanjutan - 1461900061 - Vincent Yulius Sukianto</title>
  </head>
  <body>

  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand">PHP Lanjutan</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="home">Home</a>
          <a class="nav-link" href="profile">Profile</a>
          <a class="nav-link" href="contact">Contact Us</a>
          <a class="nav-link" href="about" tabindex="-1" >About</a>
        </div>
      </div>
    </div>
  </div>
</nav>
<br>

<div class="container">
 <?php
 if(isset($_POST['kalimat'])){
   $kalimat = $_POST['kalimat'];
   $kalimat = strtolower($kalimat);
   $jumlah = strlen($kalimat);
   $arr = str_split($kalimat);
   $vokal = 0;
   $konsonan = 0;
   for ($i=0; $i < $jumlah; $i++) { 
     if ($arr[$i] == 'a' || $arr[$i] == 'i' || $arr[$i] == 'o' || $arr[$i] == 'u') {
       $vokal++;
     } else if ($arr[$i] >= 'b' && $arr[$i] <= 'z'){
       $konsonan++;
     }
   }
 }

 if (isset($_POST['tanggal'])){
   $date = Date('D');
   switch ($date) {
     case 'Sun':
       $date = 'Minggu';
       break;
     
        case 'Mon':
          $date = 'Senin';
          break;
      
        case 'Tue':
          $date = 'Selasa';
          break;
     
        case 'Wed':
          $date = 'Rabu';
          break;
          
        case 'Thu':
          $date = 'Kamis';
          break;
    
        case 'Fri':
          $date = 'Jumat';
          break;
              
        case 'Sat':
          $date = 'Sabtu';
          break;

     default:
        $date = 'Unknown';
       break;
   }
 }
  ?>

 <form action ="" method="post">
    <div class="input-group mb-3 mt-5">
      <input type="text" class="form-control" placeholder="Inputkan Kalimat" id="kalimat" name="kalimat">  
    </div>
    <?php
      if (isset($_POST['kalimat'])) {
        echo 'Kalimat yang didapat ' . $kalimat . ' Total Vokal = ' . $vokal . ' dan Total Konsonan = ' . $konsonan;
      }
    ?>
    <p>
    <div class="input-group mb-3">
      <input type="date" class="form-control" id='tanggal' name='tanggal'>  
      <button class="btn btn-outline-primary" type="submit">Submit</button>
    </div>
    <?php
      if(isset($_POST['tanggal'])){
        echo " Hari ini adalah " . $date;
      }
    ?>
  </div>
  </div>
  </form>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>