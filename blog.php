<?php /* Template Name: Blog Page 
       * Template Post Type: post
       */
get_header(); ?>
<div class="blog-page-main w-full inline-block pt-16">
	<div class="container mx-auto">
		
		<div class="flex gap-12">
			<div class="w-2/3">

				<!-- Blog Section 1 Start -->
				<?php if( get_field('blog_post_title') != "" ): ?>
				<div class="blog-section-1 bg-orange rounded-3xl shadow shadow-gray-200 pl-12 pt-7">
					<div class="flex gap-8">
						<div class="w-3/4">
							<div class="bs1-detail w-full inline-block py-8">
								<h2 class="text-white font-proxima font-bold text-4xl mb-4">
									<?php echo the_field('blog_post_title')?>
								</h2>
								<h4 class="text-white font-proxima font-bold text-xl mb-4">
									<?php echo get_field('blog_post_sub_title')?>
								</h4> 
								<p class="text-white font-proxima font-normal text-lg">
									<?php echo get_field('content_1')?>
								</p>
							</div>
						</div>
						<?php if(get_field('image_1')): ?>
						<div class="w-1/4">
							<div class="bs1-image">
								<img src="<?php echo get_field('image_1'); ?>" alt="" width="394" height="666">
							</div>
						</div>
						<?php endif; ?>
					</div>
				</div>
				<?php endif; ?>
				<!-- Blog Section 1 End -->

				<!-- Blog Section 2 Start -->
				<?php if( get_field('blog_post_sub_heading') != "" ): ?>
				<div class="blog-section-2 w-full inline-block pt-16" id="first">
					<div class="flex gap-8">
						<div class="w-3/5">
							<div class="bs2-detail w-full inline-block pr-5">
								<h3 class="text-black uppercase text-3xl font-bold font-proxima mb-16">
									<?php echo get_field('blog_post_sub_heading') ?> 
								</h3>
								<p class="black-24 text-lg font-normal font-proxima">
									<?php echo get_field('blog_post_sub_heading_content') ?> 
								</p>
							</div>
						</div>
						<?php if(get_field('image_right')): ?>
						<div class="w-2/5">
							<div class="bs2-image w-full inline-block relative pr-4 pb-4">
								<img src="<?php echo get_field('image_right') ?>" alt="" width="381" height="425" class="rounded-3xl"> 
							</div>
						</div>
						<?php endif; ?>
					</div>
				</div>
				<?php endif; ?>
				<!-- Blog Section 2 End -->

				<!-- Blog Section 3 Start -->
				<?php if( get_field('image_left') != "" ): ?>
				<div class="blog-section-3 w-full inline-block py-16" id="second">
					<div class="flex gap-8">
						<?php if(get_field('image_left')): ?>
						<div class="w-2/5">
							<div class="bs2-image w-full inline-block relative pr-4 pb-4">
								<img src="<?php echo get_field('image_left') ?>" alt="" width="381" height="425" class="rounded-3xl"> 
							</div>
						</div>
						<?php endif; ?>
						<div class="w-3/5">
							<div class="bs2-detail w-full inline-block pl-5">
								<h3 class="text-black uppercase text-3xl font-bold font-proxima mb-16">
									<?php echo get_field('blog_post_sub_heading_2') ?>
								</h3>
								<p class="black-24 text-lg font-normal font-proxima">
									<?php echo get_field('blog_post_sub_heading_content_2') ?>
								</p>
							</div>
						</div>
					</div>
				</div>
				<?php endif; ?>
				<!-- Blog Section 3 End -->

				<!-- Blog Section 4 Start -->
				<?php if( get_field('section_4_upper_heading') ): ?>
				<div class="blog-section-4 w-full inline-block bg-orange rounded-3xl shadow shadow-gray-200 my-16">
					<div class="flex gap-8">
						<div class="w-3/5">
							<div class="bs-4-detail w-full inline-block pl-10 py-7">
								<h4 class="text-white text-base font-bold font-proxima">
									<?php echo get_field('section_4_upper_heading') ?>
								</h4>
								<h3 class="text-white text-2xl font-bold font-proxima">
									<?php echo get_field('section_4_lower_heading') ?>
								</h3>
								<p class="text-white text-base font-normal font-proxima">
									<span>&#9733;</span> <?php echo get_field('list_1') ?></p>
								<p class="text-white text-base font-normal font-proxima">
									<span>&#9733;</span> <?php echo get_field('list_2') ?></p>
								<p class="text-white text-base font-normal font-proxima">
									<span>&#9733;</span> <?php echo get_field('list_3') ?></p>
								<p class="text-white text-base font-normal font-proxima">
									<span>&#9733;</span> <?php echo get_field('list_4') ?></p>
								<p class="text-white text-base font-normal font-proxima">
									<span>&#9733;</span> <?php echo get_field('list_5') ?></p>
								<p class="text-white text-base font-normal font-proxima">
									<?php echo get_field('list_6') ?>
								</p>
								<a href="<?php echo get_field('button_link') ?>" class="text-orange bg-white inline-block my-4 px-6 py-2 font-bold text-base font-proxima rounded-3xl shadow shadow-gray-200 hover:bg-black">
									Boek een afspraak in onze showroom
								</a>
								<div class="bs-4-bottom flex gap-14 items-center">
									<a href="tel:0578760509" class="text-white text-base font-normal flex items-center gap-1">
										<img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/phone-call.png" alt="" width="20" height="20" > 
										<?php echo get_field('phone_number') ?>
									</a>
									<a href="<?php echo get_field('website_url') ?>" class="text-white text-base font-normal flex items-center gap-1">
										<img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/link.png" alt="" width="20" height="20" >
										www.deurbeslaggigant.nl
									</a>
								</div>
							</div>
						</div>
						<?php if( get_field('image') ): ?>
						<div class="w-2/5">
							<div class="bd-4-image w-full inline-block">
								<img src="<?php echo get_field('image') ?>" alt="" width="277" height="295"> 
							</div>
						</div>
						<?php endif; ?>
					</div>
				</div>
				<?php endif; ?>
				<!-- Blog Section 4 End -->

				<!-- Blog Video Section Start -->
				<?php if( get_field('video_url') != "" ): ?>
				<div class="product-video-section w-full inline-block py-16">
					<div class="container mx-auto">
						<div class="blog-video-header w-full inline-block text-center mb-5">
							<h3 class="uppercase font-bold text-3xl font-proxima text-black mb-10">
								Wat is het verschil <span class="text-orange">tussen een</span> inleg en opdek
							</h3>
							<h3 class="uppercase font-bold text-3xl font-proxima text-black mb-4">
								Psssst 🤫, wil je korting?
							</h3>
							<p class="font-normal text-xl font-proxima text-black">
								Je hebt nu zoveel, geleerd over  Zonde als je
							</p>
						</div>
						<div class="product-video-inner w-full inline-block relative">
							<div class="product-video-block w-full inline-block rounded-3xl overflow-hidden relative">
								<iframe width="560" height="315" src="<?php echo get_field('video_url') ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
						</div>
					</div>
				</div>
				<?php endif; ?>
				<!-- Blog Video Section End -->
				
				<!-- Blog Post Comment Start -->
				<?php
					$comments = get_comments(array(	
						'post_id' => $post->ID,
						'number' => '3' 
					));
				?>
				
				<div class="custom_comment-section border rounded-lg p-8">
					<div class="custom_comment-top flex border-b pb-4 justify-between">
						<div class="commemt_counts">Comments (<?php echo get_post( $post->ID )->comment_count; ?>)</div>
						<div class="comments_select">
							<div class="select---box">
								<span class="dashicons dashicons-arrow-down-alt2"></span>
								<div class='div_box'>Top Comments</div>
								<div class="options hide">
									<div>Top Comments</div>
									<div>Option 2</div>
									<div>Option 3</div>
								</div>
							</div>
						</div>
					</div>
					<div class="comment-comments ">
						<?php foreach($comments as $comment){ ?>
						<div class="gap-4 flex comments comment-1 py-4 border-b">
							<div class="commentor__avtar">
								<?php echo get_avatar( $comment, 70 ) ?>
							</div>
							<div class="commentor__words">
								<div class="commentor__name font-medium">
									<?php echo $comment->comment_author; ?>
								</div>
								<div class="commentor_word">
									<?php echo $comment->comment_content; ?>
								</div>
								<div class="commentor_likes pt-10">
									<span>
										<?php echo do_shortcode('[posts_like_dislike id='.$comment->comment_ID.']'); ?>
									</span>
									<span>
									
									</span>
								</div>
							</div>
						</div>
						<?php } ?>
						<?php echo paginate_comments_links(); ?> 
					</div>
					<div class="comment__form">
						<?php get_template_part( 'comments' ); ?>
					</div>
				</div>
				<!-- Blog Post Comment End -->
				
				<!-- Blog Section 5 Start -->
				<?php if( get_field('blog_post_sub_heading') != "" ): ?>
				<div class="blog-section-5 w-full inline-block pt-10" 
					 style="background: url(<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/bs5.png);">
					<div class="bs5-inner w-full inline-block py-12" >
						<div class="w-1/2">
							<div class="bs5-detail w-full inline-block pl-9">
								<h2 class="uppercase text-black font-proxima font-bold text-4xl inline-block mb-8">
									Dat was <span class="text-orange">het dan</span>
								</h2>
								<p class=" text-black font-proxima font-normal text-2xl inline-block">
									Wij hebben je nu alles verteld over raambomen, maar het kan natuurlijk
								</p>
								<h6 class="text-black font-proxima font-bold text-base inline-block">
									bellen (0578-760509)
								</h6>
								<h6 class="text-black font-proxima font-bold text-base inline-block">
									of mailen met 
									<a href="mailto:info@deurbeslaggigant.nl" class="text-orange">
										info@deurbeslaggigant.nl
									</a>
								</h6>
							</div>
						</div>
					</div>
				</div>
				<?php endif; ?>
				<!-- Blog Section 5 End -->

			</div>

			<!-- Blog Section Sidebar Start -->
			<?php if( get_field('blog_post_sub_heading') != "" ): ?>
			<div class="w-2/6">
				<div class="blog-sidebar w-full inline-block shadow shadow-gray-200 px-7 py-4 bg-white rounded-2xl">
					<h2 class="font-proxima uppercase black-24 text-2xl text-center font-bold mb-9">
						Tijd besparen? Ga direct naar het betreffende onderdeel
					</h2>
					<div class="sidebar-accordion">
						<a href="#first">
							<div class="sidebar-accordion-block">
								<button class="accordion"><?php echo get_field('blog_post_sub_heading') ?></button>
							</div> 
						</a>
						<?php if( get_field('blog_post_sub_heading_2') != "" ): ?>
						<a href="#second">
							<div class="sidebar-accordion-block">
								<button class="accordion"><?php echo get_field('blog_post_sub_heading_2') ?></button>
							</div>
						</a>
						<?php endif; ?>
					</div>
					<div class="blog-sidebar-btn w-full inline-block text-center mt-5">
						<a href="#" class="inline-block font-proxima bg-orange text-lg font-bold text-white px-6 py-3 rounded-3xl shadow shadow-gray-200 hover:bg-black">Beldrukker</a>
					</div>
				</div>
			</div>
			<?php endif; ?>
			<!-- Blog Section Sidebar End -->
		</div>
	</div>
