<div class="mt-3 bg-colorRed pt-5 pb-4">

    <div class="row m-0 text-white">
        <div class="col-4 col-lg-2 offset-0 offset-lg-2 order-1 order-lg-1">
            <a href="index.php"><h5 class="text-white">POCETNA</h5></a>
            <a href="NewsforTag.php?id_tag=<?php $news=new News(); $id=$news->mostPopularTag(); echo $id; ?>"><p class="m-0">Najcitanije</p></a>
            <a href="NewsforTag.php?id_tag=2"><p class="m-0">Fudbal</p></a>
            <a href="NewsforTag.php?id_tag=5"><p class="m-0">Kosarka</p></a>
            <a href="NewsforTag.php?id_tag=4"><p class="m-0">Tenis</p></a>
            <a href="othernews.php"><p class="m-0">Ostalo</p></a>
        </div>
        <div class="col-12 col-lg-3 order-3 order-lg-2">
            <h5 class="d-none d-lg-block text-center">PRATITE NAS I NA</h5>

            <div class="d-flex justify-content-center pt-3">
                <a href="#">
                <span class="rounded-circle bg-white d-flex icon-size mr-3">
                    <i class="fab fa-facebook-f fa-lg m-auto " style="color: red"></i>
                </span>

                <a href="#">
                <span class="rounded-circle bg-white d-flex icon-size">
                    <i class="fab fa-youtube fa-lg m-auto " style="color: red"></i>
                </span>
                </a>
                    <a href="#">
                <span class="rounded-circle bg-white d-flex icon-size ml-3">
                    <i class="fab fa-instagram fa-lg m-auto " style="color: red"></i>
                </span></a>
            </div>

        </div>
        <div class="col-8 col-lg-4 order-2 order-lg-3">
            <h5 class="text-center pr-3 pr-lg-5">NEWSLETTER</h5>
            <div class="d-flex flex-column flex-sm-row justify-content-center">
            <input type="text" placeholder="Email">
            <button class="btn btn-primary mx-5 mx-sm-0">Prijava</button>
            </div>
        </div>
    </div>

</div>