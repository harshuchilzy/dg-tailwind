<?php /* Template Name: Blog Page 
       * Template Post Type: post
       */
get_header(); ?>
<div class="blog-page-main w-full inline-block pt-16">
	<div class="container mx-auto">
		<div class="flex gap-12">
			<div class="w-2/3">

				<!-- Blog Section 1 Start -->
				<div class="blog-section-1 bg-orange rounded-3xl shadow shadow-gray-200 pl-12 pt-7">
					<div class="flex gap-8">
						<div class="w-3/4">
							<div class="bs1-detail w-full inline-block py-8">
								<h2 class="text-white font-proxima font-bold text-4xl mb-4">
									<?php echo get_field('blog_post_title')?>
								</h2>
								<h4 class="text-white font-proxima font-bold text-xl mb-4">
									<?php echo get_field('blog_post_sub_title')?>
								</h4> 
								<p class="text-white font-proxima font-normal text-lg">
									<?php echo get_field('content_1')?>
								</p>
							</div>
						</div>
						<div class="w-1/4">
							<div class="bs1-image">
								<img src="<?php echo get_field('image_1') ?>" alt="" width="394" height="666">
							</div>
						</div>
					</div>
				</div>
				<!-- Blog Section 1 End -->

				<!-- Blog Section 2 Start -->
				<div class="blog-section-2 w-full inline-block py-16" id="first">
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
						<div class="w-2/5">
							<div class="bs2-image w-full inline-block relative pr-4 pb-4">
								<img src="<?php echo get_field('image_right') ?>" alt="" width="381" height="425" class="rounded-3xl"> 
							</div>
						</div>
					</div>
				</div>
				<!-- Blog Section 2 End -->

				<!-- Blog Section 3 Start -->
				<div class="blog-section-3 w-full inline-block pb-16" id="second">
					<div class="flex gap-8">
						<div class="w-2/5">
							<div class="bs2-image w-full inline-block relative pr-4 pb-4">
								<img src="<?php echo get_field('image_left') ?>" alt="" width="381" height="425" class="rounded-3xl"> 
							</div>
						</div>
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
				<!-- Blog Section 3 End -->

				<!-- Blog Section 4 Start -->
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
						<div class="w-2/5">
							<div class="bd-4-image w-full inline-block">
								<img src="<?php echo get_field('image') ?>" alt="" width="277" height="295"> 
							</div>
						</div>
					</div>
				</div>
				<!-- Blog Section 4 End -->

				<!-- Blog Video Section Start -->
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
				<!-- Blog Video Section End -->
				
				<!-- Blog Post Comment Start -->
				<?php
					$comments = get_comments(array(	
						'post_id' => $post->ID,
						'number' => '2' 
					));
// 					print_r($comments);
						$listComments = '';			 
					foreach($comments as $comment){
						$listComments .= '<div class="w-2/5">
							<div class="author__avatar">
								<a href="'.$comment->comment_author_url.'" class="flex">
									<span class="authot__image_avtar">
										<img src="'.$comment->comment_author_avtar.'" class=".rounded">
									</span>
									<span class="author__name">'.$comment->comment_author.'</span
								</a>
								<p class="user-nicename">('.$comment->comment_author_email.')</p>
								
							</div>
							<div class="comment__content">
							<p>'.$comment->comment_content.'</p>
							</div>
						</div>';
					}
				?>
				<?php echo $listComments; ?>
				<?php get_template_part( 'comments' ); ?>
				<!-- Blog Post Comment End -->
				
				<!-- Blog Section 5 Start -->
<!-- 				<?php $author_id=$post->post_author; ?>
				<img src="<?php the_author_meta( 'avatar' , $author_id ); ?> " width="140" height="140" class="avatar" alt="<?php echo the_author_meta( 'display_name' , $author_id ); ?>" />
				<?php the_author_meta( 'user_nicename' , $author_id ); ?>  -->
				<div class="blog-section-5 w-full inline-block pt-10" style="background: url(<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/bs5.png);">
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
				<!-- Blog Section 5 End -->

			</div>

			<!-- Blog Section Sidebar Start -->
			<div class="w-2/6">
				<div class="blog-sidebar w-full inline-block shadow shadow-gray-200 px-7 py-4 bg-white rounded-2xl">
					<h2 class="font-proxima uppercase black-24 text-2xl text-center font-bold mb-9">
						Tijd besparen? Ga direct naar het betreffende onderdeel
					</h2>
					<div class="sidebar-accordion">
						
						<div class="sidebar-accordion-block">
							<a href="#first">
								<button class="accordion"><?php echo get_field('blog_post_sub_heading') ?></button>
							</a>
							<a href="#second">
								<button class="accordion"><?php echo get_field('blog_post_sub_heading_2') ?></button>
							</a>
						</div> 
						
					</div>
					<div class="blog-sidebar-btn w-full inline-block text-center mt-5">
						<a href="#" class="inline-block font-proxima bg-orange text-lg font-bold text-white px-6 py-3 rounded-3xl shadow shadow-gray-200 hover:bg-black">Beldrukker</a>
					</div>
				</div>
			</div>

			<!-- Blog Section Sidebar End -->
		</div>
	</div>
</div>

<!-- <script>
	var acc = document.getElementsByClassName("accordion");
	var i;
	for (i = 0; i < acc.length; i++) {
		acc[i].addEventListener("click", function() {
			this.classList.toggle("active");
			var panel = this.nextElementSibling;
			if (panel.style.display === "block") {
				panel.style.display = "none";
			} else {
				panel.style.display = "block";
			}
		});
	}
</script> -->
<?php
get_footer(); ?>