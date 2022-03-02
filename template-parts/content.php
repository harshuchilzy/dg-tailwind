<article id="post-<?php the_ID(); ?>" <?php post_class( 'mb-12' ); ?>>

	<header class="entry-header mb-4 tstshop">
		<?php the_title( sprintf( '<h2 class="entry-title text-2xl md:text-3xl font-extrabold leading-tight mb-1"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		<time datetime="<?php echo get_the_date( 'c' ); ?>" itemprop="datePublished" class="text-sm text-gray-700"><?php echo get_the_date(); ?></time>
	</header>


	<?php 
	
	
	
	if ( is_search() || is_archive() ) : ?>

		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div>

	<?php else : 
if( is_product_category() || is_shop() ) { ?>
<div class="collection-main my-16">
    <div class="container mx-auto">
            <div class="flex gap-8">
                <div class="w-1/5">
                    <div class="collection-filter-block">
                    <?php dynamic_sidebar( 'cat_left_1' ); ?>
                    </div>
                </div>
                <div class="w-4/5">
               <?php the_content(); ?>     
              </div>
              </div>
                </div>
              </div>

<?php

}else{ ?>
		<div class="entry-content">
			<?php
			/* translators: %s: Name of current post */
			the_content(
				sprintf(
					__( 'Continue reading %s', 'tailpress' ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				)
			);

			wp_link_pages(
				array(
					'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'tailpress' ) . '</span>',
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
					'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'tailpress' ) . ' </span>%',
					'separator'   => '<span class="screen-reader-text">, </span>',
				)
			);
			?>
		</div>

	<?php } endif; ?>

</article>
