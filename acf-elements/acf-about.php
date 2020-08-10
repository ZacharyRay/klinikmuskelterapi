<?php 
$about_image = get_sub_field('about_image');
$about_text = get_sub_field('about_text');
?>

<div id="about">
    <div id="about-bg">
        <div id="about-text-wrap">
            <div id="about-text">
                <?= $about_text ?>
            </div>
        </div>
        <div id="about-image" style="background-image: url('<?= $about_image ?>')"></div>
    </div>
</div>