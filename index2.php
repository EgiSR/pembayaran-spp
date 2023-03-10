<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Hello, world!</title>
  </head>
  <body>
  <div class="container mt-5">
    <div class="row justify-content-md-center">
      <div class="col-md-4">
        <h4 class="text-center">LOGIN Administrator / Petugas</h4>
         <div class="card">
           <div class="card-header">
            <img src="assets/logo-spp.png" alt="" width="100%">
           </div>
           <div class="card-body">
            <form action="proses-login-petugas.php" method="post">
              <div class="form-grup mb-2">
                <label>Username</label>
                <input autocomplete="off" type="text" name="username" class="form-control" placeholder="Masukkan username anda" required >
              </div>

               <div class="form-grup mb-2">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Masukkan password anda" required >
              </div>
              <div class="form-grup mb-2">
                <button type="submit" class="btn btn-primary">LOGIN</button>
              </div>
              <a href="index.php">Login Sebagai Siswa</a>
            </form>
           </div>
         </div>
      </div>
    </div>
  </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
