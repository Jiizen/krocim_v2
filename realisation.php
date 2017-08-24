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
        <h1>RÉALISATIONS</h1>

        <div class="justify">
            <p>Vous pourrez contempler ici des photos de certaines de nos réalisations. Vous pouvez accéder aux diaporamas en cliquant sur une proposition de catégorie.</p>
        </div>

        <!-- Affichage des images des diverses catégories -->
        <div id="categories">
            <div>
                <a href="<?php echo $level . 'photo/cuisine_salon.php'; ?>">
                    <div>
                        <img src="<?php echo $level . 'img/realisation/cuisine_salon.jpg' ?>">
                        <span>Cuisines & salons</span>
                    </div>
                </a>
                <a href="<?php echo $level . 'photo/escalier.php'; ?>">
                    <div>
                    <img src="<?php echo $level . 'img/realisation/escalier.jpg' ?>">
                        <span>Escaliers</span>
                    </div>
                </a>
                <a href="<?php echo $level . 'photo/terrasse_balcon.php'; ?>">
                    <div>
                        <img src="<?php echo $level . 'img/realisation/terrasse_balcon.jpg' ?>">
                        <span>Terrasses & balcons</span>
                    </div>
                </a>
            </div>
            <div>
                <a href="<?php echo $level . 'photo/salle_de_bain_wc.php'; ?>">
                    <div>
                        <img src="<?php echo $level . 'img/realisation/sdb.jpg' ?>">
                        <span>Salles de bain & WC</span>
                    </div>
                </a>
                <a href="<?php echo $level . 'photo/divers_spec.php'; ?>">
                <div>
                    <img src="<?php echo $level . 'img/realisation/divers_spec.jpg' ?>">
                    <span>Divers & spéciaux</span>
                </div>
                </a>
            </div>
        </div>

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
<?php include('structure/footer.php'); ?>

<!--Import jQuery et librairie Slick -->
<?php include('structure/import_js.php'); ?>
</body>
</html>