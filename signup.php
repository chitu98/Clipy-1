<?php
if(isset($_POST['submit'])){
    include_once('include\config.php');
    
    $fname = htmlspecialchars(trim($_POST['f_name']));
    $lname = htmlspecialchars(trim($_POST['l_name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $password = htmlspecialchars(trim($_POST['password']));
    
    $sql="INSERT INTO users(f_name,l_name,email,password) VALUES ('$fname','$lname','$email','$password')";
   
    if(mysqli_query($conn, $sql)){
        $cookie_name = "email";
        $cookie_value = $email;
        setcookie($cookie_name, $cookie_value, time() + (86400 * 1), "/"); 
        
        $cookie_name = "password";
        $cookie_value = $password;
        setcookie($cookie_name, $cookie_value, time() + (86400 * 1), "/");
        
        header("Location: dashboard.php");
    } else{
        header("Location: signup.php?error=1");
    }
 
mysqli_close($conn);
}
?>



<?php
include('include/header.php');
?>

<?php 
    if(isset($_GET['error'])){
        if($_GET['error'] == 1){
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert" style="margin:35px;"><strong>Oh Snap,</strong> PLease try Again</div>';
        }
    } 
?>

<div class='text-center' id='inputform'>
    <form class="form-signin" method="post" action="signup.php">
        <img class="mb-4" src="https://vrtize.com/wp-content/uploads/2016/08/new-account-icon-256x256.png" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Sign Up</h1>
        <label for="fname" class="sr-only"> First Name</label>
        <input type="type" name="f_name" class="form-control" placeholder="First Name" required autofocus>
        <label for="lname" class="sr-only">Last Name</label>
        <input type="type" name="l_name" class="form-control" placeholder="Last Name" required autofocus>
        <label for="email" class="sr-only">Email</label>
        <input type="type" name="email" class="form-control" placeholder="Email" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign up</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2018-2019</p>
    </form>
</div>



<?php
include('include/footer.php');
?>
