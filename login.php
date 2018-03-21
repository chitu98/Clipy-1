<?php
if(isset($_POST['submit'])){
   $email = $_POST['email'];
   $password = $_POST['password'];
    
   $cookie_name = "email";
   $cookie_value = $email;
   setcookie($cookie_name, $cookie_value, time() + (86400 * 1), "/"); 
    
   include('include/functions.php');
   $cookie_name = "user";
   $cookie_value = getidbyemail($email);
   setcookie($cookie_name, $cookie_value, time() + (86400 * 1), "/"); 

   $cookie_name = "name";
   $cookie_value = getnamebyemail($email);
   setcookie($cookie_name, $cookie_value, time() + (86400 * 1), "/"); 


   $cookie_name = "password";
   $cookie_value = $password;
   setcookie($cookie_name, $cookie_value, time() + (86400 * 1), "/");
    
   header("Location: dashboard.php?success=1");
}

?>


<?php
include('include/header.php');
?>


    <div class='text-center' id='inputform'>
        <form class="form-signin" action="login.php" method="post">
            <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
            <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
            <label for="username" name="email" class="sr-only"> Email</label>
            <input type="type" name="email" class="form-control" placeholder="Email" required autofocus>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>

            <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign in</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2018-2019</p>
        </form>
    </div>



<?php
include('include/footer.php');
?>
