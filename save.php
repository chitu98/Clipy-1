<?php
include('include\config.php');

if(isset($_POST['save'])){
    
    $title = htmlspecialchars(trim($_POST['title']));
    $clip = htmlspecialchars(trim($_POST['clip']));
    $user = $_COOKIE['user'];
    
    $sql = "INSERT INTO clips (title,clip,user_id) VALUES ('$title','$clip','$user')";
    
    mysqli_query($conn,$sql);
    
    header('Location: dashboard.php?save=success');
} else{
    header('Location: dashboard.php?save=failed');
}


?>