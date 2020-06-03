<!-- Step 1 - Generate Token -->
<?php 
session_start();
if (empty($_SESSION['token'])){
    $_SESSION['token'] = bin2hex(random_bytes(32));
}

print_r($_SESSION);
?>