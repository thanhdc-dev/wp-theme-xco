<?php get_header(); ?>


<h1 class="heading-title hidden"><?php single_cat_title(); ?></h1>

<div class="container">
    <div id="content" class="pb-0">

        <h1 class="heading-title hidden"><?php single_cat_title(); ?></h1>
        <h2 class="box-heading mb-40 text-center wow fadeInUp animated"><span><?php single_cat_title(); ?></span></h2>
		<?php
		$args = [
			'post_type'      => 'construction',
			'posts_per_page' => 9,
			'order'          => 'ASC',
			'tax_query'      => [
				[
					'taxonomy' => 'construction-types',
					'field'    => 'slug',
					'terms'    => get_queried_object()->slug,
				],
			],
		];

		// The Query
		$query = new WP_Query( $args );
		?>
        <div class="fluid">
            <div class="box-space-wrap hidden-xs">
                <div class="row">
					<?php if ( $query->have_posts() ) : ?>
						<?php while ( $query->have_posts() ) : $query->the_post(); ?>
                            <div class="col-xs-12 col-sm-4">
                                <div class="space-item wow fadeInUp animated">
                                    <div class="img">
                                        <a href="<?php echo esc_url( get_permalink() ) ?>"
                                           title="<?php the_title(); ?>">
											<?php
											the_post_thumbnail( 'post-thumbnail', [
												'alt'   => get_the_title(),
												'class' => 'img-responsive'
											] );
											?>
                                        </a>
                                    </div>
                                    <div class="info">
										<?php $sortOrder = Carbon_Fields\Helper\Helper::get_post_meta( get_the_ID(), 'construction_sort_order' ) ?? ''; ?>
                                        <span class="sort-order"><?php echo sprintf( '%02d', $sortOrder ); ?></span>
                                        <a class="title" href="<?php echo esc_url( get_permalink() ) ?>"
                                           title="<?php the_title(); ?>"><?php the_title(); ?></a>
                                    </div>
									<?php $address = Carbon_Fields\Helper\Helper::get_post_meta( get_the_ID(), 'construction_address' ) ?? ''; ?>
                                    <span class="position position-0"><?php echo $address; ?></span>
                                </div>
                            </div>
						<?php endwhile; ?>
					<?php endif;
					wp_reset_postdata(); ?>
                </div>
            </div>
            <div class="box-space-wrap box-space-wrap-xs visible-xs">
                <div class="owl-carousel owl-theme wow fadeInUp animated">
					<?php if ( have_posts() ) : ?>
						<?php while ( have_posts() ) : the_post(); ?>
                            <div class='item'>
                                <div class="space-item wow fadeInUp animated">
                                    <div class="img">
                                        <a href="<?php echo esc_url( get_permalink() ); ?>"
                                           title="<?php the_title(); ?>">
											<?php
											the_post_thumbnail( 'post-thumbnail', [
												'alt'   => get_the_title(),
												'class' => 'img-responsive'
											] );
											?>
                                        </a>
                                    </div>
                                    <div class="info">
										<?php $sortOrder = Carbon_Fields\Helper\Helper::get_post_meta( get_the_ID(), 'construction_sort_order' ) ?? ''; ?>
                                        <span class="sort-order"><?php echo sprintf( '%02d', $sortOrder ); ?></span>
                                        <a class="title"
                                           href="<?php echo esc_url( get_permalink() ); ?>"
                                           title="<?php the_title(); ?>"><?php the_title(); ?></a>
										<?php $address = Carbon_Fields\Helper\Helper::get_post_meta( get_the_ID(), 'construction_address' ) ?? ''; ?>
                                        <span class="position-space-xs"><?php echo $address; ?></span>
                                    </div>
                                </div>
                            </div>
						<?php endwhile; ?>
					<?php endif;
					wp_reset_postdata(); ?>
                </div>
            </div>
            <div class="paginate text-center">
				<?php bootstrap_pagination( get_query_var( 'paged' ), $wp_query->max_num_pages ); ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
