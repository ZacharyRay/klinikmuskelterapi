<?php 
$hero = get_sub_field('hero_image');
$logo = get_sub_field('logo');
?>

<div id="hero">
    <div id="hero-wrap">
        <div id="logo" style="background-image: url('<?= $logo ?>')"></div>
        <div id="hero-image" style="background-image: url('<?= $hero ?>')"></div>
    </div>
</div>