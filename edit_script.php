<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Alteração De Cadastro</title>
</head>

<body>
    <h1>Alteração De Cadastro</h1>
    <?php
    include "conexao.php";
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $dt_nasci = $_POST['dt_nasci'];

    //$sql = "INSERT INTO `pessoas`( `nome`, `endereco`, `telefone`, `email`, `dt_nasci`) VALUES ('$nome','$endereco','$telefone','$email ','$dt_nasci')";

      $sql = "UPDATE  `pessoas`set  `nome` = '$nome', `endereco`= '$endereco', `telefone`='$telefone', `email`='$email', `dt_nasci`='$dt_nasci' WHERE cod_pessoa = $id ";

    if (mysqli_query($conn, $sql)){
        mensagem("$nome alterado com sucesso!","success");
    } else
        mensagem("$nome NÃO alterado! Tente Novamente!","danger");
    
    ?>
    <form action="pesquisa.php">
    <input type="submit" class="btn btn-primary" value="Voltar" />
</form

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>