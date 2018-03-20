<?php

if($_COOKIE['email'] == "null"){
    header('Location: login.php?error=1');
}else{
    header('Location: dashboard.php');
}

?>