<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	<style>
	
@font-face {
    font-family: 'Raleway';
    src: url('<?php echo get_site_url(); ?>/wp-content/themes/tailpress/fonts/Raleway-Black.woff2') format('woff2'),
        url('<?php echo get_site_url(); ?>/wp-content/themes/tailpress/fonts/Raleway-Black.woff') format('woff');
    font-weight: 900;
    font-style: normal;
    font-display: swap;
}

@font-face {
    font-family: 'Raleway';
    src: url('<?php echo get_site_url(); ?>/wp-content/themes/tailpress/fonts/Raleway-ExtraBold.woff2') format('woff2'),
        url('<?php echo get_site_url(); ?>/wp-content/themes/tailpress/fonts/Raleway-ExtraBold.woff') format('woff');
    font-weight: bold;
    font-style: normal;
    font-display: swap;
}

@font-face {
    font-family: 'Raleway';
    src: url('<?php echo get_site_url(); ?>/wp-content/themes/tailpress/fonts/Raleway-Bold.woff2') format('woff2'),
        url('<?php echo get_site_url(); ?>/wp-content/themes/tailpress/fonts/Raleway-Bold.woff') format('woff');
    font-weight: bold;
    font-style: normal;
    font-display: swap;
}

@font-face {
    font-family: 'Raleway';
    src: url('<?php echo get_site_url(); ?>/wp-content/themes/tailpress/fonts/Raleway-Light.woff2') format('woff2'),
        url('<?php echo get_site_url(); ?>/wp-content/themes/tailpress/fonts/Raleway-Light.woff') format('woff');
    font-weight: 300;
    font-style: normal;
    font-display: swap;
}

@font-face {
    font-family: 'Raleway';
    src: url('<?php echo get_site_url(); ?>/wp-content/themes/tailpress/fonts/Raleway-ExtraLight.woff2') format('woff2'),
        url('<?php echo get_site_url(); ?>/wp-content/themes/tailpress/fonts/Raleway-ExtraLight.woff') format('woff');
    font-weight: 200;
    font-style: normal;
    font-display: swap;
}

@font-face {
    font-family: 'Raleway';
    src: url('<?php echo get_site_url(); ?>/wp-content/themes/tailpress/fonts/Raleway-Medium.woff2') format('woff2'),
        url('<?php echo get_site_url(); ?>/wp-content/themes/tailpress/fonts/Raleway-Medium.woff') format('woff');
    font-weight: 500;
    font-style: normal;
    font-display: swap;
}

@font-face {
    font-family: 'Raleway';
    src: url('<?php echo get_site_url(); ?>/wp-content/themes/tailpress/fonts/Raleway-Thin.woff2') format('woff2'),
        url('<?php echo get_site_url(); ?>/wp-content/themes/tailpress/fonts/Raleway-Thin.woff') format('woff');
    font-weight: 100;
    font-style: normal;
    font-display: swap;
}

@font-face {
    font-family: 'Raleway';
    src: url('<?php echo get_site_url(); ?>/wp-content/themes/tailpress/fonts/Raleway-Regular.woff2') format('woff2'),
        url('<?php echo get_site_url(); ?>/wp-content/themes/tailpress/fonts/Raleway-Regular.woff') format('woff');
    font-weight: normal;
    font-style: normal;
    font-display: swap;
}

@font-face {
    font-family: 'Raleway';
    src: url('<?php echo get_site_url(); ?>/wp-content/themes/tailpress/fonts/Raleway-SemiBold.woff2') format('woff2'),
        url('<?php echo get_site_url(); ?>/wp-content/themes/tailpress/fonts/Raleway-SemiBold.woff') format('woff');
    font-weight: 600;
    font-style: normal;
    font-display: swap;
}

