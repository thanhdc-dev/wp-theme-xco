<?php
/*
 Template Name: Contact
 */
?>

<?php get_header(); ?>
<?php
$contactTitle = carbon_get_the_post_meta('contact_title') ?? '';
$contactPhone = carbon_get_the_post_meta('contact_phone') ?? '';
$contactAddress = carbon_get_the_post_meta('contact_address') ?? '';
$contactEmail = carbon_get_the_post_meta('contact_email') ?? '';
$contactBackgroundUrl  = ( $url = wp_get_attachment_image_url( carbon_get_the_post_meta( 'contact_background' ) ?? 0 ) ) ? $url : get_assets_path( 'images/default-contact-bg.webp' );
?>
<div class="contact-page-wrap">
  <div id="content pb-0">

    <h1 class="heading-title hidden">Liên hệ</h1>
    <h2 class="box-heading mb-35 text-center wow fadeInUp  animated"><span><?php echo $contactTitle;?></span></h2>
    <div class="container">
      <div class="contact-info-detail wow fadeInUp  animated">
        <div class="row">
          <div class="col-xs-12 col-sm-4">
            <div class="contact-item" style="height: 174px;">
              <div>
                <div class="icon"><img src="<?php echo esc_url( get_assets_path('images/phone-icon.webp') ) ?>" alt="icon" class="center-block"></div>
                <p class="text-center"><?php echo $contactPhone; ?></p>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4">
            <div class="contact-item" style="height: 174px;">
              <div>
                <div class="icon"><img src="<?php echo esc_url( get_assets_path('images/map-icon.webp') ) ?>" alt="icon" class="center-block"></div>
                <p class="text-center"><?php echo $contactAddress; ?></p>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4">
            <div class="contact-item" style="height: 174px;">
              <div>
                <div class="icon"><img src="<?php echo esc_url( get_assets_path('images/mail-icon.webp') ) ?>" alt="icon" class="center-block"></div>
                <p class="text-center"><?php echo $contactEmail; ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="contact-page-form wow fadeInUp  animated" style="background-image: url('<?php echo $contactBackgroundUrl; ?>')">
      <h2 class="box-heading mb-35 text-center wow fadeInUp"><span>Liên hệ</span></h2>
      <div class="container">
          <?php echo do_shortcode('[contact-form-7 id="134" title="Form liên hệ"]')?>
      </div>
    </div>

  </div>
</div>

<?php get_footer(); ?>
