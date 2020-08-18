<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top container" id="navigation">
    <a class="navbar-brand" href="index.php"><img src="image/logo.png" style="width: 140px;height: 40px;"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <li class="nav-item"> <a class="nav-item nav-link" href="NewsforTag.php?id_tag=<?php $news=new News(); $id=$news->mostPopularTag(); echo $id; ?>">Najcitanije <span class="sr-only">(current)</span></a></li>
            <li class="nav-item d-none d-lg-inline"><a class="nav-link pr-1" href="NewsforTag.php?id_tag=2">Fudbal</a></li>
            <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle pl-0" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   <span class="d-inline d-lg-none "> Fudbal</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="NewsforTag.php?id_tag=30">Liga sampiona</a>
                    <a class="dropdown-item" href="NewsforTag.php?id_tag=31">Liga evrope</a>
                    <a class="dropdown-item" href="NewsforTag.php?id_tag=2">Sve</a>
                </div>
            </li>
            <li class="nav-item d-none d-lg-inline"><a class="nav-link pr-1" href="NewsforTag.php?id_tag=5">Kosarka</a></li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle pl-0" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="d-inline d-lg-none "> Kosarka</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="NewsforTag.php?id_tag=32">Nba liga</a>
                    <a class="dropdown-item" href="NewsforTag.php?id_tag=33">Euroliga</a>
                    <a class="dropdown-item" href="NewsforTag.php?id_tag=5">Sve</a>
                </div>
            </li>
            <li class="nav-item d-none d-lg-inline"><a class="nav-link pr-1" href="NewsforTag.php?id_tag=4">Tenis</a></li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle pl-0" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="d-inline d-lg-none "> Tenis</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="NewsforTag.php?id_tag=34">ATP</a>
                    <a class="dropdown-item" href="NewsforTag.php?id_tag=35">WTA</a>
                    <a class="dropdown-item" href="NewsforTag.php?id_tag=4">Sve</a>
                </div>
            </li>
            <li class="nav-item"><a class="nav-link" href="othernews.php">Ostalo</a></li>
            <li class="nav-item"> <a class=" nav-link" href="addNews.php">Dodaj Vijest</a></li>
        </div>
    </div>
</nav>

<script>
    function setActiveRouterLink() {
        const nav = document.getElementById('navigation');

        let links = nav.getElementsByTagName('a');

        for (let link of links) {
            if (window.location.href.includes(link.href)) {
               link.classList.add('active');
            } else {
                link.classList.remove('active');
            }
        }
    }

    setActiveRouterLink();
</script>