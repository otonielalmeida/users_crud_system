<?php

$connection = mysqli_connect('localhost', 'root', '', 'loginapp');

$query = "SELECT * FROM alunos";

$result = mysqli_query($connection, $query);
if (!$result) {
    die('query failed!');
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
    <title>Ler</title>
    <style>
        body{
            overflow: auto;
            display: flex;
            flex-wrap: wrap;
        }
        .container{
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
        }
        #rows{
            margin: -12%;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            $nome = $row['nome'];
            $nasc = $row['data_nasc'];
            $matricula = $row['matricula'];
            $id = $row['id'];
        ?>
            <pre>
            <div class="col-12 p-2 bg-white text-secondary rounded w-100" id="rows">
            <?php
            
            echo("Nome: $nome 
            Data de Nascimento: $nasc
            matricula: $matricula
            ID: $id");

            ?>
            </div>
            </pre>
        <?php
        } ?>

    </div>

</body>

</html>