<form action="proses-cari.php" method="post">

    <input type="text" name="keyword" size="30" autofocus placeholder="cari siswa....">
    <button type="submit" class="btn btn-primary" name="cari">cari</button>

</form>

       <?php 
       if(isset($_POST["cari"])) {
        $sql = cari($_POST["keyword"]);
       }

       ?>