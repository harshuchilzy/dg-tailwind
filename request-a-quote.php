<?php /* Template Name: request-a-quote */
get_header(); ?>

<div class="request-a-quote-main">
    <div class="container mx-auto">
        <div class="request-a-quote-header">
            <h2>Request a Quote</h2>
<<<<<<< HEAD
            <p><?php echo get_field('banner_description') ?></p>
=======
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
            been the industry's standard dummy text ever since the 1500s,</p>
>>>>>>> f152c2e5fa00a6c94c0f0f32d351f84507ba3bca
        </div>    
        <div class="request-a-quote-form">
             <?php echo do_shortcode('[contact-form-7 id="19360" title="Request a Quote"]'); ?>
            
        </div>    
 

        <div class="raq-accordion-section">
<<<<<<< HEAD
            <h2><?php the_field('accordion_heading') ?></h2>
            <div class="sidebar-accordion">
                    <div class="sidebar-accordion-block"> 
                        <button class="accordion"><?php the_field('accordion_button_title_1') ?></button>
                        <div class="panel">
                        <p><?php the_field('accordion_button_description_1') ?></p>
                        </div>
                   </div> 
                   <div class="sidebar-accordion-block"> 
                        <button class="accordion"><?php the_field('accordion_button_title_2') ?></button>
                        <div class="panel">
                        <p><?php the_field('accordion_button_description_2') ?></p>
                        </div>
                   </div> 
                   <div class="sidebar-accordion-block"> 
                        <button class="accordion"><?php the_field('accordion_button_title_3') ?></button>
                        <div class="panel">
                        <p><?php the_field('accordion_button_description_3') ?></p>
                        </div>
                   </div> 
                   <div class="sidebar-accordion-block"> 
                        <button class="accordion"><?php the_field('accordion_button_title_4') ?></button>
                        <div class="panel">
                        <p><?php the_field('accordion_button_description_4') ?></p>
                        </div>
                   </div> 
                   <div class="sidebar-accordion-block"> 
                        <button class="accordion"><?php the_field('accordion_button_title_5') ?></button>
                        <div class="panel">
                        <p><?php the_field('accordion_button_description_5') ?></p>
=======
            <h2>Veelgestelde vragen</h2>
            <div class="sidebar-accordion">
                    <div class="sidebar-accordion-block"> 
                        <button class="accordion">Wanneer heb ik reactie?</button>
                        <div class="panel">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                   </div> 
                   <div class="sidebar-accordion-block"> 
                        <button class="accordion">Wat staat in de offerte?</button>
                        <div class="panel">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                   </div> 
                   <div class="sidebar-accordion-block"> 
                        <button class="accordion">Wanneer heeft een offerte aanvragen geen zin?</button>
                        <div class="panel">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                   </div> 
                   <div class="sidebar-accordion-block"> 
                        <button class="accordion">Waarom moet ik al die gegevens invullen?</button>
                        <div class="panel">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                   </div> 
                   <div class="sidebar-accordion-block"> 
                        <button class="accordion">Hoe lang is de offerte geldig?</button>
                        <div class="panel">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
>>>>>>> f152c2e5fa00a6c94c0f0f32d351f84507ba3bca
                        </div>
                   </div> 
            </div>                           
                                       
                                           
                
        </div>  
   </div>
</div> 

<script>
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
</script>

<?php
get_footer(); ?>