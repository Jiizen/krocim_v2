<!--
    Site de K-roCIM Sàrl
    Développeuse : Evlyn Dezegher
    Création : 2015
    Mise à jour (v2) : 2017
 -->

<?php include('../structure/test_arbo.php'); ?>

<!doctype html>
<html lang="fr">
<head>
    <?php include('../structure/info_head.php'); ?>
</head>
<body>

<!-- Entête : logo, menu et galerie -->
<?php include('../structure/header.php'); ?>

<!-- Contenu principal -->
<div id="container">
    <div id="content">

        <h1>RÉALISATIONS - ESCALIERS</h1>
        <?php $repertoire = 'escalier';
        include('../structure/slider_realisation.php');
        ?>

        <p id="demande_devis">
            Demandez votre devis gratuit sous 48h
            <a href="<?php echo $level . 'contact.php'; ?>"> ICI</a>
        </p>

    </div>

    <div id="div_losange_bas">
        <img id="losange_bas" src="<?php echo $level . 'img/losange.png'; ?>">
    </div>

</div>

<!-- Pied -->
<?php include('../structure/footer.php'); ?>

<!--Import jQuery et librairie Slick -->
<?php include('../structure/import_js.php'); ?>
</body>
</html>