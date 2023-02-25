<?php
/*
 Template Name: About Us
 */
?>

<?php get_header(); ?>

<h1 style="display: none"><?php echo get_the_title(); ?></h1>
<?php
$aboutUsIntroduceTitle       = carbon_get_the_post_meta( 'about-us_introduce_title' ) ?? '';
$aboutUsIntroduceDescription = carbon_get_the_post_meta( 'about-us_introduce_description' ) ?? '';
$aboutUsIntroducePrizeTitle  = carbon_get_the_post_meta( 'about-us_introduce_prize_title' ) ?? '';
$aboutUsIntroducePrizes      = carbon_get_the_post_meta( 'about-us_introduce_prizes' ) ?? [];
?>
<section class="box box-introduce">
    <div class="container">
        <div class="info wow fadeInLeft animated">
            <h2 class="box-title text-center"><span><?php echo $aboutUsIntroduceTitle; ?></span></h2>
            <div class="description-detail text-center">
				<?php echo $aboutUsIntroduceDescription; ?>

                <p style="text-align: justify;">&nbsp;</p>

                <p style="text-align: justify;">&nbsp;</p>

                <p style="text-align: center;">
                    <span style="font-size:20px;"><strong><?php echo $aboutUsIntroducePrizeTitle; ?>:</strong></span>
                </p>
				<?php foreach ( $aboutUsIntroducePrizes as $aboutUsPrize ): ?>
					<?php
					$description = $aboutUsPrize['description'] ?? '';
					$imageUrl    = wp_get_attachment_image_url( $aboutUsPrize['image'] );
					?>
                    <table align="center" border="0" cellpadding="0" cellspacing="0"
                           style="text-align: justify;width:500px;">
                        <tbody>
                        <tr>
                            <td style="width: 77px;">
                                <img alt="cup" height="51"
                                     src="<?php echo $imageUrl; ?>"
                                     width="51"/></td>
                            <td style="width: 421px;">
                                <p>
                                    <span style="font-size:16px;"><?php echo $description; ?></span>
                                </p>
                            </td>
                        </tr>
                        </tbody>
                    </table>

                    <p>&nbsp;</p>
				<?php endforeach; ?>

                <p style="text-align: justify;">
                    <br/>
                    <br/>
                </p>
            </div>
        </div>
    </div>
</section>

<?php
$aboutUsServiceTitle       = carbon_get_the_post_meta( 'about-us_service_title' ) ?? '';
$aboutUsServiceCaption     = carbon_get_the_post_meta( 'about-us_service_caption' ) ?? '';
$aboutUsServiceDescription = carbon_get_the_post_meta( 'about-us_service_description' ) ?? '';
$aboutUsServiceItemsTitle  = carbon_get_the_post_meta( 'about-us_service_items_title' ) ?? '';
$aboutUsServiceItems       = carbon_get_the_post_meta( 'about-us_service_items' ) ?? [];
$aboutUsServiceImage       = wp_get_attachment_image_url( carbon_get_the_post_meta( 'about-us_service_image' ) );
$aboutUsServiceLogo        = wp_get_attachment_image_url( carbon_get_the_post_meta( 'about-us_service_logo' ) );
?>
<section class="box box-standard box-service-about">
    <div class="container">
        <div class="standard">
            <h2 class="box-title text-center wow fadeInUp animated mb-40">
                <span><?php echo $aboutUsServiceTitle; ?></span></h2>
            <div class="standard-box">
                <div class="row">
                    <div class="col-xs-12 col-sm-5">
                        <div class="left">
                            <h3 class="head-title wow fadeInUp animated"><?php echo $aboutUsServiceCaption; ?></h3>
                            <div class="description wow fadeInUp animated mb-25">
								<?php echo $aboutUsServiceDescription; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-7">
                        <div class="right">
                            <div class="row">
                                <div class="col-xs-12 col-sm-5">
                                    <h3 class="head-title wow fadeInUp animated"><?php echo $aboutUsServiceItemsTitle; ?></h3>
                                    <div class="infos">
										<?php foreach ( $aboutUsServiceItems as $aboutUsServiceItem ): ?>
											<?php
											$name     = $aboutUsServiceItem['name'] ?? '';
											$url      = $aboutUsServiceItem['url'] ?? '';
											$imageUrl = wp_get_attachment_image_url( $aboutUsServiceItem['image'] );
											?>
                                            <div class="item wow fadeInUp animated">
                                                <div class="img-service">
                                                    <a href="<?php echo $url; ?>" title="<?php echo $name; ?>">
                                                        <img src="<?php echo $imageUrl; ?>"
                                                             alt="<?php echo $name; ?>" class="img-responsive">
                                                    </a>
                                                </div>
                                                <h4 class="title"><a href="#"
                                                                     title="Thiết kế kiến trúc"><?php echo $name; ?></a>
                                                </h4>
                                            </div>
										<?php endforeach; ?>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-7">
                                    <img class="img-water-mark wow fadeInUp animated"
                                         src="<?php echo $aboutUsServiceLogo; ?>" alt="logos">
                                    <div class="img-right wow fadeInUp animated">
                                        <img src="<?php echo $aboutUsServiceImage; ?>"
                                             alt="Hệ thống dịch vụ" class="img-responsive">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$aboutUsStatTitle         = carbon_get_the_post_meta( 'about-us_stat_title' ) ?? '';
