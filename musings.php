<?php include ('header.php');
include('leftSide.php'); ?>

<?php
$sql = "SELECT * FROM musings";
$pages= mysqli_query(db_connect(), $sql);

$articles = [];
while ($row = mysqli_fetch_array($pages, MYSQLI_ASSOC)) {
    $articles[] = $row;
}

?>

<div class="container clear">

    <div class="row">

        <div class="col-lg-12 musings" >


                <?php foreach ($articles as $article) {?>
                    <h4 style="text-align: center;" id="<?= $article['title'] ?>"><?= $article['title'] ?></h4>
                    <p><?= $article['content'] ?><br><hr><br></p>


                <?php } ?>


        </div>

        <div class=" sidenav" >

            <ul>
                <?php foreach ($articles as $article) {?>

                <li style="list-style-type: none; text-align: center;"><a href="#<?= $article['title'] ?>"><?= $article['title'] ?></a></li><hr>


            </ul>
            <?php } ?>
        </div>
    </div>
</div>





























<?php include('footer.php'); ?>
