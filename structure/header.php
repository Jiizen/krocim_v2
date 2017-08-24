<!-- Entête PC : Logo de K-roCIM et 3 spécialités -->
<header id="header_pc">
    <div>
        <img src="<?php echo $level . 'img/logo.png'; ?>" alt="Logo de K-roCIM Sarl" title="Logo de K-roCIM Sarl"/>
    </div>
    <div class="titres">
        Carrelage
    </div>
    <div class="titres">
        Maçonnerie
    </div>
    <div class="titres">
        Démolition
    </div>
</header>

<!--Entête Smartphone : Logo de K-roCIM-->
<header id="header_mob">
    <img src="<?php echo $level . 'img/logo.png'; ?>" alt="Logo de K-roCIM Sarl" title="Logo de K-roCIM Sarl"/>
</header>


<!-- Navigation -->
<div id="navbar-component">
    <nav id="nav_container_middle">
        <div id="nav_container_margin_left">
            <a id="home" href="<?php echo $level.'index.php'; ?>"><i class="material-icons">home</i></a>
            <a class="lien" href="<?php echo $level.'realisation.php'; ?>">Réalisations</a>
            <a class="lien" href="<?php echo $level.'ecologie.php'; ?>">Écologie</a>
            <a class="lien" href="<?php echo $level.'contact.php'; ?>">Contact</a>
        </div>
    </nav>
</div>

<!-- Diaporama principal -->
<div id="main_slider">
    <?php
    $files_main_slider = glob($level . 'img/main/*.{jpg,png,gif,JPG}', GLOB_BRACE);
    foreach ($files_main_slider as $file) {
        ?>
        <div><img src="<?php echo $file; ?>"></div>
    <?php } ?>
</div>

<!-- Coupure Losange -->
<div class="sep_losange">
    <img id="losange_haut" src="<?php echo $level . 'img/losange.png'; ?>">
</div>