$aboutUsStatItems         = carbon_get_the_post_meta( 'about-us_stat_items' ) ?? [];
$aboutUsStatBackgroundUrl = wp_get_attachment_image_url( carbon_get_the_post_meta( 'about-us_stat_background' ) ?? 0 );
?>
<section class="box box-stat"
         style="background-image: url('<?php echo $aboutUsStatBackgroundUrl; ?>')">
    <div class="container">
        <h2 class="box-title white text-center wow fadeInUp  animated mt-30 mb-40">
            <span><?php echo $aboutUsStatTitle; ?></span>
        </h2>
        <div class="wrap-stat mt-40 mb-30">
            <div class="row">
				<?php foreach ( $aboutUsStatItems as $aboutUsStatItem ): ?>
					<?php
					$name   = $aboutUsStatItem['name'] ?? '';
					$number = $aboutUsStatItem['number'] ?? 0;
					?>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="stat-item text-center wow fadeInUp animated">
                            <div><span class="counter-number" data-count="<?php echo $number; ?>">0</span><sup>+</sup>
                            </div>
                            <div class="name"><?php echo $name; ?></div>
                        </div>
                    </div>
				<?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<?php
$aboutUsUtilityTitle = carbon_get_the_post_meta( 'about-us_utility_title' ) ?? '';
$aboutUsUtilityItems = carbon_get_the_post_meta( 'about-us_utility_items' ) ?? [];
?>
<section class="box box-utility">
    <div class="container">
        <h2 class="box-title text-center mb-40"><span><?php echo $aboutUsUtilityTitle; ?></span></h2>
        <div class="row pt-30">
			<?php foreach ( $aboutUsUtilityItems as $index => $aboutUsUtilityItem ): ?>
				<?php
				$description = $aboutUsUtilityItem['description'] ?? '';
				$imageUrl    = wp_get_attachment_image_url( $aboutUsUtilityItem['image'] );
				?>
                <div class="col-xs-12 col-sm-4">
                    <div class="item text-center">
                        <div class="box-img wow fadeInUp animated get-height-img-utility">
                            <div class="img center-block">
                                <img src="http://xcons.com.vn/upload/image/cache/data/icon/utility-1-5d9-165-165.png"
                                     alt=""
                                     class="img-responsive center-block">
                            </div>
                        </div>
                        <div class="sort-order"><span><?php echo sprintf( '%02d', $index + 1 ); ?></span></div>
                        <div class="description wow fadeInUp animated">
							<?php echo $description; ?>
                        </div>
                    </div>
                </div>
			<?php endforeach; ?>
        </div>
    </div>
</section>

<?php
$frontpageId           = get_option( 'page_on_front' );
$feedbackTitle         = Carbon_Fields\Helper\Helper::get_post_meta( $frontpageId, 'feedback_title' ) ?? '';
$feedbackBackgroundUrl = wp_get_attachment_image_url( Carbon_Fields\Helper\Helper::get_post_meta( $frontpageId, 'feedback_background' ) ?? 0 );
$feedbackItems         = Carbon_Fields\Helper\Helper::get_post_meta( $frontpageId, 'feedback_items' ) ?? [];
?>
<section class="box box-testimonial"
         style="background-image: url('<?php echo $feedbackBackgroundUrl; ?>')">
    <div class="container">
        <h2 class="box-title text-center visible-xs"><span><?php echo $feedbackTitle; ?></span></h2>
        <div class="box-main">
            <div class="row wow fadeInUp  animated">
                <div class="hidden-xs col-sm-5">
                    <h3><?php echo $feedbackTitle; ?></h3>
                </div>
                <div class="col-xs-12 col-sm-7">
                    <div class="box-content">
                        <div class="owl-carousel owl-theme">
							<?php foreach ( $feedbackItems as $index => $feedback ): ?>
								<?php
								$idx         = $index + 1;
								$description = $feedback['description'] ?? '';
								$imageUrl    = wp_get_attachment_image_url( $feedback['image'] );
								$name        = $feedback['name'] ?? '';
								$position    = $feedback['position'] ?? '';
								?>
                                <div class="item">
                                    <div class="sort"><span><?php echo sprintf( '%02d', $idx ); ?></span></div>
                                    <div class="description">"<?php echo $description; ?>"
                                    </div>
                                    <div class="img pull-left">
                                        <img src="<?php echo $imageUrl; ?>"
                                             class="img-responsive"
                                             alt="<?php echo $name; ?>">
                                    </div>
                                    <div class="info pull-left">
                                        <div class="name"><?php echo $name; ?></div>
                                        <span><?php echo $position; ?></span>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
							<?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
