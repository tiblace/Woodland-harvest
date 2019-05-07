<?php include ('header.php'); ?>

<?php

session_destroy();

$loginError= false;
if(isset($_POST['submit'])){
    $loginError = true;
    $userName = mysqli_real_escape_string(db_connect(), $_POST[DB_USERNAME]);
    $password = mysqli_real_escape_string(db_connect(), $_POST[DB_PASSWORD]);


        session_start();
        header('Location: /woodlandHarvest/private.php');
        die;

}
?>
<div class="container">
    <div class="row mx-auto">
        <div class="col-lg-8 d-block mx-auto" >

            <form method="post" action="login.php" style="margin: 15%;">
                <?php if($loginError): ?>
                    <h4 style="color: red;">Invalid User Name or password.</h4>
                <?php endif; ?>
                <h2>Welcome, please Log In.</h2>
                <label for="userName">User Name:</label>
                <input type="text" id="userName" name="userName" size="100%" value="" >
                <br>
                <label for="password" style="padding-right: 10px;">Password:</label>
                <input type="password" id="password" name="password" size="100%" value="" autocomplete="off">
                <br>
                <button type="submit" name="submit" class="btn btn-primary btn-xl" style="margin-top: 10px;">Submit</button>

            </form>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>