@font-face {
    font-family: 'Roboto';
    src: url('<?php echo get_site_url(); ?>/wp-content/themes/tailpress/fonts/Roboto-Light.woff2') format('woff2'),
        url('<?php echo get_site_url(); ?>/wp-content/themes/tailpress/fonts/Roboto-Light.woff') format('woff');
    font-weight: 300;
    font-style: normal;
    font-display: swap;
}

@font-face {
    font-family: 'Roboto';
    src: url('<?php echo get_site_url(); ?>/wp-content/themes/tailpress/fonts/Roboto-Black.woff2') format('woff2'),
        url('<?php echo get_site_url(); ?>/wp-content/themes/tailpress/fonts/Roboto-Black.woff') format('woff');
    font-weight: 900;
    font-style: normal;
    font-display: swap;
}

@font-face {
    font-family: 'Roboto';
    src: url('<?php echo get_site_url(); ?>/wp-content/themes/tailpress/fonts/Roboto-Bold.woff2') format('woff2'),
        url('<?php echo get_site_url(); ?>/wp-content/themes/tailpress/fonts/Roboto-Bold.woff') format('woff');
    font-weight: bold;
    font-style: normal;
    font-display: swap;
}

@font-face {
    font-family: 'Roboto';
    src: url('<?php echo get_site_url(); ?>/wp-content/themes/tailpress/fonts/Roboto-Medium.woff2') format('woff2'),
        url('<?php echo get_site_url(); ?>/wp-content/themes/tailpress/fonts/Roboto-Medium.woff') format('woff');
    font-weight: 500;
    font-style: normal;
    font-display: swap;
}

@font-face {
    font-family: 'Roboto';
    src: url('<?php echo get_site_url(); ?>/wp-content/themes/tailpress/fonts/Roboto-Regular.woff2') format('woff2'),
        url('<?php echo get_site_url(); ?>/wp-content/themes/tailpress/fonts/Roboto-Regular.woff') format('woff');
    font-weight: normal;
    font-style: normal;
    font-display: swap;
}

@font-face {
    font-family: 'Roboto';
    src: url('<?php echo get_site_url(); ?>/wp-content/themes/tailpress/fonts/Roboto-Thin.woff2') format('woff2'),
        url('<?php echo get_site_url(); ?>/wp-content/themes/tailpress/fonts/Roboto-Thin.woff') format('woff');
    font-weight: 100;
    font-style: normal;
    font-display: swap;
}

@font-face {
    font-family: 'Proxima Nova Rg';
    src: url('<?php echo get_site_url(); ?>/wp-content/themes/tailpress/fonts/ProximaNova-Regular.woff2') format('woff2'),
        url('<?php echo get_site_url(); ?>/wp-content/themes/tailpress/fonts/ProximaNova-Regular.woff') format('woff');
    font-weight: normal;
    font-style: normal;
    font-display: swap;
}

@font-face {
    font-family: 'Proxima Nova Rg';
    src: url('<?php echo get_site_url(); ?>/wp-content/themes/tailpress/fonts/ProximaNova-Bold.woff2') format('woff2'),
        url('<?php echo get_site_url(); ?>/wp-content/themes/tailpress/fonts/ProximaNova-Bold.woff') format('woff');
    font-weight: bold;
    font-style: normal;
    font-display: swap;
}

	</style>
	<link rel="stylesheet" type="text/css" href="	
<?php echo get_site_url(); ?>/wp-content/themes/tailpress/slick.css">
  <link rel="stylesheet" type="text/css" href="	
<?php echo get_site_url(); ?>/wp-content/themes/tailpress/slick-theme.css">
	<link rel='stylesheet'  href='	
<?php echo get_site_url(); ?>/wp-content/themes/tailpress/style.css?v=190' type='text/css' media='all' />
	<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
  <script src="	
