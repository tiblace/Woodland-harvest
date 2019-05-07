<?php include('header.php'); ?>

<?php include('leftSide.php'); ?>

<?php

session_start();

if(!isset($_SESSION['userName'])){
    header('Location: /WoodlandHarvest/index.php');
}
else {
    $_SESSION = [];
    session_destroy();
    setcookie('PHPSESSID', '', time()-3600, '/', '', 0, 0);

}

echo "<h2>Logged out!</h2>
<p><a href=\'login.php\'>Login</a></p>";

?>
<?php include('footer.php'); ?>