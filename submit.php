<!-- Step 3 - Cross-check the Token -->
<?php
// print_r($_POST)
session_start();
if ($_POST['token'] == $_SESSION['token']){
    // PROCEED
    echo('Welcome To The Page');
} else {
    die();
}
?>