<?php

     if(!isset($_COOKIE['email'])){
          header('Location: login.php?error=1');
     }elseif($_COOKIE['email'] == "null"){
          header('Location: login.php?error=1');
     }

    $email = $_COOKIE['email'];
    $password = $_COOKIE['password'];

    include('include\config.php');


    $sqli ="SELECT * from users where email='$email' and password='$password'";
    $result = mysqli_query($conn,$sqli);
    $row = mysqli_num_rows($result);

    if($row <= 0){
      header('Location: login.php?error=1');
    }


?>