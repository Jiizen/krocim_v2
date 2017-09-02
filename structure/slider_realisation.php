<?php
$files_slider_realisation_middle = glob($level . 'img/realisation/'.$repertoire.'/middle/*.{jpg,png,gif,JPG}', GLOB_BRACE);
$files_slider_realisation_min = glob($level . 'img/realisation/'.$repertoire.'/min/*.{jpg,png,gif,JPG}', GLOB_BRACE);
//$files_slider_realisation_big = glob($level . 'img/realisation/'.$repertoire.'/big/*.{jpg,png,gif,JPG}', GLOB_BRACE);
?>

<div class="slider-for">
    <?php
    foreach($files_slider_realisation_middle as $img) { ?>
        <div><img src="<?php echo $img; ?>"></div>
    <?php } ?>
</div>

<div class="slider-nav">
    <?php
    foreach($files_slider_realisation_min as $img) { ?>
        <div><img src="<?php echo $img; ?>"></div>
    <?php } ?>
</div>