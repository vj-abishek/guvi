<?php
session_start();
include('config.php');

if(isset($_POST['username'])){
    $user = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'],PASSWORD_DEFAULT);

    $query = $conn->prepare("INSERT INTO user (username, email, password) VALUES (?, ?, ?)");
    if($query){
        $query->bind_param("sss", $user, $email, $password);
        $query->execute();
        $query->close();

        $_SESSION['username'] = $user;
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;

        echo "true";
    }else{
        echo "Failed";
    }

}
?>