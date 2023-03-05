<?php get_header(); ?>

<?php
$constructionSlides                      = carbon_get_the_post_meta( 'construction_slides' ) ?? '';
$constructionSpaceDescriptionTitle       = carbon_get_the_post_meta( 'construction_space_description_title' ) ?? '';
$constructionSortOrder                   = carbon_get_the_post_meta( 'construction_sort_order' ) ?? '';
$constructionSpaceDescriptionDescription = wpautop( carbon_get_the_post_meta( 'construction_space_description_description' ) ?? '' );
?>

<div class="wrap-container">
    <div id="content-wrap">
        <h1 class="heading-title hidden"><?php the_title(); ?></h1>
        <h2 class="box-heading text-center mb-35 wow fadeInUp animated mb-40"><span><?php the_title(); ?></span></h2>
        <div class="container">
            <div class="space-box-main-body owl-dots-none">
                <div class="box-preview">
                    <div id="slide-big" class="img-addition-big owl-carousel owl-theme wow fadeInUp animated">
						<?php foreach ( $constructionSlides as $item ): ?>
							<?php
							$imageUrl = wp_get_attachment_image_url( $item['image'] );
							?>
                            <div class="item img">
                                <img src="<?php echo $imageUrl; ?>" alt="<?php the_title(); ?>">
                            </div>
						<?php endforeach; ?>
                    </div>
                </div>
                <div class="box-thumbs">
                    <div id="slide-thumbs" class="img-addition owl-carousel owl-theme wow fadeInUp animated">
						<?php foreach ( $constructionSlides as $item ): ?>
							<?php
							$imageUrl = wp_get_attachment_image_url( $item['image'] );
							?>
                            <div class="item">
                                <a href="<?php echo $imageUrl; ?>" data-fancybox="images" class="img">
                                    <img src="<?php echo $imageUrl; ?>" alt="Mr Dung">
                                </a>
                            </div>
						<?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="space-description-detail">
            <div class="container">
                <h2 class="box-heading text-center white mb-35 wow fadeInUp animated mb-40">
                    <span><?php echo $constructionSpaceDescriptionTitle; ?></span></h2>
                <div class="row">
                    <div class="col-xs-12 col-sm-12">
                        <span class="sort-order"><?php echo sprintf( '%02d', $constructionSortOrder ); ?></span>
                        <div class="description-detail wow fadeInUp animated">
							<?php echo $constructionSpaceDescriptionDescription; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>
