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
    <h1>ÉCOLOGIE</h1>

    <div class="justify">
      <p>
          Chez K-roCIM sàrl, nous avons la conviction qu'une attitude écologiquement et socialement responsable est compatible avec la croissance saine d'une entreprise.
      </p>
    </div>

    <img id="img_ecologie" alt="Image de la nature sur Genève" title="Soyons écologiques pour préserver nos beaux paysages" src="img/ecologie.jpg">

    <div class="justify">
      <p>
          Pour cette raison :
      </p>

      <ul>
        <li>
          Tous nos déchets, ainsi que ceux dûs aux travaux chez nos client, sont triés et recyclés à tous les niveaux.
          Ils sont emmenés dans le centre de recyclage <a href="http://www.sogetri.ch/" title="Aller sur le site de Sogetri" target="_blank">Sogetri</a> à La Praille dans ce but.
        </li>
        <li>
          80% de nos matériaux sont fabriqués en Suisse par l’entreprise <a href="http://www.weber-marmoran.ch/fr/home.html" title="Aller sur le site de Weber" target="_blank">Weber</a>. Nous réduisons ainsi le rejet de CO<sub>2</sub> issu du transport qui en découle, en plus de soutenir l’économie nationale.
        </li>
        <li>
          Suite à un remplacement de nos véhicules en 2014, nous possédons aujourd'hui des modèles à essence répondant à la norme de pollution Euro 5.
        </li>
        <li>
          Tous nos locaux, bureaux, ateliers et dépôts sont alimentés en électricité verte, se composant ainsi :
        </li>
        <ul>
          <li class="circle">
            80% d'énergie d'origine hydraulique (certifiée "TÜV SÜD EE01")
          </li>
          <li class="circle">
            20% d'énergie d'origine renouvelable (certifiée "Naturemade Star")
          </li>
        </ul>
      </ul>
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