<?php
// protection de l'accès à cette page, si la session n'existe pas OU qu'elle n'est pas ou plus valide
if(!isset($_SESSION['notresession'])||$_SESSION['notresession']!==session_id()) {
    // on efface définitivement la session et on est redirigé sur la page d'accueil publique
    header("Location: disconnect.php");
    exit();
}

// requête permettant de récupérer les liens dans la base de donnée
$sql="SELECT * FROM liens ORDER BY thetitle ASC;";
$recup_liens = mysqli_query($db,$sql) or die(mysqli_error($db));

// on compte le nombre de lignes de résultat
$count = mysqli_num_rows($recup_liens);

// si on a pas de résultat
// if(empty($count))
// if($count===0)
// mode court, si $count vaut 1 => true on l'inverse = false. si $count vaut 0 => false on l'inverse = true
if(!$count){
    $message = "Pas encore de liens pour le moment";
}

?>
<!doctype html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Portfolio | Administration des liens</title>
    <style>
    </style>

</head>
<body>
<?php
include "menu_connect.php";
?>
<header class="jumbotron">
    <h1 class="display-4 text-center mb-4">Portfolio | Administration des liens</h1>
    <p>Bienvenue <?=$_SESSION['therealname']?></p>
</header>

<main class="container">
    <?php if(isset($message)) echo "<h3>$message</h3>" ?>
</main>

<?php
// chemin depuis index.php (CF frontal)
include "./pages/javascript.php";

?>

</body>
</html>