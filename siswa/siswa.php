<?php 
session_start();
if(empty($_SESSION['nisn'])) {
    echo"<script>
      alert('Maaf anda belum login');
      window.location.assign('../index.php');
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
    <title>siswa</title>
</head>
<body>
  <div class="container mt-5">

    <h3>Aplikasi pembayran SPP</h3>
    <div class="alert alert-info">Anda Login Sebagai siswa <?= $_SESSION['nama'] ?> aplikasi SPP</div>
    <a href="siswa.php" class="btn btn-primary">siswa</a>
    <a href="siswa.php?url=logout" class="btn btn-primary">logout</a>
    
    <div class="card mt-2">
        <div class="card-body">

            <?php 
            $file = @$_GET['url'];
            if(empty($file)){
                echo "Selamat datang di halaman siswa";
                echo " Aplikasi Pembayaran spp mempermudah spp";
                echo "<hr>";
                include 'history-pembayaran.php';
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