<?php echo get_site_url(); ?>/wp-content/themes/tailpress/slick.js" type="text/javascript" charset="utf-8"></script>

  <script type="text/javascript">
    $(document).on('ready', function() {
      
      $(".banner-slider").slick({
        dots: true,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1
      });

	  $(".home-section-6-slider").slick({
        dots: true,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1
      });

	  $(".deal-of-weak-slider").slick({
        dots: true,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
		autoplay: true,
  		autoplaySpeed: 2000
      });
	  $(".pdt-right-slider").slick({
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 1,
		autoplay: true,
  		autoplaySpeed: 2000
      });
     
	  $('.featured-product-slider').slick({
      slidesToShow: 1,
  slidesToScroll: 1,
  arrows: true,
  fade: true,
  dots: false,      
  asNavFor: '.featured-product-thumbnail'
     });
    
     $('.featured-product-thumbnail').slick({
     slidesToShow: 4,
    slidesToScroll: 1,
    vertical:true,
    asNavFor: '.featured-product-slider',
    dots: false,
    focusOnSelect: true,
    verticalSwiping:true
     });
   if( $(window).width() < 767 ){
          $('.home-section-2 .grid').slick({
            lazyLoad: 'ondemand',
            slidesToShow: 1,
            slidesToScroll: 1
          });
          
          $('.home-section-3 .grid.grid-cols-3').slick({
            lazyLoad: 'ondemand',
            slidesToShow: 1,
            slidesToScroll: 1
          });
           $('.home-hotdeal-section .grid.grid-cols-4').slick({
            lazyLoad: 'ondemand',
            slidesToShow: 1,
            slidesToScroll: 1
          });
           $('.home-section-7 .grid').slick({
                dots: true,
            lazyLoad: 'ondemand',
            slidesToShow: 1,
            slidesToScroll: 1
          });
          $('.faq-section-2 .grid.grid-cols-5').slick({
                dots: true,
            lazyLoad: 'ondemand',
            slidesToShow: 2,
            slidesToScroll: 2
          });
           $('.fitting-product-section .grid.grid-cols-4').slick({
            
            lazyLoad: 'ondemand',
            slidesToShow: 2,
            slidesToScroll: 2
          });
          $('.faq-section-3 .grid.grid-cols-2 ').slick({
            lazyLoad: 'ondemand',
            slidesToShow: 1,
            slidesToScroll: 1
          });
          $('.contact-section-3 .grid.grid-cols-3 ').slick({
            lazyLoad: 'ondemand',
            slidesToShow: 1,
            slidesToScroll: 1
          });
   }
   
   $(".menu-item-has-children").hover(function(){
    $(this).toggleClass("menu-hover");   
    $(this).find('.sub-menu:eq(0)').toggleClass("menu-open");
  });
    });
</script>
<script>
function wcqib_refresh_quantity_increments() {
    jQuery("div.quantity:not(.buttons_added), td.quantity:not(.buttons_added)").each(function(a, b) {
        var c = jQuery(b);
        c.addClass("buttons_added"), c.children().first().before('<input type="button" value="-" class="minus" />'), c.children().last().after('<input type="button" value="+" class="plus" />')
    })
}
String.prototype.getDecimals || (String.prototype.getDecimals = function() {
    var a = this,
        b = ("" + a).match(/(?:\.(\d+))?(?:[eE]([+-]?\d+))?$/);
    return b ? Math.max(0, (b[1] ? b[1].length : 0) - (b[2] ? +b[2] : 0)) : 0
}), jQuery(document).ready(function() {
    wcqib_refresh_quantity_increments()
}), jQuery(document).on("updated_wc_div", function() {
    wcqib_refresh_quantity_increments()
}), jQuery(document).on("click", ".plus, .minus", function() {
    var a = jQuery(this).closest(".quantity").find(".qty"),
        b = parseFloat(a.val()),
        c = parseFloat(a.attr("max")),
        d = parseFloat(a.attr("min")),
        e = a.attr("step");
    b && "" !== b && "NaN" !== b || (b = 0), "" !== c && "NaN" !== c || (c = ""), "" !== d && "NaN" !== d || (d = 0), "any" !== e && "" !== e && void 0 !== e && "NaN" !== parseFloat(e) || (e = 1), jQuery(this).is(".plus") ? c && b >= c ? a.val(c) : a.val((b + parseFloat(e)).toFixed(e.getDecimals())) : d && b <= d ? a.val(d) : b > 0 && a.val((b - parseFloat(e)).toFixed(e.getDecimals())), a.trigger("change")
});
</script>
<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>

