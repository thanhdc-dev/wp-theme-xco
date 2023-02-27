<?php get_header(); ?>

<h1 class="heading-title hidden">Dịch vụ</h1>
<?php
// WP_Query arguments
$args = array(
	'post_type' => array( 'service' ),
);

// The Query
$query = new WP_Query( $args );
?>
<section class="box box-service"
         style="background-image: url('<?php echo esc_url( get_assets_path('images/archive-service-items-bg.webp') ) ?>')">
    <div class="container">
        <h2 class="box-title text-center white mb-30 wow fadeInUp  animated"><span>Dịch vụ</span></h2>
        <div class="description text-center mb-40 color-white wow fadeInUp  animated">Những dịch vụ XCONS cung cấp cho
            khách hàng bao gồm:
        </div>
        <div class="row">
			<?php if ( have_posts() ) : ?>
				<?php $index = 1; ?>
				<?php while ( have_posts() ) : the_post(); ?>
                    <div class="col-xs-12 col-sm-6">
                        <div class="item text-center wow fadeInUp  animated">
                            <div class="img">
                                <a href="<?php echo esc_url( get_permalink() ) ?>"
                                   title="<?php the_title(); ?>">
									<?php
									the_post_thumbnail( 'post-thumbnail', [
										'alt'   => get_the_title(),
										'class' => 'img-responsive'
									] );
									?>
                            </div>
                            <div class="name">
                                <div class="order"><span><?php echo sprintf( '%02d', $index ); ?></span></div>
                                <h4>
                                    <a href="<?php echo esc_url( get_permalink() ) ?>"
                                       title="<?php the_title(); ?>"><?php the_title(); ?></a>
                                </h4>
                            </div>
                        </div>
                    </div>
					<?php $index ++; ?>
				<?php endwhile; ?>
			<?php endif;
			wp_reset_postdata(); ?>
        </div>
    </div>
</section>

<section class="box box-featured-page-service box-latest-page-service">
    <div class="container">
        <h2 class="box-title text-center wow fadeInUp  animated"><span>Bản đồ</span></h2>
        <div class="img wow fadeInUp  animated">
            <img src="<?php echo esc_url( get_assets_path('images/archive-service-map.webp') ) ?>" alt="Banner"
                 class="img-responsive center-block"/>
        </div>
    </div>
</section>

<section class="box-contact">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-4">
                <div class="contact-block-contact">
                    <div class="contact-block-info address wow fadeInLeft  animated">
                        <span></span>Tòa nhà 168 đường Láng, Thịnh Quang, Đống Đa, Hà Nội
                    </div>
                    <div class="contact-block-info phone wow fadeInLeft  animated">
                        <span></span>0242 216 8585
                    </div>
                    <div class="contact-block-info email wow fadeInLeft  animated">
                        <span></span>kinhdoanh@xcons.com.vn
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-8">
	            <?php echo do_shortcode('[contact-form-7 id="17" title="Form liên hệ"]')?>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>
