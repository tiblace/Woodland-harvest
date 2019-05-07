<?php require_once ('initialize.php');
 include('header.php');
 include ('leftSide.php');



$errors=[];
if(isset($_POST['submit'])) {

    if (empty($_POST['first_name'])) {
        $errors[] = "Please enter information in order to register";
    }
    if (empty($_POST['last_name'])) {
        $errors[] = "Please enter information in order to register";
    }

    if (empty($_POST['email'])) {
        $errors[] = "Please enter information in order to register";
    }
    /*if (empty($_POST['password'])) {
        $errors[] = "Please enter information in order to register";
    }
    if (strlen($_POST['password'] >8)) {
        $errors[] = 'Password must be at least 8 characters.';
    }
    if($_POST['password'] != $_POST['confirmPassword']) {
        $errors[] = "Passwords do not match";
    }*/

    if (empty($errors)) {

        $first_name = mysqli_real_escape_string(db_connect(), $_POST['first_name']);
        $last_name = mysqli_real_escape_string(db_connect(), $_POST['last_name']);

        $email = mysqli_real_escape_string(db_connect(), $_POST['email']);


//        $salt = random_bytes(20);
//
//        $hashedPassword = hash('sha256', ($_POST['password'] . $salt));
        $sql = "INSERT INTO customers (first_name, last_name, email,)VALUES"
            . "('$first_name', '$last_name',  '$email')";
        $result = mysqli_query(db_connect(), $sql);


        header('Location: /WoodlandHarvest/index.php');
        die;
    }
}
?>


<div class="container">
    <div class="row mx-auto">
        <div class="col-lg-12 d-block mx-auto" >
            <?php if (count($errors)): ?>

                <ul style="margin: 15%;">
                    <h3 style="color: red;">
                        Please fix the following errors.
                    </h3>
                    <?php foreach($errors as $error): ?>
                        <li><?= $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>



            <form method="post" action="register.php">
                <h1>Join our Mailing List!</h1>

                <label for="first_name" style="text-align: left;">First Name:</label>
                <input type="text" id="first_name" name="first_name" size="60%" style="padding-right: 5.3ch;" value="" required>
                <br>
                <label for="last_name" style="text-align: left;">Last Name:</label>
                <input type="text" id="last_name" name="last_name" size="60%" style="padding-right: 5.3ch;" value="" required>
               <br>
                <label for="email" style="text-align: left;">Email:</label>
                <input type="email" id="email" name="email" size="60%" style="padding-right: 5.4ch;" value="" required>
                <br>
<!--                <label for="password" style="text-align: left;">Password:</label>-->
<!--                <input type="password" id="password" name="password" size="60%" style="padding-right: 6.5ch;" value="" autocomplete="off" required>-->
<!--                <br>-->
<!--                <label for="confirm-password" style="text-align: left;">Confirm Password:</label>-->
<!--                <input type="password" id="confirmPassword" name="confirmPassword" size="60%" value="" autocomplete="off" required>-->
<!--                <br>-->

                <input type="hidden" name="visible" value="0" />
                <label for="mailing_list" style="text-align: left;">Join Mailing List</label>
                <input type="checkbox" id="mailing_list" name="visible" size="60%" style="padding-right: 5.4ch;" value="1"/>
                <br>
                <button type="submit" name="submit" class="btn btn-primary btn-xl" id="sendMessageButton" style="margin-top: 15px;">Submit</button>
            </form>
        </div>
    </div>
</div>


<?php include('footer.php'); ?>