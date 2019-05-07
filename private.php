<?php
require_once('initialize.php'); ?>

<?php $page_title = 'Page Menu'; ?>
<?php include('header.php'); ?>

<div id="content">
    <div>
        <h2>Main Menu</h2>
        <p>Create, Update or Delete musings and recipes</p>
        <ul>
            <li><a href="musing/index.php">Musing</a></li>
            <li><a href="recipes/index.php">Recipes</a></li>
        </ul>
    </div>

</div>
<a href="logout.php">Log Out

<?php include('footer.php'); ?>
