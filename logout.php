<?php

setcookie("email","null", time() + (86400 * 1),"/");

header('Location: login.php?error=2');

?>