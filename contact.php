<!--
    Site de K-roCIM Sàrl
    Développeuse : Evlyn Dezegher
    Création : 2015
    Mise à jour (v2) : 2017
 -->

<?php
include('structure/test_arbo.php');
?>

<!doctype html>
<html lang="fr">
<head>
  <?php include('structure/info_head.php'); ?>
</head>
<body>

<!-- Entête : logo, menu et galerie -->
<?php include('structure/header.php'); ?>

<!-- Contenu principal -->
<div id="container">
    <div id="content">
        <h1>Contact</h1>

        <div class="justify">

            <p>
                L'entreprise K-roCIM est située à Châtelaine, à Genève.
                Nous intervenons sur le canton de Genève, Vaud et en France voisine, voire plus loin pour de grands
                chantiers.
            </p>

            <p>
                Nous nous efforçons de vous fournir dans les plus brefs délais des devis
                pour vos travaux et bien sûr, cela gratuitement, tout comme nos conseils.
                N'hésitez pas à nous faire une demande de devis en nous envoyant un mail à l'adresse ci-dessous.
            </p>

            <!-- Coordonnées -->
            <div id="contact">
                <div id="coordonnees">
                    <br>
                    <address>
                        <b>K-roCIM Sàrl</b> <br>
                        Chemin du Coin-de-Terre 3 <br>
                        1219 Châtelaine <br>
                        <a href="tel:+41765293635" title="N° de téléphone de K-roCIM">076.529.36.35</a> <br>
                        <a href="mailto:k.rocim.sarl@gmail.com"
                           title="Adresse mail de K-roCIM">k.rocim.sarl@gmail.com</a>
                        <br> <br> <br>
                        Horaires d'appel du Lundi au Vendredi : <br>
                        de 08h00 à 12h00 <br>
                        & <br>
                        de 13h30 à 18h00
                    </address>
                    <br>
                </div>

                <!-- Google maps -->
                <div id="google_maps">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2760.717857997457!2d6.11500661576849!3d46.21606739097927!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478c64be5e423585%3A0xc45b5e0c195013cc!2sChemin+du+Coin-de-Terre+3%2C+1219+Vernier!5e0!3m2!1sfr!2sch!4v1444765609647"
                            frameborder="0" style="border:0" allowfullscreen>
                    </iframe>
                </div>
            </div>

        </div>

        <div id="div_losange_bas">
            <img id="losange_bas" src="<?php echo $level.'img/losange.png'; ?>">
        </div>

    </div>
</div>

<!-- Pied -->
<?php include('structure/footer.php'); ?>

<!--Import jQuery et librairie Slick -->
<?php include('structure/import_js.php'); ?>
</body>
</html>