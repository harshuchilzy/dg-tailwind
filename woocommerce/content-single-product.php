<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>

<div class="product-page">
    <div class="peoduct-info-section my-16">
        <div class="container mx-auto">
                    <div class="collection-breadcrumb py-16">
                        <?php
	$args = array(
            'delimiter'   => '<img src="https://eancodewebshop.nl/wp-content/themes/tailpress/images/arrow-grey.png" alt="" class="w-auto h-2">',
            'wrap_before' => '<ul class="flex gap-3 items-center">',
            'wrap_after'  => '</ul>',
            'before'      => '<li class="flex gap-3 items-center text-black font-normal text-xs font-proxima"> ',
            'after'       => '</li>',
            'home'        => _x( 'Home', 'breadcrumb', 'woocommerce' ),
            
        );
?>
<?php woocommerce_breadcrumb( $args ); ?>
                        <!--<ul class="flex gap-3 items-center">-->
                        <!--    <li class="flex gap-3 items-center"><a href="#" class="text-black font-normal text-xs font-proxima">Home</a> <img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/arrow-grey.png" alt="" class="w-auto h-2"></li>-->
                        <!--    <li class="flex gap-3 items-center"><a href="#" class="text-black font-normal text-xs font-proxima">Deurbeslog</a> <img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/arrow-grey.png" alt="" class="w-auto h-2"></li>-->
                        <!--    <li><a href="#" class="rounded-sm bg-orange text-white text-xs py-1 px-4 font-normal font-proxima hover:bg-black">Beldrukker</a></li>-->
                        <!--</ul>-->
                    </div>
