<?php 
    require 'function.php';
   $data = query ("SELECT * FROM tes_magang");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tes-Tahap-3</title>
    <link href="./img/logo.png" rel="icon" />
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body onload="window.print();">
<div class="container title gs-5" >
   <h1>Tes Tahap 3</h1>
 </div>
<table class="table table-bordered d-flex justify-content-center text-center" >
    <tr>
      <th scope="col">No</th>
      <th scope="col">PROJECT NAME</th>
      <th scope="col">CLIENT</th>
      <th scope="col">PROJECT LEADER</th>
      <th scope="col">START DATE</th>
      <th scope="col">END DATE</th>
      <th scope="col">PROGRESS</th>
    </tr>
    <?php $i= 1;?>
    <?php foreach ($data as $row) : ?>
    <tr>
        <td><?= $i?></td>
        <td><?= $row["project_name"]?></td> 
        <td><?= $row["client"]?></td>
        <td><?= $row["email"]?></td>
        <td><?= $row["pembuatan"]?></td>
        <td><?= $row["selesai"]?></td>
        <td> <?= $row["progres"]?></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
 
</table>

</body>
</html>