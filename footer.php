</main>

<?php do_action( 'tailpress_content_end' ); ?>

</div>

<?php do_action( 'tailpress_content_after' ); ?>

<div class="footer-section bg-black">
	<div class="container mx-auto">
		<div class="footer-top">
			<div class="footer-logo">
				<img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/logo.png" alt="" class="w-52">
			</div>
			<div class="flex my-8 gap-8">
				<div class="w-2/5">
					<div class="footer-block footer-first-block">
						<p class="text-white text-base font-normal mb-4">Per product geven wij de voorraadstatus
							en leverindicatie aan. Mochten wij afwijken
							van deze levertijd dan melden wij dit z.s.m.
							per e-mail danwel telefoon.</p>
						<p class="text-white text-base font-normal mb-4">Verzendingen onder de €100,- worden verzonden
							tegen €6,95 verzendkosten. Daarboven nemen wij
							de verzendkosten op ons.</p>
					</div>
				</div>
				<div class="w-1/5">
					<div class="footer-block">
						<h4>Contact Us</h4>
						<p><a href="mailto:info@deurbeslaggigant.nl">info@deurbeslaggigant.nl</a></p>
						<p><a href="tel:0578-760509">0578-760509</a></p>
						<p>KvK: 81361459</p>
						<p>BTW: NL862056779B01</p>
					</div>
				</div>
				<div class="w-1/5">
					<div class="footer-block">
						<h4>Partners Collectie</h4>
						<ul>
							<li><a href="#">Merken</a></li>
							<li><a href="#">Blog</a></li>
							<li><a href="#">Algemene voorwaarden</a></li>
							<li><a href="#">Garantie en klachten</a></li>
							<li><a href="/contact/">Contact</a></li>
							<li><a href="#">Retourneren</a></li>
							<li><a href="#">Privacy Policy</a></li>
						</ul>
					</div>
				</div>
				<div class="w-1/5">
					<div class="footer-block">
						<h4>Partners Collectie</h4>
						<p>DeurbeslagGigant Oenerweg 30 (geen bezoekadres) 8181RJ Heerde</p>
					</div>
				</div>

			</div>

			</div>
			<div class="footer-bottom">
				<p class="text-center text-white text-base font-normal">Copyright 2021, website by WebsiteMakers</p>
			</div>
		</div>
	</div>

<footer id="colophon" class="site-footer bg-gray-50 py-12" role="contentinfo">
	<?php do_action( 'tailpress_footer' ); ?>

	<div class="container mx-auto text-center text-gray-500">
		&copy; <?php echo date_i18n( 'Y' );?> - <?php echo get_bloginfo( 'name' );?>
	</div>
</footer> 
<div class="fixed-bar">
	<a href="" class="our-youtube">OUR YOUTUBE</a>
		<div class="vertical-bar">
			<a href="#" class="social-link"><img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/facebook-icon.png" alt=""></a>
			<a href="#" class="social-link"><img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/instagram-icon.png" alt=""></a>
			<a href="#" class="social-link"><img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/whats-app-icon.png" alt=""></a>
			<a href="#" class="social-link"><img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/twiter-icon.png" alt=""></a>
			<a href="#" class="social-link"><img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/linked-in.png" alt=""></a>
			<a href="#">LOREM IPSUM</a>
			<a href="#">LOREM IPSUM</a>
			<a href="#">LOREM IPSUM</a>
		</div>
	</div>
</div>

<div class="product-fix-button">
<a href="#video" class="btn-video">video</a> 
<a href="#specification" class="btn-specifications">Specifications</a>
</div>

<?php wp_footer(); ?>
<script>
    $(document).ready(function(){
      $('.qty').on('change', function(){
     var qty = $(this).val();
     $(this).parents('.add-cart').find('.add_to_cart_button').attr('data-quantity',qty);
       
    });
    $('body').on('click', '.woocommerce-pagination li a', function(){
    window.location.href = $(this).attr('href'); 
    });
    $('body').on('click', 'a[href="/cart"]', function(event){
     event.preventDefault()
     $(".xoo-wsc-modal").addClass('xoo-wsc-cart-active');
     $("html").addClass('xoo-wsc-cart-active');
     $("body").addClass('xoo-wsc-cart-active');
    });
    });
</script>
<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>
</body>
</html>
