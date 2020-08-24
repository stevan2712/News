<?php
require_once ('connection/News.php');
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
        $news->openNews($_GET['id']);
        $row = $news->res->fetch_assoc();
        echo $row['TITLE'];
        ?></title>
</head>
<body>
<div class="container p-0 bg-light">
    <header>
        <?php
        require_once ('header.php');
        ?>
    </header>
    <main class="margin-header">



        <div class="row">
            <div class="col-12 my-3">
            <h1 class="text-white text-center py-1 px-4 bg-primary"> <?php echo $row['TITLE']; ?></h1>
            </div>
            <div class="col-12 col-xl-12">
                <img class="img-fluid w-100" src="image/<?php echo $row['IMAGE']; ?>" alt="Card image cap">
            </div>
            <div class="col-12 col-xl-12 text-center" id="content-news">
                <p class="bg-light"> <?php echo $row['CONTENT']; ?></p>
            </div>
            <div class="col-12 bg-light pl-4 pl-lg-5">
                <?php
                $news->getTagsForNews($_GET['id']);
                if($news->numRows > 0){
                    while ($row2 = $news->res->fetch_assoc()){
                        ?>
                <a href="NewsforTag.php?id_tag=<?php echo $row2['TAG_ID']; ?>" class="badge badge-warning"><?php echo $row2['NAME']; ?></a>

                <?php
                    }
                }
                else{
                }
                ?>
            </div>
        </div>

        <section class="similar_news" id="similar">
            <div class="row">
                <div class="col-12 my-3">
                    <h1 class="text-white text-center py-1 px-4 bg-danger">Procitajte jos</h1>
                </div>
                <?php
                $news = new News();
                $news->mostSimiliarNews($_GET['id']);
                if($news->numRows > 0){
                    $counter = 0;
                    while ($row = $news->res->fetch_assoc()){
                        ++$counter;
                        ?>

                        <div class="<?php echo $counter % 3 != 0 ? 'col-12' : 'col-12'; ?> col-lg-4 ">
                            <a class="text-decoration-none" href="news.php?id=<?php echo $row['NEWS_ID'] ?>"><div class="card h-100 news-card">
                                    <img class="card-img-top2" src="image/<?php echo $row['IMAGE']; ?>" alt="Card image cap">
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

        </section>

    </main>

    <footer>
        <?php
        require_once ('footer.php');
        ?>


    </footer>


</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
