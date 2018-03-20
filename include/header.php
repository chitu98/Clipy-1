<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="style/css/signin.csss" rel="stylesheet">

    <style>
        #inputform {
            width: 400px;
            margin: auto;
            margin-top: 50px;
        }

        input {
            margin-bottom: 10px;
        }

    </style>

    <title>Clippy- The Clipboard!</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">Clippy</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>
            <div class="form-inline my-2 my-lg-0">
                <ul class="navbar-nav">
                   
    <?php  if(!isset($_COOKIE['email']) or $_COOKIE['email'] == "null"){ ?>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="signup.php">Signup</a>
                    </li>
    
    <?php  }else{ ?>
                   
                    <li class="nav-item">
                        <a class="nav-link" href="Dashboard.php">Hello, <?=$_COOKIE['email'] ?></a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                    
    <?php } ?> 
                    
                    
                </ul>
            </div>
        </div>

    </nav>
