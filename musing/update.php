<?php
require_once('../initialize.php');
session_start();
global $db;
$title = "";
$content = "";
$id = 0;
$update = false;


if(isset($_GET['id'])){
    $id = $_GET['id'];
    $update = true;
    $record = mysqli_query($db, "SELECT * FROM musings WHERE id = $id");

    $record = mysqli_fetch_array($record, MYSQLI_ASSOC);

    if(count($record)){

        $title = $record['title'];
        $content = $record['content'];

    }
}

if (isset($_POST['save'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];

    mysqli_query($db, "INSERT INTO musings (title, content) VALUES ('$title', '$content')");

    header('location: index.php');
}


if(isset($_GET['id']) && !empty($_GET['id'])){
$id = $_GET['id'];
}

$errors = [];
if(isset($_POST['submit'])) {
//The user submitted the form

//validation rules
if (empty($_POST['title'])) {
$errors[] = 'Please enter a title';
}
if (empty($_POST['content'])) {
$errors[] = 'Please enter page content';
}

if(!count($errors)){
$title = mysqli_real_escape_string(db_connect(), trim($_POST['title']));
$content = mysqli_real_escape_string(db_connect(), trim($_POST['content']));
if ($id==0) {
$sql = "INSERT INTO musings (title, content) VALUES ('$title', '$content')";
} else {
$id = mysqli_real_escape_string(db_connect(), $id);
$sql = "UPDATE musings SET title = '$title', content = '$content' WHERE id = $id";
}


$result = mysqli_query($db, $sql);

#Redirect to the index page

header('Location: /woodlandHarvest/musing/index.php');
die;

}
}
?>
    <!doctype html>
    <html>

    <head>
        <meta charset="utf-8">
        <title>Update Musing</title>
        <link rel="stylesheet" href="../website.css">
    </head>

<body>
<a href="../private.php">Back to Main Menu</a>
<h1>Update Musing</h1>

<?php if(count($errors)): ?>
    <h2 class="error">Please fix the following problems</h2>
    <ul class="error">
        <?php foreach ($errors as $error): ?>
            <li><?= $error ?></li>
        <?php endforeach ?>
    </ul>
<?php endif; ?>
<div class="content">
    <form method="post">

        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="<?php echo $title; ?>">
        <br>
        <label for="content">Content</label>
            <textarea name="content" id="content">
                <?php echo $content; ?>
            </textarea>

        <br>

        <?php if ($update == true): ?>
            <button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
        <?php else: ?>
            <button class="btn" type="submit" name="save" >Save</button>
        <?php endif ?>
    </form>
</div>
<br><br>
<a href="../logout.php">Log Out</a>
<?php include('../footer.php'); ?>