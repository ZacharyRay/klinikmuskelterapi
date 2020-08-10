<?php 
$services = get_sub_field('add_services'); 
$service_explainer = get_sub_field('services_explainer');
?>
<div id="services">
    <h2>Services</h2>
    <div id="service-explainer"><?= $service_explainer ?></div>
    <div id="services-wrap">
        <?php foreach($services as $servicebox){ ?>
        <div id="service-container">
            <div id="service" style="background-image: url('<?= $servicebox['image'] ?>')">
                <div id="text-box"><?= $servicebox['service_text'] ?></div>
                <div id="calltoaction"><?= $servicebox['call_to_action'] ?></div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>