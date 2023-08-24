<?php
include_once "conexion.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mostrar datos</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Cedula</th>
      <th scope="col">Teléfono</th>
      <th scope="col">Direccion</th>
      <th scope="col">Botones</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sal="SELECT * FROM persona";
    $fa=mysqli_query($connect,$sal);
    

    while($mostrar=mysqli_fetch_array($fa)){


    ?>
    <tr>
      <th><?php echo $mostrar['id_persona'] ?></th>
      <td><?php echo $mostrar['Nombre'] ?></td>
      <td><?php echo $mostrar['Apellido'] ?></td>
      <td><?php echo $mostrar['Cedula'] ?></td>
      <td><?php echo $mostrar['Telefono'] ?></td>
      <td><?php echo $mostrar['Direccion'] ?></td>
      <td>
      <?php echo '<button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop'.$fa['id_persona'].'">actualizar</button>'?>
      </td>
    </tr>
    <?php
    }
    
    ?>
  </tbody>
</table>



    
</body>
</html>