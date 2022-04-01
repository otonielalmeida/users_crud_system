<?php
function createRows(){
    $connection = mysqli_connect('localhost', 'root', '', 'loginapp');
    if(!$connection) {
        echo 'disconnected!';
    }

    $nome = $_POST['nome'];
    $nome = mysqli_real_escape_String($connection, $nome);
    $data = $_POST['dataNasc'];
    $matricula = $_POST['matricula'];

    $query = "INSERT INTO alunos(nome, data_nasc, matricula)";
    $query .= "VALUES ('$nome', '$data', '$matricula')";
    $result = mysqli_query($connection, $query);
    if(!$result){
        die('query failed!');
    }
 }  



function showAllId(){
    $query = "SELECT * FROM alunos";
    $connection = mysqli_connect('localhost', 'root', '', 'loginapp');
    $result = mysqli_query($connection, $query);
    if(!$result){
        die('query failed');
    }

    while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";             
    }
}

function delete(){
    $connection = mysqli_connect('localhost', 'root', '', 'loginapp');

    $id = $_POST['id'];
    $query = "DELETE FROM alunos ";
    $query .= "WHERE id = $id";
    
    $result = mysqli_query($connection, $query);
    if(!$result){
        die('Not Deleted' . mysqli_error($connection));
    }
}

function update(){
    $connection = mysqli_connect('localhost', 'root', '', 'loginapp');

    $nome = $_POST['nome'];
    $nome = mysqli_real_escape_String($connection, $nome);
    $matricula = $_POST['matricula'];
    $id = $_POST['id'];
    $data_nasc = $_POST['dataNasc'];
    $query = "UPDATE alunos SET ";
    $query .= "nome = '$nome', ";
    $query .= "matricula = '$matricula', ";
    $query .= "data_nasc = '$data_nasc' ";
    $query .= "WHERE id = $id";

    $result = mysqli_query($connection, $query);
    if(!$result){
        die('Not updated' . mysqli_error($connection));
    }
}
?>

