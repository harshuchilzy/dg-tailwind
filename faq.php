<?php /* Template Name: faq Page */
get_header(); ?>
<div class="faq-page-main dark:bg-black" >
    <div class="faq-secton-1 w-full inline-block py-16 bg-no-repeat bg-center bg-cover" style="background: url(<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/fs1-bg.png);">
        <div class="container mx-auto">
            <div class="fs1-detail w-2/3 inline-block">
                <h2 class="uppercase text-4xl font-bold text-white font-proxima mb-3">Knowledge <span class="text-orange">base</span></h2>
                <p class="text-base font-normal text-df font-proxima mb-4">Lorem Ipsum is simply dummy text of the printing and <br/>typesetting industry. Lorem Ipsum has been the industry's </p>
                <div class="header-search">
						<form action="<?= site_url();?>" method="get">
							<input type="text" name="s" id="search" placeholder="What can we help with?" value="<?php the_search_query(); ?>" />
							<button type="submit"><img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/loupe.png"  alt="" width="50" height="50"></button>
						</form>
				</div>
            </div>
        </div>
    </div>
    <div class="faq-section-2 w-full inline-block py-16">
        <div class="container mx-auto">
            <div class="grid grid-cols-5 grid-flow-row gap-8">
                <div class="flex gap-5 items-center">
                    <img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/cloud.png"  alt="" width="50" height="50" class="w-10" >
                    <span>
                        <h4 class="text-3b font-bold text-lg font-proxima">Lrem Ipsum</h4>
                        <a href="#" class="text-3b font-light text-base font-proxima hover:text-orange-400">View section <span>&#8594;</span></a>
                    </span>
                </div>

                <div class="flex gap-5 items-center">
                    <img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/random-arrows.png"  alt="" width="50" height="50" class="w-10" >
                    <span>
                        <h4 class="text-3b font-bold text-lg font-proxima">Lrem Ipsum</h4>
                        <a href="#" class="text-3b font-light text-base font-proxima hover:text-orange-400">View section <span>&#8594;</span></a>
                    </span>
                </div>

                <div class="flex gap-5 items-center">
                    <img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/play-button.png"  alt="" width="50" height="50" class="w-10" >
                    <span>
                        <h4 class="text-3b font-bold text-lg font-proxima">Lrem Ipsum</h4>
                        <a href="#" class="text-3b font-light text-base font-proxima hover:text-orange-400">View section <span>&#8594;</span></a>
                    </span>
                </div>

                <div class="flex gap-5 items-center">
                    <img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/support.png"  alt="" width="50" height="50" class="w-10" >
                    <span>
                        <h4 class="text-3b font-bold text-lg font-proxima">Lrem Ipsum</h4>
                        <a href="#" class="text-3b font-light text-base font-proxima hover:text-orange-400">View section <span>&#8594;</span></a>
                    </span>
                </div>

                <div class="flex gap-5 items-center">
                    <img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/key-1.png"  alt="" width="50" height="50" class="w-10" >
                    <span>
                        <h4 class="text-3b font-bold text-lg font-proxima">Lrem Ipsum</h4>
                        <a href="#" class="text-3b font-light text-base font-proxima hover:text-orange-400">View section <span>&#8594;</span></a>
                    </span>
                </div>

                <div class="flex gap-5 items-center">
                    <img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/cloud.png"  alt="" width="50" height="50" class="w-10" >
                    <span>
                        <h4 class="text-3b font-bold text-lg font-proxima">Lrem Ipsum</h4>
                        <a href="#" class="text-3b font-light text-base font-proxima hover:text-orange-400">View section <span>&#8594;</span></a>
                    </span>
                </div>

                <div class="flex gap-5 items-center">
                    <img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/random-arrows.png"  alt="" width="50" height="50" class="w-10" >
                    <span>
                        <h4 class="text-3b font-bold text-lg font-proxima">Lrem Ipsum</h4>
                        <a href="#" class="text-3b font-light text-base font-proxima hover:text-orange-400">View section <span>&#8594;</span></a>
                    </span>
                </div>

                <div class="flex gap-5 items-center">
                    <img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/play-button.png"  alt="" width="50" height="50" class="w-10" >
                    <span>
                        <h4 class="text-3b font-bold text-lg font-proxima">Lrem Ipsum</h4>
                        <a href="#" class="text-3b font-light text-base font-proxima hover:text-orange-400">View section <span>&#8594;</span></a>
                    </span>
                </div>

                <div class="flex gap-5 items-center">
                    <img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/support.png"  alt="" width="50" height="50" class="w-10" >
                    <span>
                        <h4 class="text-3b font-bold text-lg font-proxima">Lrem Ipsum</h4>
                        <a href="#" class="text-3b font-light text-base font-proxima hover:text-orange-400">View section <span>&#8594;</span></a>
                    </span>
                </div>

                <div class="flex gap-5 items-center">
                    <img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/key-1.png"  alt="" width="50" height="50" class="w-10" >
                    <span>
                        <h4 class="text-3b font-bold text-lg font-proxima">Lrem Ipsum</h4>
                        <a href="#" class="text-3b font-light text-base font-proxima hover:text-orange-400">View section <span>&#8594;</span></a>
                    </span>
                </div>

                <div class="flex gap-5 items-center">
                    <img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/cloud.png"  alt="" width="50" height="50" class="w-10" >
                    <span>
                        <h4 class="text-3b font-bold text-lg font-proxima">Lrem Ipsum</h4>
                        <a href="#" class="text-3b font-light text-base font-proxima hover:text-orange-400">View section <span>&#8594;</span></a>
                    </span>
                </div>

                <div class="flex gap-5 items-center">
                    <img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/random-arrows.png"  alt="" width="50" height="50" class="w-10" >
                    <span>
                        <h4 class="text-3b font-bold text-lg font-proxima">Lrem Ipsum</h4>
                        <a href="#" class="text-3b font-light text-base font-proxima hover:text-orange-400">View section <span>&#8594;</span></a>
                    </span>
                </div>

                <div class="flex gap-5 items-center">
                    <img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/play-button.png"  alt="" width="50" height="50" class="w-10" >
                    <span>
                        <h4 class="text-3b font-bold text-lg font-proxima">Lrem Ipsum</h4>
                        <a href="#" class="text-3b font-light text-base font-proxima hover:text-orange-400">View section <span>&#8594;</span></a>
                    </span>
                </div>

                <div class="flex gap-5 items-center">
                    <img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/support.png"  alt="" width="50" height="50" class="w-10" >
                    <span>
                        <h4 class="text-3b font-bold text-lg font-proxima">Lrem Ipsum</h4>
                        <a href="#" class="text-3b font-light text-base font-proxima hover:text-orange-400">View section <span>&#8594;</span></a>
                    </span>
                </div>

                <div class="flex gap-5 items-center">
                    <img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/key-1.png"  alt="" width="50" height="50" class="w-10" >
                    <span>
                        <h4 class="text-3b font-bold text-lg font-proxima">Lrem Ipsum</h4>
                        <a href="#" class="text-3b font-light text-base font-proxima hover:text-orange-400">View section <span>&#8594;</span></a>
                    </span>
                </div>

                <div class="flex gap-5 items-center">
                    <img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/support.png"  alt="" width="50" height="50" class="w-10" >
                    <span>
                        <h4 class="text-3b font-bold text-lg font-proxima">Lrem Ipsum</h4>
                        <a href="#" class="text-3b font-light text-base font-proxima hover:text-orange-400">View section <span>&#8594;</span></a>
                    </span>
                </div>

                <div class="flex gap-5 items-center">
                    <img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/key-1.png"  alt="" width="50" height="50" class="w-10" >
                    <span>
                        <h4 class="text-3b font-bold text-lg font-proxima">Lrem Ipsum</h4>
                        <a href="#" class="text-3b font-light text-base font-proxima hover:text-orange-400">View section <span>&#8594;</span></a>
                    </span>
                </div>


            </div>
        </div>
    </div>

    <div class="faq-section-3 w-full inline-block pb-16">
        <div class="container mx-auto">
            <div class="flex gap-7">
                <div class="w-3/5">
                    <div class="grid grid-cols-2 grid-flow-row gap-7">
                        <div class="fs3-block rounded-2xl shadow shadow-gray-300 overflow-hidden">
                            <div class="fs3-image rounded-2xl shadow shadow-gray-300 overflow-hidden relative">
                                <img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/fs-1.png" alt="" width="300" height="200" class="h-56 w-full object-cover">
                                
                            </div>
                            <div class="fs3-detail p-5">
                               <div class="flex gap-5">
                                    <div class="w-4/6">
                                        <h3 class="text-black text-lg font-bold font-proxima">Lorem Ipsum</h3>
                                        <p class="text-8a text-base font-normal font-proxima">Lorem Ipsum is simply dummy text</p>
                                    </div>
                                    <div class="w-1/3">
                                        <span class="text-8a text-sm font-light font-proxima text-right w-full inline-block">23/10/2021</span>
                                    </div>
                               </div>
                               <div class="fs3-comment-like flex items-center justify-between mt-3">
                                    <a href="#" class="fs3-comments flex items-center gap-3 text-8a font-normal font-proxima text-sm hover:text-orange-400"><img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/chat.png" alt="" width="15" height="15"> (23) comments</a>
                                    <a href="#" class="fs3-comments flex items-center gap-3 text-8a font-normal font-proxima text-sm hover:text-orange-400"><img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/like.png" alt="" width="15" height="15"> (52) likes</a>
                               </div>

                            </div>
                        </div> 

                        <div class="fs3-block rounded-2xl shadow shadow-gray-300 overflow-hidden">
                            <div class="fs3-image rounded-2xl shadow shadow-gray-300 overflow-hidden relative">
                                <img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/fs-2.png" alt="" width="300" height="200" class="h-56 w-full object-cover">
                                
                            </div>
                            <div class="fs3-detail p-5">
                               <div class="flex gap-5">
                                    <div class="w-4/6">
                                        <h3 class="text-black text-lg font-bold font-proxima">Lorem Ipsum</h3>
                                        <p class="text-8a text-base font-normal font-proxima">Lorem Ipsum is simply dummy text</p>
                                    </div>
                                    <div class="w-1/3">
                                        <span class="text-8a text-sm font-light font-proxima text-right w-full inline-block">23/10/2021</span>
                                    </div>
                               </div>
                               <div class="fs3-comment-like flex items-center justify-between mt-3">
                                    <a href="#" class="fs3-comments flex items-center gap-3 text-8a font-normal font-proxima text-sm hover:text-orange-400"><img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/chat.png" alt="" width="15" height="15"> (23) comments</a>
                                    <a href="#" class="fs3-comments flex items-center gap-3 text-8a font-normal font-proxima text-sm hover:text-orange-400"><img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/like.png" alt="" width="15" height="15"> (52) likes</a>
                               </div>

                            </div>
                        </div> 

                        <div class="fs3-block rounded-2xl shadow shadow-gray-300 overflow-hidden">
                            <div class="fs3-image rounded-2xl shadow shadow-gray-300 overflow-hidden relative">
                                <img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/fs-3.png" alt="" width="300" height="200" class="h-56 w-full object-cover">
                                
                            </div>
                            <div class="fs3-detail p-5">
                               <div class="flex gap-5">
                                    <div class="w-4/6">
                                        <h3 class="text-black text-lg font-bold font-proxima">Lorem Ipsum</h3>
                                        <p class="text-8a text-base font-normal font-proxima">Lorem Ipsum is simply dummy text</p>
                                    </div>
                                    <div class="w-1/3">
                                        <span class="text-8a text-sm font-light font-proxima text-right w-full inline-block">23/10/2021</span>
                                    </div>
                               </div>
                               <div class="fs3-comment-like flex items-center justify-between mt-3">
                                    <a href="#" class="fs3-comments flex items-center gap-3 text-8a font-normal font-proxima text-sm hover:text-orange-400"><img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/chat.png" alt="" width="15" height="15"> (23) comments</a>
                                    <a href="#" class="fs3-comments flex items-center gap-3 text-8a font-normal font-proxima text-sm hover:text-orange-400"><img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/like.png" alt="" width="15" height="15"> (52) likes</a>
                               </div>

                            </div>
                        </div> 

                        <div class="fs3-block rounded-2xl shadow shadow-gray-300 overflow-hidden">
                            <div class="fs3-image rounded-2xl shadow shadow-gray-300 overflow-hidden relative">
                                <img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/fs-4.png" alt="" width="300" height="200" class="h-56 w-full object-cover">
                                
                            </div>
                            <div class="fs3-detail p-5">
                               <div class="flex gap-5">
                                    <div class="w-4/6">
                                        <h3 class="text-black text-lg font-bold font-proxima">Lorem Ipsum</h3>
                                        <p class="text-8a text-base font-normal font-proxima">Lorem Ipsum is simply dummy text</p>
                                    </div>
                                    <div class="w-1/3">
                                        <span class="text-8a text-sm font-light font-proxima text-right w-full inline-block">23/10/2021</span>
                                    </div>
                               </div>
                               <div class="fs3-comment-like flex items-center justify-between mt-3">
                                    <a href="#" class="fs3-comments flex items-center gap-3 text-8a font-normal font-proxima text-sm hover:text-orange-400"><img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/chat.png" alt="" width="15" height="15"> (23) comments</a>
                                    <a href="#" class="fs3-comments flex items-center gap-3 text-8a font-normal font-proxima text-sm hover:text-orange-400"><img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/like.png" alt="" width="15" height="15"> (52) likes</a>
                               </div>

                            </div>
                        </div> 
                        
                        
                    </div>
                </div>
                <div class="w-2/5">
                    <div class="blog-sidebar w-full inline-block shadow shadow-gray-300 px-7 py-12 bg-white rounded-2xl">
                          <h2 class="font-proxima uppercase text-orange text-4xl text-center font-bold mb-9">FAQ's</h2>
                          <div class="sidebar-accordion">
                              <div class="sidebar-accordion-block"> 
                                    <button class="accordion">Lorem Ipsum is simply dummy text</button>
                                    <div class="panel">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    </div>
                               </div> 
                               <div class="sidebar-accordion-block"> 
                                    <button class="accordion">Lorem Ipsum is simply dummy text</button>
                                    <div class="panel">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    </div>
                               </div> 
                               <div class="sidebar-accordion-block"> 
                                    <button class="accordion">Lorem Ipsum is simply dummy text</button>
                                    <div class="panel">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    </div>
                               </div> 
                               <div class="sidebar-accordion-block"> 
                                    <button class="accordion">Lorem Ipsum is simply dummy text</button>
                                    <div class="panel">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    </div>
                               </div> 
                               <div class="sidebar-accordion-block"> 
                                    <button class="accordion">Lorem Ipsum is simply dummy text</button>
                                    <div class="panel">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    </div>
                               </div> 
                               <div class="sidebar-accordion-block"> 
                                    <button class="accordion">Lorem Ipsum is simply dummy text</button>
                                    <div class="panel">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    </div>
                               </div> 
                               <div class="sidebar-accordion-block"> 
                                    <button class="accordion">Lorem Ipsum is simply dummy text</button>
                                    <div class="panel">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    </div>
                               </div> 
                               <div class="sidebar-accordion-block"> 
                                    <button class="accordion">Lorem Ipsum is simply dummy text</button>
                                    <div class="panel">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    </div>
                               </div> 
                               <div class="sidebar-accordion-block"> 
                                    <button class="accordion">Lorem Ipsum is simply dummy text</button>
                                    <div class="panel">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    </div>
                               </div> 
                               <div class="sidebar-accordion-block"> 
                                    <button class="accordion">Lorem Ipsum is simply dummy text</button>
                                    <div class="panel">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    </div>
                               </div> 
                               <div class="sidebar-accordion-block"> 
                                    <button class="accordion">Lorem Ipsum is simply dummy text</button>
                                    <div class="panel">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    </div>
                               </div> 
                               <div class="sidebar-accordion-block"> 
                                    <button class="accordion">Lorem Ipsum is simply dummy text</button>
                                    <div class="panel">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    </div>
                               </div> 
                          </div>
                          
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