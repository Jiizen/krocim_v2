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

<?php include('structure/import_js.php'); ?>

<!-- Entête : logo, menu et galerie -->
<?php include('structure/header.php'); ?>

<!-- Contenu principal -->
<div id="container">
    <div id="content">
        <h1>À PROPOS DE K-ROCIM</h1>

        <div class="justify">
        <p>
            K-roCIM sàrl est une entreprise familiale créée en 2001 à Genève par Robert Vysata. Celle-ci est rejointe
            par Fabio Bastos en 2005, qui a repris l’affaire en 2015.
        </p>
        <p>
            Présents dans les cantons de Genève, Vaud et en France voisine, nous sommes spécialisés dans la pose de tout
            type de carrelage : grès, grès-cérame, mosaïque, carreaux grand format, carreaux en métal,... Nous proposons
            aussi nos compétences pour la pose, le nettoyage et l’entretien de pierres naturelles.
        </p>
        <p>
            Nos collaborateurs s’emploient à vous offrir le meilleur service possible, tant pour des rénovations et
            transformations, que pour des nouvelles constructions tels que : des villas individuelles, immeubles
            locatifs ou en PPE, centres commerciaux, bâtiments publics et piscines.
        </p>
        <p>
            Dans le cadre d’une rénovation, nous vous guidons dans vos choix et dans la conception de votre salle de
            bain, cuisine, WC, douche à l’italienne, piscine, hammam, terrasse. Nous pouvons vous mettre en contact avec
            des artisans locaux avec lesquels nous avons l’habitude de travailler et avec qui nous avons la certitude
            que les travaux seront faits dans les règles de l’art. Ceux-ci peuvent vous offrir leurs services en
            peinture, sanitaire, menuiserie, plâtrerie, électricité,...
        </p>
        <p>
            De plus, nous pouvons assurer la coordination de vos chantiers du début à la fin, vous offrant ainsi la
            possibilité de raccourcir la durée de vos travaux.
        </p>
        <p>
            Nous nous efforçons de vous fournir dans les plus brefs délais des devis pour vos travaux et bien sûr cela
            offert gratuitement, tout comme nos conseils.
        </p>
        </div>

<!--        <h2>-->
<!--            Nos compétences-->
<!--        </h2>-->
<!---->
<!--        <div id="competences">-->
<!--            <div>-->
<!--                <i class="material-icons">home</i>-->
<!--                <p>Compétence 1</p>-->
<!--            </div>-->
<!--            <div>-->
<!--                <i class="material-icons">home</i>-->
<!--                <p>Compétence 2</p>-->
<!--            </div>-->
<!--            <div>-->
<!--                <i class="material-icons">home</i>-->
<!--                <p>Compétence 3</p>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--        <div id="competences_mob">-->
<!--            <div>-->
<!--                <i class="material-icons">home</i>-->
<!--                <p>Compétence 1</p>-->
<!--            </div>-->
<!--            <div>-->
<!--                <i class="material-icons">home</i>-->
<!--                <p>Compétence 2</p>-->
<!--            </div>-->
<!--            <div>-->
<!--                <i class="material-icons">home</i>-->
<!--                <p>Compétence 3</p>-->
<!--            </div>-->
<!--        </div>-->

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