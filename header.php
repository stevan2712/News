<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top container">
    <a class="navbar-brand" href="index.php"><img src="image/logo.png" style="width: 140px;height: 40px;"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link active" href="NewsforTag.php?id_tag=<?php $news=new News(); $id=$news->mostPopularTag(); echo $id; ?>">Najcitanije <span class="sr-only">(current)</span></a>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Fudbal
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="NewsforTag.php?id_tag=30">Liga sampiona</a>
                    <a class="dropdown-item" href="NewsforTag.php?id_tag=31">Liga evrope</a>
                    <a class="dropdown-item" href="NewsforTag.php?id_tag=2">Sve</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Kosarka
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="NewsforTag.php?id_tag=32">Nba liga</a>
                    <a class="dropdown-item" href="NewsforTag.php?id_tag=33">Euroliga</a>
                    <a class="dropdown-item" href="NewsforTag.php?id_tag=5">Sve</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Tenis
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="NewsforTag.php?id_tag=34">ATP</a>
                    <a class="dropdown-item" href="NewsforTag.php?id_tag=35">WTA</a>
                    <a class="dropdown-item" href="NewsforTag.php?id_tag=4">Sve</a>
                </div>
            </li>
            <a class="nav-item nav-link active" href="othernews.php">Ostalo</a>
            <a class="nav-item nav-link active" href="addNews.php">Dodaj Vijest</a>
        </div>
    </div>
</nav>
