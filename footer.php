</div>
</div>
<?php wp_footer(); 
$options = get_fields('options');
?>
<?php foreach($options as $option){ ?>
<div id="footer-wrapper">
    <div id="footer-container">
        <div id="contact-box">
            <div id="address"><?= $option['address']; ?></div>
            <div id="phonenumber">
                Tlf:
                <a href="tlf:"><?= $option['phone']; ?></a>
           </div>
            <div id="emailaddress">
                Email:
                <a href="mailto:"><?= $option['email']; ?></a>
            </div>
        </div>
        <div id="socialmedia">
        <?php foreach($option['social_media'] as $social){ ?>
            <a href="<?= $social['link']; ?>"><div id="social-image" style="background-image: url('<?= $social['image'] ?>')"></div></a>
        <?php } ?>
        </div>
    </div>
</div>
<?php } ?>

</body>
</html>