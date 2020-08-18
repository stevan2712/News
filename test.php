
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
    <script src="https://cdn.tiny.cloud/1/58pofwp9x0fkk918tsvonlqnm49ajh5fqxgaw65sbgmmxch4/tinymce/5/tinymce.min.js" referrerpolicy="origin"/></script>
    <script>
    tinymce.init({
        selector: '#mytextarea',
        plugins: 'image',
        setup: function (editor) {
            editor.on('change', function () {
                editor.save();
            });
        }

    });
    </script>


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Dodaj vijest</title>
</head>
<body>
<div class="bg-light">
    <div class="container bg-white p-0">
        <header>
            <?php
            require_once ('header.php');
            ?>


        </header>

        <main class="pt-3 margin-header">
            <?php

            if(isset($_POST['submit'])){
                $title = $_POST['title'];
                $target_dir = "image/";
                $target_file = $target_dir . basename($_FILES["image"]["name"]);
                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

                $content = $_POST['content'];
                $date = $_POST['date'];
                $image = $_FILES['image']['name'];

                if($image=="")
                {
                    $image="sport8.jpg";
                }


                $check = getimagesize($_FILES["image"]["tmp_name"]);
                if ($check !== false) {
                    //echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    //echo "File is not an image.";
                    $image="sport8.jpg";
                    $uploadOk = 0;
                }



                //echo $_FILES["image"]["size"];

                if ($_FILES["image"]["size"] > 5000000) {
                    //echo "Sorry, your file is too large.";
                    $uploadOk = 0;
                }

                if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                    && $imageFileType != "gif" ) {
                    //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                    $uploadOk = 0;
                }
                if ($uploadOk == 0) {
                    //echo "Sorry, your file was not uploaded.";
                } else {
                    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                        //echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
                    } else {
                        //echo "Sorry, there was an error uploading your file.";
                    }
                }



                //echo $image;

                $news = new News();
                $news_id = $news->insertNews($title,$content,$image,$date);
                echo "<div class='container bg-success'><h4 class='text-center'>Vijest je uspjesno dodana na sajt!</h4></div>";

                if(isset($_POST['tags'])){
                    foreach($_POST['tags'] as $value) {
                        $tag_name = strtolower($value);
                        $tag_id = $news->isTagExist($tag_name);
                        $news->addTagForNews($news_id,$tag_id);
                    }

                }





            }
            ?>
            <h1 class="text-center">Dodavanje vijesti na sajt:</h1>

            <div class="row m-0 d-flex justify-content-center">
                <div class="col-12 col-xl-6">
                    <form action="test.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group pt-2">
                            <label>Title<span style="color: red">*</span> </label>
                            <input type="text" class="form-control" required name="title" id="title" placeholder="Add a title">
                        </div>
                        <div class="input-group pt-1">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupFileAddon01">Upload Image</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" name="image" class="custom-file-input" id="inputGroupFile01"
                                       aria-describedby="inputGroupFileAddon01">
                                <label class="custom-file-label" for="inputGroupFileAddon01"></label>
                            </div>
                        </div>
                        <div class="form-group pt-3">
                            <label>Content<span style="color: red">*</span></label>
                            <textarea class="form-control" name="content" id="mytextarea" required rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Date<span style="color: red">*</span></label>
                            <input type="date" name="date" required max="3000-12-31"
                                   min="1000-01-01" class="form-control">
                        </div>

                        <label>Tags</label>
                        <div class="row m-0" id="tag-list">
                            <?php
                            $news= new News();
                            $news->getAllTags();
                            $news->tagsname = array();
                            if($news->numRows > 0){
                                while ($row = $news->res->fetch_assoc()){
                                    array_push($news->tagsname,$row['NAME']);
                                    ?>
                                    <div class="form-check col-6 col-lg-4" >
                                        <input class="form-check-input" name="tags[]" type="checkbox" value="<?php echo $row['NAME']; ?>">
                                        <label class="form-check-label" for="defaultCheck1">
                                            <?php echo $row['NAME']; ?>
                                        </label>
                                    </div>


                                    <?php
                                }
                            }
                            ?></div>
                        <div class="d-flex pt-3">
                            <p>
                                <label>Dodaj Tag</label>
                                <a class="btn" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    <i class="fas fa-plus-circle text-primary fa-2x"></i>
                                </a>
                            </p>
                            <div class="collapse" id="collapseExample">
                                <div class="card card-body">
                                    <input type="text" placeholder="Naziv taga" name="tag" id="tag-input">
                                    <button class="btn btn-primary" type="button" id="add-tag">Dodaj</button>
                                </div>
                            </div>

                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary text-center btn-lg mt-5" name="submit">Dodaj vijest</button>
                        </div>
                    </form>
                </div>
            </div>

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
<script src="js.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>