</head>

<body <?php body_class( 'bg-white text-gray-900 antialiased' ); ?>>

<?php do_action( 'tailpress_site_before' ); ?>

<div id="page" class="min-h-screen flex flex-col">

	<?php do_action( 'tailpress_header' ); ?>

	
	<header id="myHeader">

		<div class="site-header px-12 bg-black" >
			<div class="flex flex-wrap header-top">
				
				<div class="md:w-1/6 px-4 header-logo-block">
					<div class="hedaer-logo">
							<?php if ( has_custom_logo() ) { ?>
								<?php the_custom_logo(); ?>
							<?php } else { ?>
								<div class="text-lg uppercase">
									<a href="<?php echo get_bloginfo( 'url' ); ?>" class="font-extrabold text-lg uppercase">
										<?php echo get_bloginfo( 'name' ); ?>
									</a>
								</div>

								<p class="text-sm font-light text-gray-600">
									<?php echo get_bloginfo( 'description' ); ?>
								</p>

							<?php } ?>
					</div>
					<div class="header-review-button hrb-hide-desktop">
    				<a href="#">&#9733; Reviews (<span>&#9733;&#9733;&#9733;&#9733;&#9733;</span>)<sup>(78)</sup></a>
    				</div>

				</div>
	            <div class="md:w-2/3 px-4">
					<div class="header-search">
						<form action="<?= site_url();?>" method="get">
							<input type="text" name="s" id="search" placeholder="What Are You Looking For" value="<?php the_search_query(); ?>" />
							<button type="submit"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/02/loupe.png"></button>
						</form>
					</div>	
				</div>
				<div class="md:w-1/6 px-4">
						<div class="flex header-icon"> 
						<a href="/cart">Cart <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/02/shopping-cart-empty-side-view.png" alt=""><span class="header-cart-count">0</span></a>
						<a href="/my-Account">Sign In <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/02/user.png" alt=""></a>
						<a href="#" aria-label="Toggle navigation" id="primary-menu-toggle" class="lg:hidden">
							<svg viewBox="0 0 20 20" class="inline-block w-6 h-6" version="1.1"
								 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
								<g stroke="none" stroke-width="1" fill="currentColor" fill-rule="evenodd">
									<g id="icon-shape">
										<path d="M0,3 L20,3 L20,5 L0,5 L0,3 Z M0,9 L20,9 L20,11 L0,11 L0,9 Z M0,15 L20,15 L20,17 L0,17 L0,15 Z"
											  id="Combined-Shape"></path>
									</g>
								</g>
							</svg>
						</a>
						</div>			
				</div>
			</div>
			<div class="hedaer-nav lg:flex lg:justify-between lg:items-center">
                <?php
					wp_nav_menu(
						array(
							'container_id'    => 'primary-menu',
							'container_class' => 'hidden bg-gray-100 mt-4 p-4 lg:mt-0 lg:p-0 lg:bg-transparent lg:block',
							'menu_class'      => 'lg:flex lg:-mx-4',
							'theme_location'  => 'primary',
							'li_class'        => 'lg:mx-4',
							'fallback_cb'     => false,
						)
					);
				?>
				<div class="header-review-button ">
				<a href="#">&#9733; Reviews (<span>&#9733;&#9733;&#9733;&#9733;&#9733;</span>)<sup>(78)</sup></a>
				</div>
			</div>
		</div>
	</header>

	<div id="content" class="site-content flex-grow">

		

		<?php do_action( 'tailpress_content_start' ); ?>

		<main>
