<?php
include "conexaoBD.php";
include "listar.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Listar</title>
    <link rel="icon" sizes="16x16" type="image/png"
    href="logos/logo1.png">
</head>
<body id="body">
    <div class="row" id="titulo">
    <h3 id="titulocor">Cadastros</h3>
    </div>
    <br>
    <div class="container">
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">E-mail</th>
      <th scope="col">Tel</th>
      <th scope="col">CPF</th>
    </tr>
  </thead>

  <?php while ($usuario = mysqli_fetch_assoc($listarSQL)) { ?>

   <tbody>
    <tr>
      <th scope="row"><?php echo $usuario['id'];?></th>
      <td> <?php echo $usuario['nome'];?></td>
      <td> <?php echo $usuario['email'];?></td>
      <td> <?php echo $usuario['telefone'];?></td>
      <td> <?php echo $usuario['cpf'];?></td>
    </tr>

   
  </tbody>

  <?php } ?>

</table>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>