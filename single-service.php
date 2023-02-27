<?php get_header(); ?>

<?php
$serviceImplementationProcessTitle       = carbon_get_the_post_meta( 'service_implementation_process_title' ) ?? '';
$serviceImplementationProcessDescription = wpautop( carbon_get_the_post_meta( 'service_implementation_process_description' ) ?? '' );
$serviceImplementationProcessBackground  = ( $url = wp_get_attachment_image_url( carbon_get_the_post_meta( 'service_implementation_process_background' ) ?? 0 ) ) ? $url : get_assets_path( 'images/default-single-service-implementation-process-bg.webp' );
$serviceAttentionTitle                   = carbon_get_the_post_meta( 'service_attention_title' ) ?? '';
$serviceAttentionDescription             = wpautop( carbon_get_the_post_meta( 'service_attention_description' ) ?? '' );
?>
<div class="wrap-container">
    <div id="content">

        <h1 class="heading-title hidden"><?php the_title(); ?></h1>
        <div class="service-design-consultancy pt-40 pb-40">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-3">
                        <h2 class="box-heading wow fadeInUp animated mt-0 pr-40"><span>Dịch vụ</span></h2>
                        <h2 class="box-heading no-bd wow fadeInUp animated pr-40"><span><?php the_title(); ?></span>
                        </h2>
                    </div>
                    <div class="col-xs-12 col-sm-9">
                        <div class="description-detail fz19 wow fadeInUp animated"><?php the_content(); ?></div>
                        <div class="contact">
                            <a class="btn btn-primary btn-contact-link" title="Đăng ký ngay" href="/lien-he.html">
                                Đăng ký ngay
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="service-implementation-process pt-40 pb-40"
             style="background-image: url('<?php echo $serviceImplementationProcessBackground; ?>')">
            <div class="container">
                <h2 class="box-heading text-center white wow fadeInUp animated">
                    <span><?php echo $serviceImplementationProcessTitle; ?></span></h2>
                <div class="description-detail fz19 wow fadeInUp animated">
					<?php echo $serviceImplementationProcessDescription; ?>
                </div>
            </div>
        </div>
        <div class="service-attention pt-40 pb-40">
            <div class="container">
                <h2 class="box-heading text-center wow fadeInUp animated">
                    <span><?php echo $serviceAttentionTitle; ?></span></h2>
                <div class="description-detail fz19 wow fadeInUp animated">
					<?php echo $serviceAttentionDescription; ?>
                </div>
            </div>
        </div>

    </div>
</div>


<?php get_footer(); ?>
