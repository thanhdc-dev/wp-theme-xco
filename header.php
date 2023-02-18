<!DOCTYPE html>
<html <?php language_attributes(); ?> />

<head>
    <meta charset="<?php bloginfo('charset') ?>"/>
    <link rel="profile" href="htt://gmgp.org/xfn/11"/>
    <link rel="pingback" href="<?php bloginfo('pingback_url') ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php $menuLogoUrl = wp_get_attachment_image_url(carbon_get_theme_option('menu_logo') ?? 0); ?>
<header>
    <div class="header-top">
        <div class="container">
            <div class="pull-left logo-header">
                <a href="/" title="BUILDING FOR LIFE"><img
                            src="<?php echo $menuLogoUrl; ?>"
                            title=" XCONS- BUILDING FOR LIFE" alt=" XCONS- BUILDING FOR LIFE"
                            class="img-responsive img-fix center-block"></a>
            </div>
            <a class="menu-mobile visible-xs visible-sm" href="javascript:void(0);">
                <i class="fa fa-bars"></i><span>MENU</span></a>
            <?php
            wp_nav_menu(
                [
                    'theme_location' => 'primary-menu',
                    'menu_class' => 'list-unstyled main-nav pull-right',
                ]
            );
            ?>
            <div class="clearfix"></div>
        </div>
    </div>
</header>
<?php $slides = carbon_get_theme_option('crb_slides'); ?>
<?php if ($slides && count($slides) > 0): ?>
    <section id="slideshow">
        <div class="tp-banner-container">
            <div class="tp-banner">
                <ul class="list-unstyled">
                    <?php foreach ($slides as $slide): ?>
                        <?php
                        $title = $slide['title'] ?? '';
                        $description = $slide['description'] ?? '';
                        $imageUrl = wp_get_attachment_image_url($slide['image']);
                        $url = $slide['url'] ?? '#';
                        ?>
                        <li data-transition="fade" data-slotamount="7" data-masterspeed="1000"
                            data-thumb="<?php echo $imageUrl; ?>">
                            <img src="<?php echo $imageUrl; ?>"
                                 alt="<?php echo $title; ?>" title="<?php echo $title; ?>"
                                 data-lazyload="<?php echo $imageUrl; ?>"
                                 data-bgposition="left top" data-bgfit="cover" data-bgrepeat="no-repeat">
                            <span class="slider-overlay hidden-xs"></span>
                            <div class="caption lft ltb slide-title text-pd hidden-xs" data-x="right" data-y="center"
                                 data-voffset="-65" data-speed="1000" data-start="1900"
                                 data-easing="easeOutBack"><?php echo $title; ?></div>
                            <div class="caption lfr ltl slide-description text-pd hidden-xs" data-x="right"
                                 data-y="center"
                                 data-voffset="20" data-speed="1000" data-start="2200"
                                 data-easing="easeOutBack"><?php echo $description; ?></div>
                            <div class="caption lfb ltt slide-link text-pd hidden-xs" data-x="right" data-y="center"
                                 data-voffset="120" data-speed="1000" data-start="2400" data-easing="easeOutBack">
                                <a href="<?php echo $url; ?>" class="slide-read-more"
                                   title="ĐƯA NGÔI NHÀ TRONG MƠ RA KHỎI BẢN VẼ">Xem chi tiết</a><span></span>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <?php $socials = carbon_get_theme_option('crb_socials'); ?>
            <?php if ($socials && count($socials) > 0): ?>
                <div class="slider-left-box hidden-xs hidden-sm">
                    <div class="text">building for life</div>
                    <div class="list-social">
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
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>
