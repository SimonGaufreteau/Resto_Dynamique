<?php
include("connexion_header.php");
include("headNavbar.html");
?>

<html lang="fr">
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <!-- Bootstrap & Site CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../design.css">

</head>

<body id="page-top">
<?php
/*
 * Including the navbar
 */
include("headNavbar.html");
?>
<body>
    <?php
    $cat['libellecat']=$_GET['libellecat'];
    $cat['codeCat']=$_GET['codeCat'];
    $plats = $bd->getPlats($cat['codeCat']);
    echo('<div id="'.$cat["libellecat"].'" class="section lb">');
    echo('<div class="container-fluid"><div class="section-title text-center">
            <h3>Détail de nos '.$cat["libellecat"].'</h3></div>');
    echo('<div class="row">');
    $plats = $bd->getPlats($cat["codeCat"]);
    foreach ($plats as $plat) { //looping over plats
        echo("<div class=\"col-md-3\"><div class=\"services-inner-box\">
                    <div class=\"ser-icon\">
                        <img src=../images/".$plat["nomimg"] ." class=\"img-fluid\" alt=\"\" />
                    </div>
                    <h2>".$plat["nomPlat"]."</h2>
                    <a  href=\"#\">€".$plat["prix"] ."</a>
                </div></div>");
    }
    echo("</div>");
    echo("</div>");
    echo'<div class="cont-box"></div>';
    ?>
    <?php
    include("footerIdentifiant.php")
    ?>
</body>

</html>