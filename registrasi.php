<?php
 require 'function.php'; 

 if (isset($_POST ["register"])) {
   if (registrasi ($_POST) > 0) {
     echo "<script> 
        alert('user baru berhasil ditambahkan');
        </script>";
   } else {
    echo mysqli_error($conn);
  }
 } 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<style>
    label {
        display: block;
    }
</style>
<body>
    <h1> Halaman Registrasi</h1>
    <form action="" method="post">
  <div class="col-md-2 ">
    <label for="username" >User Name</label> 
    <input type="text" name="username" id="username" size="30">    
  </div>
  <div class="col-md-2">
    <label for="password">Password</label> 
    <input type="password" name="password" id="password" size="30">
  </div>
  <div class="col-md-2">
  <label for="password2">Konfirmasi Password</label> 
  <input type="password" name="password2" id="password2" size="30"> 
</div>
  
  <button type="submit" class="btn btn-primary" name="register" style="margin-top: 10px;">Daftar</button>
</form>
    
</body>
</html>