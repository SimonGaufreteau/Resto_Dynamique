<?php
include("connexion_header.php");
?>
<html lang="fr">
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../design.css">

</head>

<body id="page-top">
<?php
include("headNavbar.html");
?>
<div class="cont-box"></div>
<div id="about" class="section lb">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="message-box">
                    <h2>Bienvenue au Dinner's Caffe.</h2>
                    <p>Nous sommes heureux de vous acceuillir sur notre site internet (toujours en cours de construction).</p>
                    <p>Vous pourrez retrouver sur ce site notre menu, composés de trois catégories : entrées, plats et desserts. Pour affficher les plats d'une catégorie spécifique cliquez sur la catégorie et vous serez redirigé vers la liste !</p>
                    <ul>
                        <?php
                        $cats = $bd->getCategories();
                        foreach($cats as $cat) { //looping over categories$
                        echo '<li><a href="listePlats.php?codeCat=' . $cat["codeCat"] . "&libellecat=" . $cat["libellecat"] . '">' . $cat["libellecat"] . '</a></li>';
                        }
                        ?>
                    </ul>
                    <br>
                    <p>Sinon vous pouvez simplement consulter notre carte complète ci-dessous.</p>
                </div><!-- end messagebox -->
            </div><!-- end col -->

            <div class="col-md-6">
                <div >
                    <img class ="msg-box-right" src="../images/menu-img-02.jpg" alt="">
                </div><!-- end media -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</div>

<div class="cont-box"></div>


<?php
foreach($cats as $cat) { //looping over categories$
    echo('<div id="'.$cat["libellecat"].'" class="section lb">');
    echo('<div class="container-fluid"><div class="section-title text-center">
            <h3>Nos '.$cat["libellecat"].'</h3></div>');
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
    /*
     * End of the plats loop, echo the next category
     */

}
?>


<?php
include("footerIdentifiant.php")
?>
</body>
</html>
