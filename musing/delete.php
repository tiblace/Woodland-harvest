<?php

require_once('../initialize.php');





$id = 0;
if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = $_GET['id'];

    $id = mysqli_real_escape_string(db_connect(), $id);
    $sql = "SELECT * FROM musings WHERE id = $id";
    $pages = mysqli_query(db_connect(), $sql);
    $page = mysqli_fetch_assoc($pages);

}


if(isset($_POST['submit'])) {
    //The user submitted the form
    $id = mysqli_real_escape_string(db_connect(), $_POST['id']);
    $sql = "DELETE FROM musings WHERE id = $id LIMIT 1";
    $result = mysqli_query(db_connect(), $sql);

    // Redirect to the index page

    header('Location: /woodlandHarvest/musing/index.php');
    die;

}
?>
    <!doctype html>
    <html>

    <head>
        <meta charset="utf-8">
        <title>Delete Page</title>
        <link rel="stylesheet" href="../website.css">
    </head>

<body>

<h1>Delete Musing</h1>

<?php if (!$id): ?>
    <h2 class="error">Please select a topic.</h2>
<?php endif; ?>

<h2>Are you sure you want to delete this?<?= $page['title'] ?>?</h2>

<div>
    <form method="post">
        <input type="hidden" name="id" value="<?= $id ?>">
        <input type="submit" name="submit" value="Delete">
    </form>
</div>
<a href="../private.php">Back to Main Menu</a>
<br>
<br><br>
<a href="../logout.php">Log Out</a>
<?php include('../footer.php'); ?>