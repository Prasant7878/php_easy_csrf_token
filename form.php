<?php 
session_start();
?>

<form action="submit.php" method="post">
    <input type="hidden" name="token" value="<?=$_SESSION['token']?>">
    Enter "CONFIRM" to delete your account.
    <input type="text" name="confirm" pattern="CONFIRM">
    <input type="submit" value="Delete Account">
</form>