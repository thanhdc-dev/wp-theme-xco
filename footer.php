<?php
$title = carbon_get_theme_option('footer_title') ?? '';
$hotline = carbon_get_theme_option('footer_hotline') ?? '';
$imageUrl = wp_get_attachment_image_url(carbon_get_theme_option('footer_image') ?? 0);
$logoUrl = wp_get_attachment_image_url(carbon_get_theme_option('footer_logo') ?? 0);
$contacts = carbon_get_theme_option('footer_contacts') ?? [];
$countContact = count($contacts);
$socials = carbon_get_theme_option('crb_socials');
?>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-4 wow fadeInUp  animated" data-wow-duration="2s">
                <img src="<?php echo $imageUrl; ?>"
                     class="img-responsive wow fadeInUp  center-block mb-10" alt="Map">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-8 wow fadeInUp  animated" data-wow-duration="2s">
                <div class="head">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 wow fadeInUp" data-wow-duration="2s">
                            <h2><span><?php echo $title; ?></span></h2>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="list-social text-center wow fadeInUp"
                                 style="visibility: visible; animation-name: fadeInUp;">
                                <?php foreach ($socials as $social): ?>
                                    <?php
                                    $title = $social['title'] ?? '';
                                    $iconClass = $social['icon_class'] ?? '';
                                    $url = $social['url'] ?? '#';
                                    ?>
                                    <a href="<?php echo $url; ?>" title="<?php echo $title; ?>" target="_blank">
                                        <i class="<?php echo $iconClass; ?>"></i>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="showroom">
                    <span class="wow fadeInUp"><?php echo $hotline; ?>:</span>
                    <a class="wow fadeInUp" href="tel:<?php echo $hotline; ?>"><?php echo $hotline; ?></a>
                    <div class="row">
                        <?php $firstContactIndex = ceil($countContact / 2) ?>
                        <div class="col-xs-12 col-sm-6">
                            <?php for ($i = 0; $i < $firstContactIndex; $i++): ?>
                                <?php
                                $title = $contacts[$i]['title'] ?? '';
                                $address = $contacts[$i]['address'] ?? '';
                                $phone = $contacts[$i]['phone'] ?? '';
                                ?>
                                <div class="showroom-item wow fadeInUp"
                                     style="visibility: visible; animation-name: fadeInUp;">
                                    <div class="name"><?php echo $title; ?>:</div>
                                    <p class="address"><i class="fa fa-map-marker"></i> <?php echo $address; ?></p>
                                    <p class="phone"><i class="fa fa-phone"></i> <?php echo $phone; ?></p>
                                </div>
                            <?php endfor; ?>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <?php for ($i = $firstContactIndex; $i < $countContact; $i++): ?>
                                <?php
                                $title = $contacts[$i]['title'] ?? '';
                                $address = $contacts[$i]['address'] ?? '';
                                $phone = $contacts[$i]['phone'] ?? '';
                                ?>
                                <div class="showroom-item wow fadeInUp">
                                    <div class="name"><?php echo $title; ?>:</div>
                                    <p class="address"><i class="fa fa-map-marker"></i> <?php echo $address; ?></p>
                                    <p class="phone"><i class="fa fa-phone"></i> <?php echo $phone; ?></p>
                                </div>
                            <?php endfor; ?>
                        </div>
                    </div>
                </div>
                <div class="footer-logo">
                    <a href="" title=" XCONS- BUILDING FOR LIFE"><img
                                src="<?php echo $logoUrl; ?>"
                                title="BUILDING FOR LIFE" alt="BUILDING FOR LIFE"
                                class="img-responsive center-block"></a>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
