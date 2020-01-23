<?php
session_start();
if (isset($_SESSION["connected"]) && $_SESSION["connected"]==true){
    header('location:./php/selection.php');
    exit();
}
?>

<html lang="fr">

<head>
    <title>Resto_Dynamique_Index</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="design.css" rel="stylesheet">
</head>

<body>
    <?php
    /*
     * Including the navbar
     */
    include("php/headNavbar.html");
    ?>
    <div class="cont-box"></div>
    <div id="connexion" class="section lb">
        <div class="section-title text-center">
            <h3>Connexion</h3>
        </div><!-- end title -->
        <div class="container-fluid">
            <form action="php/selection.php" method="post">
                <div class="form-group">
                    <label for="login">Login</label>
                    <input type="text" class="form-control" name="uname" required>

                </div>
                <div class="form-group">
                    <label for="psw">Password</label>
                    <input type="password" class="form-control" name="psw" required>

                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-primary">Reset</button>
            </form>
            <?php
            if (isset($_SESSION["user_found"]) && $_SESSION["user_found"]==false)
                echo("<h3>Login ou password inconnu. Veuillez réessayer de vous connecter.</h3>");
            ?>
        </div>
    </div>

</body>
</html>