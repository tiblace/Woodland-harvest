<?php
require_once('../initialize.php');
session_start();
global $db;
$sql = "SELECT*FROM musings";
$pages= mysqli_query($db, $sql);

?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Muse Listing</title>
    <link rel="stylesheet" href="../website.css">
</head>

<body>
<a href="../private.php">Back to Main Menu</a>
<h1>Musing Pages</h1>

<p>
    <a href="/woodlandHarvest/musing/update.php">Add New Musing</a>
</p>
<div class="content">
    <?php $results = mysqli_query($db, "SELECT * FROM musings"); ?>
<table>
    <thead>
    <tr>
        <th>Title</th>
        <th>Content</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    </thead>
    <tbody>
    <?php while ($row = mysqli_fetch_array($pages, MYSQLI_ASSOC)) {?>

        <tr>
            <td><?= $row['title']; ?></td>
            <td><?= $row['content']; ?></td>
            <td>
                <a href="/woodlandHarvest/musing/update.php?id=<?= $row['id'];?>">Edit</a>
            </td>
            <td>
                <a href="/woodlandHarvest/musing/delete.php?id=<?= $row['id'];?>">Delete</a>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>
</div>
<br><br>
<a href="../logout.php">Log Out</a>
<?php include('../footer.php'); ?>
