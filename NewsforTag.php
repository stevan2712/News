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

    <title> <?php
        $news = new News();
        $result= $news->tagName($_GET['id_tag']);
        echo ucfirst($result);
        ?></title>
</head>
<body>
<div class="bg-light">
    <div class="container bg-white p-0">
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
                    $news->getLastNewsforTag($_GET['id_tag']);
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
                <div class="row m-0">
                    <div class="col-12 bg-danger my-3 radius">
                        <h1 class="text-white text-center">
                            <?php
                            $news = new News();
                            $result= $news->tagName($_GET['id_tag']);
                            echo ucfirst($result);
                            ?>
                        </h1>
                    </div>
                    <?php
                    $results_per_page= 9 ;
                    $news = new News();
                    $news2 = new News();
                    $number_of_results = $news2->numNewsForTag($_GET['id_tag']);
                    $number_of_pages = ceil($number_of_results/$results_per_page);

                    if(!isset($_GET['page'])){
                        $page=1;
                        $_GET['page']=1;
                    }else{
                        $page=$_GET['page'];
                    }
                    $this_page_result = ($page-1)*$results_per_page;

                    $news->getNewsforTag2($_GET['id_tag'], $this_page_result,$results_per_page);
                    if($news->numRows > 0){
                        $counter = 0;
                        while ($row = $news->res->fetch_assoc()){
                            ++$counter;
                            ?>
<!--                            --><?php //echo $counter % 3 != 0 ? 'col-6' : 'col-12'; ?>
                            <div class="col-12 col-lg-4 py-2">
                                <a class="text-decoration-none" href="news.php?id=<?php echo $row['NEWS_ID'] ?>"><div class="card h-100">
                                        <img class="card-img-top" src="image/<?php echo $row['IMAGE']; ?>" alt="Card image cap">
                                        <div class="card-body" id="card-body">
                                            <p><?php echo date('d-M-Y', strtotime($row['DATE']) ); ?></p>
                                            <h5 class="card-title text-center"><?php echo $row['TITLE']; ?></h5>
                                        </div>
                                    </div></a>
                            </div>


                        <?php }
                    }
                    ?>
                </div>


                <div class="row links justify-content-center">
                <?php

                for($page=1;$page<=$number_of_pages;$page++){
                    $activeClass = isset($_GET['page']) && $_GET['page'] == $page ? 'active-page' : '';
                    echo '<a class="px-2  '. $activeClass . '" href="NewsforTag.php?page=' . $page .'&id_tag='. $_GET['id_tag'] . '"> ' . $page .  '</a>';

                }
                ?>
                </div>
            </section>
        </main>

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
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
