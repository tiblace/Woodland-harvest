<?php
require_once ('db_connect.php');
require_once ('initialize.php');
session_start();
require_once ('functions.php');
$userName = false;

?>
</DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Woodland Harvest</title>
    <meta name="keywords" content="woodland harvested harvesting jelly jam preserves organic wild fruit butter natural homemade raspberry apple plum sumac serviceberry berries yummy tasty">
    <meta name="description" content="wild harvested fruit jellies, jams and preserves homemade organic and delicious">
    <link rel="stylesheet" href="website.css">
    <link href="https://fonts.googleapis.com/css?family=Candal" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>


    <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="musings.php">Musings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="video.php">Videos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="recipes.php">Recipes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                </li>

            </ul>

            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" style="float: right" href="#"></a>
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" style="float: right" href="register.php">Join Mailing List</a>
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" style="float: right" href="login.php">Log In</a>

        </div>

    </nav>
    <h1 class="name">Woodland Harvest</h1>



</head>
<body>