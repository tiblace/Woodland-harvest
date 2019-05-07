<?php include('header.php');
include('leftSide.php'); ?>


<?php
$sql = "SELECT*FROM recipes";
$pages= mysqli_query(db_connect(), $sql);

$recipes = [];
while ($row = mysqli_fetch_array($pages, MYSQLI_ASSOC)) {
    $recipes[] = $row;
}
?>


<div class="container clear">

    <div class="row">

        <div class="col-lg-12 recipes" >


            <?php foreach ($recipes as $recipe) {?>
                <h4 style="text-align: center;" id="<?= $recipe['title'] ?>"><?= $recipe['title'] ?></h4>
                <pre><?= $recipe['content'] ?><br><hr><br></pre>


            <?php } ?>


        </div>

        <div class="sidenav" >

            <ul>
                <?php foreach ($recipes as $recipe) {?>

                    <li style="list-style-type: none; text-align: center;"><a href="#<?= $recipe['title'] ?>"><?= $recipe['title'] ?></a></li><hr>

            </ul>
                <?php } ?>


        </div>
    </div>
</div>






<?php include('footer.php'); ?>




