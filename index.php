<?php
include "functions.php";
if(isset($_POST['submit'])){
    createRows();
 }  
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initil-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/style.php">
    <title>Cadastro</title>
</head>

<body>
    <form method="post" action="index.php">
        <div class="input-group mt-5 w-100">
            <input type="text" name="nome" class="form-control w-100 p-2 border-top mb-2" placeholder="Nome do Aluno">
            <input type="text" name="dataNasc" class="form-control w-100 p-2 border-top mb-2" placeholder="Data de Nascimento YYYY-mm-dd">
            <input type="text" name="matricula" class="form-control w-50 p-1 border-top" placeholder="Matrícula">
            <div class="input-group-append">
                <button name="submit" class="btn btn-outline-dark" type="submit">Enviar</button>
            </div>
        </div>
    </form>

</body>

</html>