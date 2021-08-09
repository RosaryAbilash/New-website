<?php
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Database connection
    $conn = new myssqli('localhost', 'root', '', 'test');
    if ($conn->connect_error){
        die('Server Down :'.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into registration(email, username, password) values(?, ?, ?");
        $stmt ->bindParam("sssssi",$email, $username, $password);
        $stmt ->execute();
        echo "Registration Success"
        $stmt->close();
        $conn->close();
    }
?>