</div>
<style>
	.select---box {
		width: 250px;
		min-height: 40px;
		box-sizing: border-box;
		border-bottom: 1px solid #ccc;
		overflow: hidden;
	}
	.div_box {
		padding: 10px;
	}
	.selected {
		background-color: transparent;
	}
	.hide {
		display: none;
	}
	.select---box span.dashicons.dashicons-arrow-down-alt2 {
		position: absolute;
		left: auto;
		right: 40%;
		padding-top: 10px;
	}
	.select---box .options {
		width: 250px;
		background-color: white;
		position: absolute;
		border: 1px solid #ddd;
		margin-top: 0px;
		box-shadow: 0px 1px 0px 0px;
		z-index: 99;
	}
	.select---box .options div {
		transition: all 0.2s ease-out;
		padding: 10px;
	}
	.select---box .options div:hover {
		background-color: #F99E41;
	}
	.post-template h3#reply-title {
		display: none;
	}
	.post-template p.logged-in-as {
		display: none;
	}
	.post-template img.avatar.avatar-70.photo {
		border-radius: 50px;
	}
.post-template .comment-respond form#commentform {
  display: grid;
  align-items: center;
  justify-content: flex-start;
  gap: 1rem;
}
.post-template .comment-respond form#commentform p {
  display: flex;
  align-items: center;
  gap: 1rem;
}

.post-template .comment-respond form#commentform p input:not([type="checkbox"]) {
  padding: 16px 16px;
  background: transparent;
  border: 1px solid #ddd;
  border-radius: 25px;
  width: 100%;
}
.post-template .comment-respond input#submit {
  margin-left: 0;
}
.post-template .comment-respond form#commentform p input[type="submit"] {
  background: orange;
  width: auto;
}
.post-template .comment-respond form#commentform p label {
  display: flex;
}
@media screen and (max-width: 480px) {
  .post-template .comment-respond form#commentform p {
    flex-direction: column;
    align-items: flex-start;
  }
	.custom_comment-section {
    padding: 1rem;
}
}



</style>

<?php
get_footer(); ?>