<div class="flex gap-8">
	<div class="w-1/2">
		<?php
		global $product;
		$imgCount = $product->get_gallery_image_ids();
		$class = '';
		if(count($imgCount) == 0){
			$class .= 'single_image_slide';
		}
		?>
		<div class="featured-media-block <?php echo $class; ?>">

			<div class="featured-product-slider11">
				<?php 
				global $product;
				$columns           = apply_filters( 'woocommerce_product_thumbnails_columns', 4 );
				$post_thumbnail_id = $product->get_image_id();
				$wrapper_classes   = apply_filters(
					'woocommerce_single_product_image_gallery_classes',
					array(
						'woocommerce-product-gallery',
						'woocommerce-product-gallery--' . ( $post_thumbnail_id ? 'with-images' : 'without-images' ),
						'woocommerce-product-gallery--columns-' . absint( $columns ),
						'images',
					)
				);
				?>
				<div class="<?php echo esc_attr( implode( ' ', array_map( 'sanitize_html_class', $wrapper_classes ) ) ); ?>" data-columns="<?php echo esc_attr( $columns ); ?>" style="opacity: 0; transition: opacity .25s ease-in-out;">

					<figure class="woocommerce-product-gallery__wrapper">
						<?php
						if ( $post_thumbnail_id ) {
							$html = wc_get_gallery_image_html( $post_thumbnail_id, true );
							
						} else {
							$html  = '<div class="woocommerce-product-gallery__image--placeholder">';
							$html .= sprintf( '<img src="%s" alt="%s" class="wp-post-image" />', esc_url( wc_placeholder_img_src( 'woocommerce_single' ) ), esc_html__( 'Awaiting product image', 'woocommerce' ) );
							$html .= '</div>';
						}

					echo apply_filters( 'woocommerce_single_product_image_thumbnail_html', $html, $post_thumbnail_id );
						do_action( 'woocommerce_product_thumbnails' );
						?>
					</figure>
					
				</div>
			</div>
		</div>
		<div class="mobile__image">
			<?php
			global $post, $product;
			$product_id = wc_get_product($post->ID);
			$product = new WC_product($product_id);
			$attachment_ids = $product->get_gallery_image_ids();
			$image_id  = $product->get_image_id();
			$featured = wp_get_attachment_image_url( $image_id, 'small' );
			$mobile_image = '<li class="mob_thumb_item">
				<img src="'.$featured.'" width="100" height="100">
				</li>';
			foreach( $attachment_ids as $attachment_id ) {
				// Display the image URL
				$Original_image_url = wp_get_attachment_url( $attachment_id );
				$mobile_image .= '<li class="mob_thumb_item">
				<img src="'.$Original_image_url.'" width="100" height="100">
				</li>';
			}?>
			<ul class="mob_thumb flex">
				<?php echo $mobile_image; ?>
			</ul>
			
		</div> 
		<div class="product-left-bottom-block">
			<?php 
			$postId = get_field('article_1');
			$postId2 = get_field('article_2');
			$postTitle = get_post( $postId )->post_title;
			$postTitle2 = get_post( $postId2 )->post_title;
			$postLink = get_permalink( $postId );
			$postLink2 = get_permalink( $postId2 );
			$postDate = get_the_time('d/m/Y', $postId);
			$postDate2 = get_the_time('d/m/Y', $postId2);
			$postImage = wp_get_attachment_url( get_post_thumbnail_id($postId));
			$postImage2 = wp_get_attachment_url( get_post_thumbnail_id($postId2));
			$excerpt = get_the_excerpt($postId);
			$excerpt2 = get_the_excerpt($postId2);
			?>
			<a href="<?php echo $postLink; ?>" class="plbb-block" target="_blank">
				<div class="plbb-block-left">
					<img src="<?php echo $postImage; ?>" alt="">
				</div>        
				<div class="plbb-block-right">
					<h3><?php echo $postTitle; ?></h3>
					<span><?php echo $postDate; ?></span>
					<p><?php echo $excerpt; ?></p>
					<span class="heart-icon">
						<img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/heart.png" alt="">
					</span>
				</div>        
			</a>
			<a href="<?php echo $postLink2; ?>" class="plbb-block">
				<div class="plbb-block-left">
					<img src="<?php echo $postImage2; ?>" alt="">
				</div>        
				<div class="plbb-block-right">
					<h3><?php echo $postTitle2; ?></h3>
					<span><?php echo $postDate2; ?></span>
					<p><?php echo $excerpt2; ?></p>
					<span class="heart-icon">
						<img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/heart.png" alt="">
					</span>
				</div>        
			</a>
		</div>
	</div>
	<div class="w-1/2">
		<div class="product-info-detail">
			<div class="single-product-title-logo flex items-start gap-7 justify-between">
				<?php the_title( '<h2 class="black-24 font-bold font-proxima text-3xl">', '</h2>' ); ?>
				<span>
					<?php echo do_shortcode('[[product_brand width="100" class="w-28 h-auto"]]'); ?>
				</span>
			</div>
			<div class="single-product-price-social flex justify-between items-center mt-3">
				<div class="single-product-price flex gap-4 items-end">
					<span class="sp-compare-price font-proxima line-through title-color font-light text-xl">
						<?php echo $product->get_sale_price(); ?>
					</span>
					<span class="sp-compare-price font-proxima text-black font-normal text-2xl">
						<?php echo $product->get_price_html(); ?>
					</span>
				</div>
				<div class="single-product-social flex gap-4">
					<a href="https://www.facebook.com/sharer?u=<?php the_permalink();?>;&amp;t=<?php the_title(); ?>" target="_blank" class="social-link">
						<img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/facebook-icon.png">
					</a>
					<a href="https://instagram.com/send?text=<?php the_permalink(); ?>" target="_blank" class="social-link">
						<img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/instagram-icon.png">
					</a>
					<a href="https://wa.me/send?phone=8544213887&text=<?php the_permalink();?>" target="_blank" class="social-link">
						<img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/whats-app-icon.png">
					</a>
					<a href="http://twitter.com/intent/tweet?text=Currently reading <?php the_title(); ?>&amp;url=<?php the_permalink(); ?>" target="_blank" class="social-link">
						<img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/twiter-icon.png">
					</a>
				</div>
			</div>
			<div class="dynamic_rating single-product-review-count my-3">
				<?php echo do_shortcode('[get_average_rating]'); ?>
			</div>
			<div class="single-product-information">
				<?php echo $product->get_short_description(); ?>
				<p class="black-24 font-normal text-base font-proxima py-1 flex items-center gap-4">
					<img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/truck.png" class="w-12"> 
					Nu besteld, woensdag bezorgd
				</p>
				<p class="black-24 font-normal text-base font-proxima flex items-center gap-4"><span>Delivery ETA:</span> <?php echo delivery_eta(); ?></p>
			</div>

			<div class="sp-addtocart-qty items-center mt-4 mb-8">
				<form class="cart flex gap-4" action="" method="post" enctype="multipart/form-data">
					<div class="quantity buttons_added">
						<input type="button" value="-" class="minus btnqty">
						<input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode="">
						<input type="button" value="+" class="plus btnqty">
					</div>
					<button type="submit" name="add-to-cart" value="<?php echo $product->get_id(); ?>" class="sp-addtocart w-full bg-orange text-center text-white font-bold text-base p-2 font-proxima shadow shadow-gray-200 rounded-3xl hover:bg-black single_add_to_cart_button  alt">Add to cart</button>
				</form>
			</div>
			<div class="offerte-block flex gap-7 px-8 py-4 items-end justify-between relative">
				<span>
					<h4 class="black-24 font-proxima text-xl font-bold">Grote afname</h4>
					<p class="black-24 font-proxima text-xl font-normal">Meer dan 10 stuks nodig?</p>
				</span>
				<a href="#" class="rounded-md bg-black font-proxima font-normal py-3 px-10 text-base text-white">
					Offerte aan
				</a>
			</div>
			<div class="payment-icon mt-5 inline-block">
				<img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/payment-icon.png" alt="">
			</div>
		</div>
	</div>                
			</div>
		</div>
	</div>
  <div class="real-img-section">
		<div class="container mx-auto">
			<div class="grid row-auto">
				<div class="grid grid-cols-2 gap-4">
					
				</div>
		    </div>
		</div>
  </div>
  <div class="home-section-7 section-boder-hide">
		<div class="container mx-auto">
			<div class="grid grid-cols-4 grid-flow-row gap-8">
			   <div class="hs7-block flex items-center gap-6">
				 <img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/box.png" alt="" class="h-11 w-auto">   
				 <span>
					<h3 class="text-lg font-normal text-black">Gratis verzending</h3>
					<p class="text-sm font-normal title-color">Bij bestellingen hoger dan €100</p>
				 </span>
			   </div>

			   <div class="hs7-block flex items-center gap-6">
				 <img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/return.png" alt="" class="h-11 w-auto">   
				 <span>
					<h3 class="text-lg font-normal text-black">30 dagen retourrecht</h3>
					<p class="text-sm font-normal title-color">Of 40, wij zijn niet zo moeilijk.</p>
				 </span>
			   </div>

			   <div class="hs7-block flex items-center gap-6">
				 <img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/bubble-chat.png" alt="" class="h-11 w-auto">   
				 <span>
					<h3 class="text-lg font-normal text-black">Vragen?</h3>
					<p class="text-sm font-normal title-color"> <a href="https://eancodewebshop.nl/contact/" class="link-para"> Wij helpen je graag! </a> </p>
				 </span>
			   </div>

               <div class="hs7-block flex items-center gap-6">
				 <img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/credit-card.png" alt="" class="h-11 w-auto">   
				 <span>
					<h3 class="text-lg font-normal text-black">Fysieke showroom</h3>
					<p class="text-sm font-normal title-color"> Kom op afspraak langs in Soest.</p>
				 </span>
			   </div>
			</div>
		</div>
	</div>
	<div class="product-detail-tabs py-16" id="reviews">
        <div class="container mx-auto">
            <div class="tab">
                <button class="tablinks active" onclick="openCity(event, 'tab-1')">DESCRIPTION</button>
                <button class="tablinks" onclick="openCity(event, 'tab-2')">PRODUCT DETAILS</button>
                <button class="tablinks" onclick="openCity(event, 'tab-3')">
					REVIEWS (<?php echo $product->get_review_count(); ?>)
				</button>
            </div>
            <div id="tab-1" class="tabcontent" style="display: block;">
                <div class="pdt-block flex gap-8 py-12 items-center">
                    <div class="w-1/2">
                        <div class="pdt-description pr-16">
                            <p><?php echo $product->get_description(); ?></p>
                        </div>
                    </div>
                    <div class="w-1/2">
						<?php 
						global $product;
						$productId = get_field('product_categories');
						$url = '';
						foreach($productId as $pid){
							$product   = wc_get_product( $pid );
							$image_id  = $product->get_image_id();
							$image_url = wp_get_attachment_image_url( $image_id, 'small' );
							$url .= '<div>
                                <a href="#" class="home-products-block rounded-2xl shadow shadow-gray-300 inline-block w-full">
                                    <div class="home-product-image rounded-2xl p-5 shadow shadow-gray-300 relative">
                                        <img src="'.$image_url.'" alt="" width="200" height="200">
                                    </div>
                                    <div class="home-product-detail p-5">
                                        <h3 class="text-black text-center font-normal text-base ">
										'.$product->get_title().'
										</h3>
                                    </div>
                                </a>
                            </div>';
							
						}
						?>
                        <div class="pdt-right-slider">
							<?php echo $url; ?>
                        </div>
                    </div>
                </div>
            </div>
			<div id="tab-2" class="tabcontent" style="display: none;">
				<?php echo get_field('product_details') ?>
            </div>
			<div id="tab-3" class="tabcontent" style="display: none;">
				<div id="reviews" class="woocommerce-Reviews">
				<?php
				$reviews_per_page = 10;
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				$offset = ($paged - 1) * $reviews_per_page;	
				$args = array(
					'status' => 'approve',
					'post_id' => get_queried_object_id(),
					'type' => 'review',
					'number' => $reviews_per_page,
					'offset' => $offset
				);
				// The Query
				$comments_query = new WP_Comment_Query;
				$comments = $comments_query->query( $args );
				// Comment Loop
				if ( $comments ) {
					echo "<ul>";
         
					foreach ( $comments as $comment ): ?>
					<?php if ( $comment->comment_approved == '0' ) : ?>
					<p class="meta waiting-approval-info">
						<em><?php _e( 'Thanks, your review is awaiting approval', 'woocommerce' ); ?></em>
					</p>
					<?php endif;  ?>
					<li itemprop="reviews" itemscope itemtype="http://schema.org/Review" <?php comment_class(); ?> id="li-review-<?php echo $comment->comment_ID; ?>">
						<div id="review-<?php echo $comment->comment_ID; ?>" class="review_container flex gap-8">
							<div class="review-avatar">
								<?php echo get_avatar( $comment->comment_author_email, $size = '50' ); ?>
							</div>
							<div class="review-author">
								<div class="review-author-name font-bold" itemprop="author">
									<?php echo $comment->comment_author; ?>
								</div>
								<div class='star-rating-container'>
									<div itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating" class="star-rating" title="<?php echo esc_attr( get_comment_meta( $comment->comment_ID, 'rating', true ) ); ?>">
										<span style="width:<?php echo get_comment_meta( $comment->comment_ID, 'rating', true )*20; ?>%">
											<span itemprop="ratingValue">
												<?php echo get_comment_meta( $comment->comment_ID, 'rating', true ); ?>
											</span> <?php _e('out of 5', 'woocommerce'); ?>
										</span>
										<?php
											$timestamp = strtotime( $comment->comment_date ); 
											$date = date('F d, Y', $timestamp);
										?>
									</div>
									<div class="review-text pt-4">
										<div itemprop="description" class="description text-lg">
											<?php echo $comment->comment_content; ?>
										</div>
									</div>
									<div class="review-date text-xs">
										<time itemprop="datePublished" datetime="<?php echo $comment->comment_date; ?>">
											<?php echo $date; ?>
										</time>
									</div>
								</div>
							</div>	
						</div>
					</li>
					<?php 
					endforeach;
					echo "</ul>";
					//Pagination output
					echo "<div class='navigation'>";
					$all_approved_product_review_count = get_comments(array(
						'status'   => 'approve',
						'type' => 'review',
						'count' => true
					));
					if( is_float($all_approved_product_review_count / $reviews_per_page) ){
						$additional = 1;
					}else{
						$additional = 0;
					}
					$max_num_pages = intval( $all_approved_product_review_count / $reviews_per_page ) + $additional;  
					$current_page = max(1, get_query_var('paged'));
		
					echo paginate_links(array(
						'total' => $max_num_pages
					));
					echo "</div>";
				}
				
				if(get_option('woocommerce_review_rating_verification_required') === 'no' || wc_customer_bought_product( '', get_current_user_id(), $product->get_id())) : 
					?>
					<div id="review_form_wrapper">
						<div id="review_form">
							<?php
							$commenter    = wp_get_current_commenter();
							if(!$comments){
								$comment_form = array(
									'title_reply'         => have_comments() ? esc_html__( 'Add a review', 'woocommerce' ) : sprintf( esc_html__( 'Be the first to review &ldquo;%s&rdquo;', 'woocommerce' ), get_the_title() ),
									'title_reply_to'      => esc_html__( 'Leave a Reply to %s', 'woocommerce' ),
									'title_reply_before'  => '<span id="reply-title" class="comment-reply-title">',
									'title_reply_after'   => '</span>',
									'comment_notes_after' => '',
									'label_submit'        => esc_html__( 'Submit', 'woocommerce' ),
									'logged_in_as'        => '',
									'comment_field'       => '',
								);
							}
							$name_email_required = (bool) get_option( 'require_name_email', 1 );
							$fields              = array(
								'author' => array(
									'label'    => __( 'Name', 'woocommerce' ),
									'type'     => 'text',
									'value'    => $commenter['comment_author'],
									'required' => $name_email_required,
								),
								'email'  => array(
									'label'    => __( 'Email', 'woocommerce' ),
									'type'     => 'email',
									'value'    => $commenter['comment_author_email'],
									'required' => $name_email_required,
								),
							);
							$comment_form['fields'] = array();
							foreach ( $fields as $key => $field ) {
								$field_html  = '<p class="comment-form-' . esc_attr( $key ) . '">';
								$field_html .= '<label for="' . esc_attr( $key ) . '">' . esc_html( $field['label'] );

								if ( $field['required'] ) {
									$field_html .= '&nbsp;<span class="required">*</span>';
								}
								$field_html .= '</label>
								<input id="'.esc_attr($key).'" name="'.esc_attr($key).'" type="'.esc_attr($field['type']). '" value="'.esc_attr($field['value']).'" size="30" '.( $field['required'] ? 'required' : '' ) .' />
								</p>';

								$comment_form['fields'][ $key ] = $field_html;
							}

							$account_page_url = wc_get_page_permalink( 'myaccount' );
							if ( $account_page_url ) {
								$comment_form['must_log_in'] = '<p class="must-log-in">
								' . sprintf(esc_html__('You must be %1$slogged in%2$s to post a review.', 'woocommerce' ), 
											'<a href="' . esc_url( $account_page_url ) . '">', '</a>' ) .'</p>';
							}
							if ( wc_review_ratings_enabled() ) {
								$comment_form['comment_field'] = '<div class="comment-form-rating">
								<label for="rating">
								' . esc_html__( 'Your rating', 'woocommerce' ) . ( wc_review_ratings_required() ? '&nbsp;
								<span class="required">*</span>' : '' ) . '</label>
								<select name="rating" id="rating" required>
								<option value="">' . esc_html__( 'Rate&hellip;', 'woocommerce' ) . '</option>
								<option value="5">' . esc_html__( 'Perfect', 'woocommerce' ) . '</option>
								<option value="4">' . esc_html__( 'Good', 'woocommerce' ) . '</option>
								<option value="3">' . esc_html__( 'Average', 'woocommerce' ) . '</option>
								<option value="2">' . esc_html__( 'Not that bad', 'woocommerce' ) . '</option>
								<option value="1">' . esc_html__( 'Very poor', 'woocommerce' ) . '</option>
								</select>
								</div>';
							}
							$comment_form['comment_field'] .= '<p class="comment-form-comment">
							<label for="comment">' . esc_html__( 'Your review', 'woocommerce' ) . '&nbsp;
							<span class="required">*</span>
							</label>
							<textarea id="comment" name="comment" cols="45" rows="8" required></textarea>
							</p>';
							comment_form( apply_filters( 'woocommerce_product_review_comment_form_args', $comment_form ));
							?>
						</div>
					</div>
					<?php else : ?>
					<p class="woocommerce-verification-required">
						<?php esc_html_e( 'Only logged in customers who have purchased this product may leave a review.', 'woocommerce' ); ?>
					</p>
					<?php endif; ?>
					<div class="clear"></div>
				</div>
			</div>
		</div>
    </div>
