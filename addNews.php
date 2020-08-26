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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

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
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2({
                tags: true,
                width: '100%'
            });
        });
    </script>
    <script src="js.js"></script>



    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Dodaj vijest</title>
</head>
<body>
<div class="bg-light">
    <div class="container bg-light p-0">
        <header>
            <?php
            require_once ('header.php');
            ?>


        </header>

        <main class="pt-3 margin-header">
            <?php
            $errors = [];

            function processSubmit() {
                if(isset($_POST['submit'])){
                    $title = $_POST['title'];
                    $target_dir = "image/";
                    $target_file = $target_dir . basename($_FILES["image"]["name"]);
                    $uploadOk = 1;
                    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

                    $content = $_POST['content'];

                    if (empty($content)) {
                        global $errors;
                        $errors['sadrzaj'] = 'It is required field';
                        return;
                    }

                    $date = $_POST['date'];
                    $image = $_FILES['image']['name'];
                    if($_FILES['image']['name']=="")
                    {
                        $image="sport8.jpg";
                        $_FILES['image']['name']="sport8";
                        $_FILES['image']['type']="image/jpeg";
                        $news = new News();
                        $news_id = $news->insertNews($title,$content,$image,$date);
                        echo "<div class='container bg-success'><h4 class='text-center'>Vijest je uspjesno dodana na sajt sa defaultnom slikom!</h4></div>";
                        //echo json_encode($_POST['tags']);
                        if(isset($_POST['tags'])){
                            foreach($_POST['tags'] as $value) {
                                $tag_name = strtolower($value);
                                $tag_id = $news->isTagExist($tag_name);
                                $news->addTagForNews($news_id,$tag_id);
                            }

                        }

                    }
                    else{
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
                            echo "<div class='container bg-success'><h4 class='text-center'>Dozvoljeni su samo JPG,JPEG,PNG i GIF formati...</h4></div>";
                            //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                            $uploadOk = 0;
                        }
                        if ($uploadOk == 0) {
                            //echo "Sorry, your file was not uploaded.";
                        } else {
                            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                                $news = new News();
                                $news_id = $news->insertNews($title,$content,$image,$date);
                                echo "<div class='container bg-success'><h4 class='text-center'>Vijest je uspjesno dodana na sajt!</h4></div>";
                                //echo json_encode($_POST['tags']);
                                if(isset($_POST['tags'])){
                                    foreach($_POST['tags'] as $value) {
                                        $tag_name = strtolower($value);
                                        $tag_id = $news->isTagExist($tag_name);
                                        $news->addTagForNews($news_id,$tag_id);
                                    }

                                }
                            } else {
                                //echo "Sorry, there was an error uploading your file.";
                            }
                        }

                    }
                }
            }
            processSubmit();
            ?>
            <h1 class="text-center">Dodavanje vijesti na sajt:</h1>

            <div class="row m-0 d-flex justify-content-center">
                <div class="col-12 col-xl-6">
                    <form action="addNews.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group pt-2">
                            <label>Naslov<span style="color: red">*</span> </label>
                            <input type="text" class="form-control" required name="title" id="title" placeholder="Add a title">
                        </div>
                        <div class="input-group pt-1">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupFileAddon01">Dodaj Sliku</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" name="image" class="custom-file-input" id="inputGroupFile01"
                                       aria-describedby="inputGroupFileAddon01">
                                <label class="custom-file-label" id="custom-file-label" for="inputGroupFileAddon01"></label>
                            </div>
                        </div>
                        <div class="form-group pt-3">
                            <label>Sadržaj<span style="color: red">*</span></label>
                            <textarea class="form-control" name="content" id="mytextarea" rows="3"></textarea>
                            <p style="color: red; padding-left: 10px;"><?php if(array_key_exists('sadrzaj', $errors)) echo $errors['sadrzaj']; ?></p>
                        </div>
<!--                        <style type="text/css">-->
<!--                            input[type="date"]::-webkit-calendar-picker-indicator {-->
<!--                                background: transparent;-->
<!--                                bottom: 0;-->
<!--                                color: transparent;-->
<!--                                cursor: pointer;-->
<!--                                height: auto;-->
<!--                                left: 0;-->
<!--                                position: absolute;-->
<!--                                right: 0;-->
<!--                                top: 0;-->
<!--                                width: auto;-->
<!--                            }-->
<!--                        </style>-->

                        <div class="form-group">
                            <label>Datum<span style="color: red">*</span></label>
                            <div >
                                <input type="date" name="date" required max="3000-12-31"
                                       id="date-test"
                                       min="1000-01-01" class="form-control">
                            </div>

                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Tagovi za vijest</label>
                            <select class="js-example-basic-multiple" name="tags[]" multiple="multiple">
                                <?php
                                $news= new News();
                                $news->getAllTags();
                                $news->tagsname = array();
                                if($news->numRows > 0){
                                    while ($row = $news->res->fetch_assoc()){
                                        array_push($news->tagsname,$row['NAME']);
                                        ?>
                                        <option value="<?php echo $row['NAME']; ?>"><?php echo $row['NAME']; ?></option>
                                        <?php
                                    }
                                }
                                ?>
                            </select>
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


<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>



