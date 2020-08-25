<?php
require_once 'connection/News.php';
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="custom.css">
    <link href="https://fonts.googleapis.com/css2?family=Manrope&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Sky news</title>
</head>
<body>
<div class="bg-light">
<div class="container bg-light p-0 px-2 px-lg-0">
    <header>
        <?php
        require_once ('header.php');
        ?>

        <div id="carouselExampleIndicators" class="carousel slide margin-header" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
                <?php
                $news = new News();
                $news->getLastUpdatedNews();
                if($news->numRows > 0){
                    $counter = 0;
                while ($row = $news->res->fetch_assoc()){
                    ++$counter;
                ?>
                <div class="carousel-item <?php if($counter == 1){echo "active";} ?>">
                    <img src="image/<?php echo $row['IMAGE']; ?>" class="d-block img-carousel " alt="...">
                    <div class="carousel-caption ">
                        <a class="text-decoration-none" href="news.php?id=<?php echo $row['NEWS_ID'] ?>"><h3 class="bg-info text-white"><?php echo $row['TITLE']; ?></h3></a>
                    </div>
                </div>

                <?php }
                }
                ?>

            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </header>

    <main>
        <section class="newest_news">
        <div class="row ">
            <div class="col-12 mt-3 mb-1">
                <h3 class="text-left py-2 pl-4 bg-secondary text-white">Najnovije vijesti</h3>
            </div>
            <?php
            $news = new News();
            $news->getLastUpdatedNewsIndexPage();
            if($news->numRows > 0){
                $counter = 0;
            while ($row = $news->res->fetch_assoc()){
                ++$counter;
            ?>

            <div class="<?php if($counter > 3){echo "d-none d-lg-block";} ?> <?php echo $counter == 2 ? 'col-12 col-lg-6' : 'col-12 col-lg-3'; ?> py-0 py-lg-2">
                <a class="text-decoration-none" href="news.php?id=<?php echo $row['NEWS_ID'] ?>">
                    <div class="card h-100 news-card">
                        <div class="row no-gutters">
                            <div class="col-4 col-lg-12">
                                <img class="card-img-top" src="image/<?php echo $row['IMAGE']; ?>" alt="Card image cap">
                            </div>
                            <div class="col-8 col-lg-12">
                                <div class="card-body" id="card-body">
                                    <p><?php echo date('d-M-Y', strtotime($row['DATE']) ); ?></p>
                                    <h5 class="card-title text-center"><?php echo $row['TITLE']; ?></h5>
<!--                                    <div class="elipsis-2-lines content-div">--><?php //echo $row['CONTENT']; ?><!--</div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </a>


            </div>


            <?php }
            }
            ?>
        </div>
        </section>

        <section class="most_popular_news" id="popular">
            <div class="row">
                <div class="col-12 my-3 news-topic">
                    <h3 class="bg-secondary py-2 pl-4"><a href="NewsforTag.php?id_tag=<?php $news=new News(); $id=$news->mostPopularTag(); echo $id; ?>"">Najcitanije vijesti </a></h3>
                </div>
                <?php
                $news = new News();
                $news->mostPopularNewsByTag();
                if($news->numRows > 0){
                    $counter = 0;
                    while ($row = $news->res->fetch_assoc()){
                        ++$counter;
                        ?>

                        <div class="<?php echo $counter % 3 != 0 ? 'col-12' : 'col-12'; ?> col-lg-4">
                            <a class="text-decoration-none" href="news.php?id=<?php echo $row['NEWS_ID'] ?>">
                                <div class="card h-100 news-card">
                                    <div class="row no-gutters">
                                        <div class="col-4 col-lg-12">
                                            <img class="card-img-top" src="image/<?php echo $row['IMAGE']; ?>" alt="Card image cap">
                                        </div>
                                        <div class="col-8 col-lg-12">
                                            <div class="card-body" id="card-body">
                                                <p><?php echo date('d-M-Y', strtotime($row['DATE']) ); ?></p>
                                                <h5 class="card-title text-center"><?php echo $row['TITLE']; ?></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>


                        </div>


                    <?php }
                }
                ?>
            </div>

        </section>

        <section class="football_news" id="football">
            <div class="row">
                <div class="col-12 my-3 news-topic">
                  <h3 class="bg-secondary py-2 pl-4"> <a href="NewsforTag.php?id_tag=2"> Fudbal vijesti</a></h3>
                </div>
                <?php
                $news = new News();
                $news->getFootballNews();
                if($news->numRows > 0){
                    $counter = 0;
                    while ($row = $news->res->fetch_assoc()){
                        ++$counter;
                        ?>

                        <div class="<?php echo $counter % 3 != 0 ? 'col-12' : 'col-12'; ?> col-lg-4">
                            <a class="text-decoration-none" href="news.php?id=<?php echo $row['NEWS_ID'] ?>">
                                <div class="card h-100 news-card">
                                    <div class="row no-gutters">
                                        <div class="col-4 col-lg-12">
                                            <img class="card-img-top" src="image/<?php echo $row['IMAGE']; ?>" alt="Card image cap">
                                        </div>
                                        <div class="col-8 col-lg-12">
                                            <div class="card-body" id="card-body">
                                                <p><?php echo date('d-M-Y', strtotime($row['DATE']) ); ?></p>
                                                <h5 class="card-title text-center"><?php echo $row['TITLE']; ?></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>


                        </div>


                    <?php }
                }
                ?>
            </div>

        </section>

        <section class="basketball_news" id="basketball">
            <div class="row">
                <div class="col-12 my-3 news-topic">
                   <h3 class="py-2 pl-4 bg-secondary"> <a href="NewsforTag.php?id_tag=5">Kosarka vijesti</a></h3>
                </div>
                <?php
                $news = new News();
                $news->getBasketballNews();
                if($news->numRows > 0){
                    $counter = 0;
                    while ($row = $news->res->fetch_assoc()){
                        ++$counter;
                        ?>

                        <div class="<?php echo $counter % 3 != 0 ? 'col-12' : 'col-12'; ?> col-lg-4">
                            <a class="text-decoration-none" href="news.php?id=<?php echo $row['NEWS_ID'] ?>">
                                <div class="card h-100 news-card">
                                    <div class="row no-gutters">
                                        <div class="col-4 col-lg-12">
                                            <img class="card-img-top" src="image/<?php echo $row['IMAGE']; ?>" alt="Card image cap">
                                        </div>
                                        <div class="col-8 col-lg-12">
                                            <div class="card-body" id="card-body">
                                                <p><?php echo date('d-M-Y', strtotime($row['DATE']) ); ?></p>
                                                <h5 class="card-title text-center"><?php echo $row['TITLE']; ?></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>


                        </div>


                    <?php }
                }
                ?>
            </div>

        </section>

        <section class="other_news" id="other">
            <div class="row">
                <div class="col-12 my-3 news-topic">
                   <h3 class="py-2 pl-4 bg-secondary"> <a href="othernews.php">Ostale vijesti</a></h3>
                </div>
                <?php
                $news = new News();
                $news->newsWithoutTags();
                if($news->numRows > 0){
                    $counter = 0;
                    while ($row = $news->res->fetch_assoc()){
                        ++$counter;
                        ?>

                        <div class="<?php echo $counter % 3 != 0 ? 'col-12' : 'col-12'; ?> col-lg-4">
                            <a class="text-decoration-none" href="news.php?id=<?php echo $row['NEWS_ID'] ?>">
                                <div class="card h-100 news-card">
                                    <div class="row no-gutters">
                                        <div class="col-4 col-lg-12">
                                            <img class="card-img-top" src="image/<?php echo $row['IMAGE']; ?>" alt="Card image cap">
                                        </div>
                                        <div class="col-8 col-lg-12">
                                            <div class="card-body" id="card-body">
                                                <p><?php echo date('d-M-Y', strtotime($row['DATE']) ); ?></p>
                                                <h5 class="card-title text-center"><?php echo $row['TITLE']; ?></h5>
<!--                                                <p class="elipsis-2-lines">--><?php //echo $row['CONTENT']; ?><!--</p>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>


                        </div>

                    <?php }
                }
                ?>

            </div>

        </section>

    </main>
</div>
    <div class="container p-0" >
    <footer>

        <?php
        require_once ('footer.php');
        ?>
    </footer>
    </div>



</div>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="js.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
