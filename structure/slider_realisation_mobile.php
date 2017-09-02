<?php
$files_slider_realisation_mobile = glob($level . 'img/realisation/'.$repertoire.'/mobile/*.{jpg,png,gif,JPG}', GLOB_BRACE);
?>

<div class="slider-for">
    <?php
    foreach($files_slider_realisation_mobile as $img) { ?>
        <div><img src="<?php echo $img; ?>"></div>
    <?php } ?>
</div>

<p class="message_slide">Glissez votre doigt pour faire défiler les photos</p>