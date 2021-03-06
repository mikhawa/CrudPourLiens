<nav class="navbar navbar-expand-md navbar-light">
    <a class="navbar-brand" href="./">Portfolio</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sousmenu" aria-controls="sousmenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="sousmenu">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item <?php if(!isset($_GET['pg'])) echo "active" ?>">
                <a class="nav-link" href="./">Accueil</a>
            </li>
            <li class="nav-item <?php if(isset($_GET['pg'])&&$_GET['pg']=="galerie") echo "active" ?>">
                <a class="nav-link" href="?pg=galerie">Galerie</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Tutoriels
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item  <?php if(isset($_GET['pg'])&&$_GET['pg']=="tuto1") echo "active" ?>" href="?pg=tuto1">Tutoriel 1</a>
                    <a class="dropdown-item <?php if(isset($_GET['pg'])&&$_GET['pg']=="tuto2") echo "active" ?>" href="?pg=tuto2">Tutoriel 2</a>
                </div>
            </li>
            <li class="nav-item  <?php if(isset($_GET['pg'])&&$_GET['pg']=="liens") echo "active" ?>">
                <a class="nav-link" href="?pg=liens">Liens</a>
            </li>
            <li class="nav-item  <?php if(isset($_GET['pg'])&&$_GET['pg']=="contact") echo "active" ?>">
                <a class="nav-link" href="?pg=contact">Contact</a>
            </li>
        </ul>
        <a href="?pg=connect"><button class="btn btn-outline-primary my-2 my-sm-0" type="button">Se connecter</button></a>
    </div>
</nav>
