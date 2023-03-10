<?php 
session_start();
if($_SESSION['level']!= 'admin') {
    echo"<script>
      alert('Maaf anda bukan lagi admin');
      window.location.assign('../index2.php');
      </script>";
}if(empty($_SESSION['id_petugas'])) {
    echo"<script>
      alert('Maaf anda belum login');
      window.location.assign('../index2.php');
      </script>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>administrator</title>
</head>
<body>
  <div class="container mt-5">

    <h3>Aplikasi pembayran SPP</h3>
    <div class="alert alert-info">Anda Login Sebagai Administrator aplikasi SPP</div>
    <a href="admin.php" class="btn btn-primary">Administrator</a>
    <a href="admin.php?url=spp" class="btn btn-primary">SPP</a>
    <a href="admin.php?url=kelas" class="btn btn-primary">Kelas</a>
    <a href="admin.php?url=siswa" class="btn btn-primary">Siswa</a>
    <a href="admin.php?url=petugas" class="btn btn-primary">Petugas</a>
    <a href="admin.php?url=pembayaran" class="btn btn-primary">Pembayaran</a>
    <a href="admin.php?url=laporan" class="btn btn-primary">laporan</a>
    <a href="admin.php?url=logout" class="btn btn-primary">logout</a>
    
    <div class="card mt-2">
        <div class="card-body">

            <?php 
            $file = @$_GET['url'];
            if(empty($file)){
                echo "Selamat datang di halaman administrator";
                echo " Aplikasi Pembayaran spp mempermudah spp";
            }else {
                include $file.'.php';
            }
            ?>
        </div>
    </div>


   </div>






<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>