<?php
session_start();
include('config.php');

if(isset($_POST['username'])){
    $user = $_POST['username'];

    $query = $conn->prepare("SELECT * FROM user WHERE username = ?");
    if($query){
        $query->bind_param("s", $user);
        $query->execute();

        $result = $query->get_result(); 
        $row = $result->fetch_assoc();
        

        $password = password_verify($_POST['password'], $row['password']);

        if($password){
        $_SESSION['username'] = $row['username'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['password'] = $row['password'];

        echo "true";
            
        }else{
            echo "redirect";
            $_SESSION['error'] =  "Wrong password, Try again";
        }
    }else{
        $_SESSION['error'] = "Wrong username";
    }

}
?>