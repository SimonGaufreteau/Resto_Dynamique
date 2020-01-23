<div id="identifiants" class="section lb">
    <div class="container-fluid">
        <div class="section-title text-center">
            <h3>Identifiants</h3>
            <p>Au cas où vous auriez un trou de mémoire ;)</p>
        </div><!-- end title -->
        <div class="message-box">
            <ul>
                <?php
                echo "<li>Votre identifiant : " . $_SESSION['uname']."</li>";
                echo "<li>Votre mot de passe : " . $_SESSION['psw']."</li>";
                ?>
            </ul>
        </div>
    </div>
</div>