<?php if( get_field('youtube_video') != "" ): ?>
<div class="product-video-section w-full inline-block py-16" id="video">
        <div class="container mx-auto">
            <div class="product-video-inner w-full inline-block relative">
            <div class="product-video-block w-full inline-block rounded-3xl overflow-hidden relative">
            <iframe width="560" height="315" src="<?php echo get_field('youtube_video')?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            </div>
        </div>
    </div>
	<?php endif; ?>
			 
	<?php  $other_colors = get_field('other_colors'); 
	   if ($other_colors):
	?>
	<div class="other-product-section p-4 mt-5 mb-5" >
        <div class="container mx-auto">
            <div class="section-header text-center mb-16">
				<h2 class="text-black text-5xl uppercase font-bold">other <span class="text-orange">colors</span></h2>
			</div>
            <div class="grid grid-cols-4 grid-flow-row gap-8 slide-other">
            <? 
			  $args = array(
				'post_type' => 'product',
				'posts_per_page' => 5,
				'post__in'=> explode("," ,$other_colors)
				);
			   $post_query = new WP_Query( $args );
			   if ( $post_query->have_posts() ) {
				while ( $post_query->have_posts() ) {
				$post_query->the_post();
					?> 
				   <div class="p-5">
                    <a href="#" class="home-products-block rounded-2xl shadow shadow-gray-300 inline-block w-full">
                        <div class="home-product-image rounded-2xl p-5 shadow shadow-gray-300 relative">
							<?php  the_post_thumbnail(); ?>
                        </div>
                        <div class="home-product-detail p-5">
                            <h3 class="text-black text-center font-normal text-base ">
								<?php echo the_title(); ?>
							</h3> 
                        </div>
                    </a>
                   </div>
				   <?php
					}
					wp_reset_postdata();
				} 
			   ?>
            </div>
        </div>
    </div>
	<?php 
   endif;
   ?>
	<div class="grid row-auto">
	<div class="grid grid-cols-2 gap-4">
	<?php  $related_products = get_field('matching_products'); 
	   if ($related_products):
	?>
	<div class="related-product-section p-4 mt-5 mb-5" >
			<div class="container mx-auto">
				<div class="section-header text-center mb-16">
					<h2 class="text-black text-5xl uppercase font-bold">related <span class="text-orange">products</span></h2>
				</div>
				<div class="grid grid-cols-4 grid-flow-row gap-8 slide-related">
				<? 
				$related_args = array(
					'post_type' => 'product',
					'posts_per_page' => 5,
					'post__in'=> explode("," ,$related_products)
					);
				$related_post_query = new WP_Query( $related_args );
				if ( $related_post_query->have_posts() ) {
					while ( $related_post_query->have_posts() ) {
					$related_post_query->the_post();
						?> 
					<div class="p-5">
						<a href="#" class="home-products-block rounded-2xl shadow shadow-gray-300 inline-block w-full">
							<div class="home-product-image rounded-2xl p-5 shadow shadow-gray-300 relative">
								<?php  the_post_thumbnail(); ?>
							</div>
							<div class="home-product-detail p-5">
								<h3 class="text-black text-center font-normal text-base ">
									<?php echo the_title(); ?>
								</h3> 
							</div>
						</a>
					</div>
					<?php
						}
						wp_reset_postdata();
					} 
				?>
				</div>
			</div>
	</div>
	<?php endif; ?>
    
	<?php  $rozes_products = get_field('rozes'); 
	   if ($rozes_products):
	?>
	<div class="rozes-product-section p-4 mt-5 mb-5" >
			<div class="container mx-auto">
				<div class="section-header text-center mb-16">
					<h2 class="text-black text-5xl uppercase font-bold">rozes <span class="text-orange">products</span></h2>
				</div>
				<div class="grid grid-cols-4 grid-flow-row gap-8 slide-rozes">
				<? 
				$rozes_args = array(
					'post_type' => 'product',
					'posts_per_page' => 5,
					'post__in'=> explode("," ,$rozes_products)
					);
				$rozes_post_query = new WP_Query( $rozes_args );
				if ( $rozes_post_query->have_posts() ) {
					while ( $rozes_post_query->have_posts() ) {
					$rozes_post_query->the_post();
						?> 
					<div class="p-5">
						<a href="#" class="home-products-block rounded-2xl shadow shadow-gray-300 inline-block w-full">
							<div class="home-product-image rounded-2xl p-5 shadow shadow-gray-300 relative">
								<?php  the_post_thumbnail(); ?>
							</div>
							<div class="home-product-detail p-5">
								<h3 class="text-black text-center font-normal text-base ">
									<?php echo the_title(); ?>
								</h3> 
							</div>
						</a>
					</div>
					<?php
						}
						wp_reset_postdata();
					} 
				?>
				</div>
			</div>
	</div>
	<?php  endif; ?>
	</div>
    </div>
	
	<div class="grid row-auto">
	<div class="grid grid-cols-2 gap-4">
	<?php  $keyrozes_products = get_field('keyrozes'); 
	   if ($keyrozes_products):
	?>
	<div class="keyrozes-product-section p-4 mt-5 mb-5" >
			<div class="container mx-auto">
				<div class="section-header text-center mb-16">
					<h2 class="text-black text-5xl uppercase font-bold">keyrozes <span class="text-orange">products</span></h2>
				</div>
				<div class="grid grid-cols-4 grid-flow-row gap-8 slide-keyrozes">
				<? 
				$keyrozes_args = array(
					'post_type' => 'product',
					'posts_per_page' => 5,
					'post__in'=> explode("," ,$keyrozes_products)
					);
				$keyrozes_post_query = new WP_Query( $keyrozes_args );
				if ( $keyrozes_post_query->have_posts() ) {
					while ( $keyrozes_post_query->have_posts() ) {
					$keyrozes_post_query->the_post();
						?> 
					<div class="p-5">
						<a href="#" class="home-products-block rounded-2xl shadow shadow-gray-300 inline-block w-full">
							<div class="home-product-image rounded-2xl p-5 shadow shadow-gray-300 relative">
								<?php  the_post_thumbnail(); ?>
							</div>
							<div class="home-product-detail p-5">
								<h3 class="text-black text-center font-normal text-base ">
									<?php echo the_title(); ?>
								</h3> 
							</div>
						</a>
					</div>
					<?php
						}
						wp_reset_postdata();
					} 
				?>
				</div>
			</div>
	</div>
	<?php endif; ?>

	<?php  $cilinderrozes_products = get_field('cilinderrozes'); 
	   if ($cilinderrozes_products) :
	?>
	<div class="cilinderrozes-product-section p-4 mt-5 mb-5" >
			<div class="container mx-auto">
				<div class="section-header text-center mb-16">
					<h2 class="text-black text-5xl uppercase font-bold">cilinderrozes <span class="text-orange">products</span></h2>
				</div>
				<div class="grid grid-cols-4 grid-flow-row gap-8 slide-cilinderrozes">
				<? 
				$cilinderrozes_args = array(
					'post_type' => 'product',
					'posts_per_page' => 5,
					'post__in'=> explode("," ,$cilinderrozes_products)
					);
				$cilinderrozes_post_query = new WP_Query( $cilinderrozes_args );
				if ( $cilinderrozes_post_query->have_posts() ) {
					while ( $cilinderrozes_post_query->have_posts() ) {
					$cilinderrozes_post_query->the_post();
						?> 
					<div class="p-5">
						<a href="#" class="home-products-block rounded-2xl shadow shadow-gray-300 inline-block w-full">
							<div class="home-product-image rounded-2xl p-5 shadow shadow-gray-300 relative">
								<?php  the_post_thumbnail(); ?>
							</div>
							<div class="home-product-detail p-5">
								<h3 class="text-black text-center font-normal text-base ">
									<?php echo the_title(); ?>
								</h3> 
							</div>
						</a>
					</div>
					<?php
						}
						wp_reset_postdata();
					} 
				?>
				</div>
			</div>
	</div>
	<?php endif; ?>
	</div>
	</div>

    <div class="product-specification-section w-full inline-block py-16" id="specification">
         <div class="container mx-auto">
            <div class="section-header text-center mb-16">
				<h2 class="text-black text-5xl uppercase font-bold">Our <span class="text-orange">Specifications</span></h2>
			</div>
            <div class="flex gap-8">
                <div class="w-1/2">
                    <div class="product-specification-detail">
						<?php
							global $post, $product;
							if (is_a($product, 'WC_Product')) {
								$product = wc_get_product($post->ID);
							}
								 $product_attributes = $product->get_attributes();
								 // print_r( $product_attributes );
								 $row = '';
								 foreach($product_attributes as $pa){
									 $row .= '<tr>
												<td>'.$pa->get_name().'</td>
												<td>'.$pa[value].'</td>
											</tr>';
								 }


						?>
                        <table>
                            <tr>
                                <td>Article number</td>
                                <td><?php echo get_field('article_number')?></td>
                            </tr>
							<?php echo $row; ?>
                        </table>    
                    </div>
                </div>
                <div class="w-1/2">
                    <div class="product-specification-image">
						<?php 
							global $post, $product;
							if( is_a($product, 'WC_Product'))
								$product = wc_get_product($post->ID);
								 // Get the array of the gallery attachement IDs
								 $attachment_ids = $product->get_gallery_image_ids();
								 if( sizeof($attachment_ids) > 0 ){
									 $first_attachment_id = reset($attachment_ids);
									 $link = wp_get_attachment_image_src( $first_attachment_id, 'full' )[0];
								 }
						?>
						<img src="<?php echo $link; ?>" alt="">
                    </div>
                </div>
            </div>
          </div>
    </div>
    </div>
<script>
	$('.mob_thumb').slick({
		infinite: true,
		slidesToShow: 4,
		slidesToScroll: 1,
		arrows: true
	});
</script>
<style>
	.product-template-default div#comments {
		display: none;
	}
	.woocommerce-Reviews ul li {
		list-style: none !important;
		padding: 15px 15px;
	}
	.review-avatar img {
		border-radius: 50px;
	}
	.single-product textarea#comment {
		border: 1px solid #ddd;
	}
</style>