<?php
if(isset($_POST['submit'])){
    $username = $_POST['name'];
    $password = $_POST['password'];
    $name = array("JAVA", "PYTHON", "JAVASCRIPT", "MYSQL");
    if(strlen($username) < 5){
        echo '<h2> username needs to be longer than 4 chars</h2>';
    }
    echo "Sucesso!  //" . $_POST['name'];

    if(!in_array($username, $name)) {
        echo "Invalid login!";
    } else {
        echo "welcome";
    }
}
?>