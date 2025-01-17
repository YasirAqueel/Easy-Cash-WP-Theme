

<?php get_header(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.3.1.min.js"></script> <!-- Common jquery plugin -->
<!--bootstrap working-->
<script src="assets/js/bootstrap.min.js"></script>
<!-- //bootstrap working-->
<!-- disable body scroll which navbar is in active -->
<script>
$(function () {
  $('.navbar-toggler').click(function () {
    $('body').toggleClass('noscroll');
  })
});
</script>
<!-- disable body scroll which navbar is in active -->

<section class="w3l-main-slider" id="home">
  <!-- main-slider -->
  <div class="companies20-content">
    
    <div class="owl-one owl-carousel owl-theme">
      <div class="item text-center">
        <li>
          <div class="slider-info banner-view bg bg2" data-selector=".bg.bg2">
            <div class="banner-info">
              <div class="container">
                <div class="banner-info-bg mr-auto">
                  <h5>Connecting all your
                    banking needs </h5>
                  <p>Conse ctetur Lorem ipsum dolor sit amet adipi sicing elit. Quae, velit recu sandae eum necessi tatibus bland itiis adipisci Mollitia placeat modi explicabo voluptatum corporis.</p>
                  <a class="btn btn-theme2 mt-md-5 mt-4" href="contact.html">Find out more</a>
                </div>
              </div>
            </div>
          </div>
        </li>
      </div>
      <div class="item text-center">
        <li>
          <div class="slider-info  banner-view banner-top1 bg bg2" data-selector=".bg.bg2">
            <div class="banner-info">
              <div class="container">
                <div class="banner-info-bg mr-auto">
                  <h5>Connecting all your
                    banking needs </h5>
                  <p>Conse ctetur Lorem ipsum dolor sit amet adipi sicing elit. Quae, velit recu sandae eum necessi tatibus bland itiis adipisci Mollitia placeat modi explicabo voluptatum corporis.</p>
                   <a class="btn btn-theme2 mt-md-5 mt-4" href="contact.html"> Find out more</a>
                </div>
              </div>
            </div>
          </div>
        </li>
      </div>
      <div class="item text-center">
        <li>
          <div class="slider-info  banner-view banner-top2 bg bg2" data-selector=".bg.bg2">
            <div class="banner-info">
              <div class="container">
                <div class="banner-info-bg mr-auto">
                  <h5>Connecting all your
                    banking needs </h5>
                  <p>Conse ctetur Lorem ipsum dolor sit amet adipi sicing elit. Quae, velit recu sandae eum necessi tatibus bland itiis adipisci Mollitia placeat modi explicabo voluptatum corporis.</p>
                   <a class="btn btn-theme2 mt-md-5 mt-4" href="contact.html"> Find out more</a>
                </div>
              </div>
            </div>
          </div>
        </li>
      </div>
    </div>
  </div>
  <script src="assets/js/owl.carousel.js"></script>
  <!-- script for -->
  <script>
    $(document).ready(function () {
      $('.owl-one').owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        responsiveClass: true,
        autoplay: false,
        autoplayTimeout: 5000,
        autoplaySpeed: 1000,
        autoplayHoverPause: false,
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          480: {
            items: 1,
            nav: false
          },
          667: {
            items: 1,
            nav: true
          },
          1000: {
            items: 1,
            nav: true
          }
        }
      })
    })
  </script>
  <!-- //script -->
  <!-- /main-slider -->
</section>
<section class="w3l-specification-6">
    <div class="specification-layout editContent">
        <div class="container">
            <div class="main-titles-head ">
                <h3 class="header-name editContent">
					Making internet a brand new experience
                </h3>
                <p class="tiltle-para editContent ">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic fuga sit illo modi aut aspernatur tempore laboriosam saepe dolores eveniet.</p>
            </div>
                    <div class="call-grids-w3 d-grid">
                        <div class="grids-1 grids-effect">
                            <span class="fa fa-desktop"></span>
                            <h4><a href="#feature" class="title-head">Online Business</a></h4>
                            <p class="para">Vivamus a ligula quam. Duis feugiat tortor sed Ut blandit. Duis feugiat tortor sed.</p>
                            <a href="about.html" class="action-button btn mt-3">Read more</a>
                        </div>
                        <div class="grids-1 grids-effect-2">
                            <span class="fa fa-thumbs-o-up"></span>
                            <h4><a href="#feature" class="title-head">Business Plan</a></h4>
                            <p class="para">Vivamus a ligula quam. Duis feugiat tortor sed  Ut blandit. Duis feugiat tortor sed.</p>
                            <a href="about.html" class="action-button btn mt-3">Read more</a>
                        </div>
                            <div class="grids-1 grids-effect">
                                <span class="fa fa-mobile"></span>
                                <h4><a href="#feature" class="title-head">Mobile Bank</a></h4>
                                <p class="para">Vivamus a ligula quam. Duis feugiat tortor sed Ut blandit. Duis feugiat tortor sed.</p>
                                <a href="about.html" class="action-button btn mt-3">Read more</a>
                            </div>
                            <div class="grids-1 grids-effect-2">
                                <span class="fa fa-money"></span>
                                <h4><a href="#feature" class="title-head">Online Deposit</a></h4>
                                <p class="para">Vivamus a ligula quam. Duis feugiat tortor sed  Ut blandit. Duis feugiat tortor sed.</p>
                                <a href="about.html" class="action-button btn mt-3">Read more</a>
                            </div>  
                  </div>
        </div>
</section>
<section class="w3l-teams-15">
	<div class="team-single-main editContent">
		<div class="container">

		<div  class="row">
				<div class="column2 image-text col-lg-6">
					<div class="nature-row editContent">
						<h5><a href="#page" >
							Progressive Percentage</a></h5>
					<p class="para editContent text ">
						Mollitia placeat modi explicabo voluptatum corporis unde Dicta, provident
						Rem adipisci Mollitia placeat modi.</p>
					</div>
					<div class="nature-row editContent">
						<h5><a href="#page">
							Easy Documentation</a></h5>
					<p class="para editContent text ">
						Mollitia placeat modi explicabo voluptatum corporis unde Dicta, provident
						Rem adipisci Mollitia placeat modi.</p>
					</div>
					<div class="nature-row editContent">
						<h5><a href="#page">
							Competitive Percentage</a></h5>
					<p class="para editContent text ">
						Mollitia placeat modi explicabo voluptatum corporis unde Dicta, provident
						Rem adipisci Mollitia placeat modi.</p>
					</div>
				</div>
			<div class="column2 image-text col-lg-6">
				<img src="<?php bloginfo('template_directory'); ?>/assets/images/b1.jpg" alt="product" class="img-responsive ">
			</div>
		</div>
		</div>
		</div>
	</div>
</section>

<section class="w3l-call-to-action_9">
    <div class="call-w3">
        <div class="container text-center">
            <div class="title-head">
            <h3>We are here to ease the financial obstacles</h3>
            <p class="para">Fugit tempora dolor dolore recusandae aut at cum autem esse neque. Consequuntur dolor sequi nulla corrupti blanditiis similique</p>
        </div>
            <div class=" history-info ">
                <iframe src="https://player.vimeo.com/video/131697637" width="800" height="360" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                </div>
              </div>
        </div>
    </div>
    <div class="call-w3-two editContent">
        <div class="container">
            <div class="grids">
                <div class="grids-content row text-center">
                    <div class="col-lg-4 col-md-6 editContent jst-coloums">
                        <div class="column color-2">
                            <span class="fa fa-handshake-o" aria-hidden="true"></span>
                        <h4><a href="about.html" class=" editContent">Innovative Solutions</a></h4>
                        <p class="para editContent">Assumenda temporibus quidem ipsam. Voluptate fuga corporis iusto similique voluptates sint quibusdam.</p>
                        
                    </div>
                </div>
              
                    <div class="col-lg-4 col-md-6 editContent jst-coloums">
                        <div class="column color-2">
                            <span class="fa fa-shield" aria-hidden="true"></span>
                        <h4><a href="about.html" class=" editContent">Best Support</a></h4>
                        <p class="para editContent">Assumenda temporibus quidem ipsam. Voluptate fuga corporis iusto similique voluptates sint quibusdam.</p>
                        
                    </div>
                </div>
    
                    <div class="col-lg-4 col-md-6 editContent jst-coloums">
                        <div class="column color-2">
                            <span class="fa fa-history" aria-hidden="true"></span>
                        <h4><a href="about.html" class=" editContent">On Time Services
                        </a></h4>
                        <p class="para editContent">Assumenda temporibus quidem ipsam. Voluptate fuga corporis iusto similique voluptates sint quibusdam.</p>
       
                    </div>
                </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="w3l-covers-18">
        <div class="covers-main editContent">
            <div class="container">
              <div class="main-titles-head ">
                <h3 class="header-name editContent">
                  Making the Best out of your Income
                </h3>
                <p class="tiltle-para editContent ">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic fuga sit illo modi aut aspernatur tempore laboriosam saepe dolores eveniet.</p>
            </div>
                <div class="gallery-image row">
                  <div class="img-box col-lg-4 col-md-6">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/b3.jpg" alt="product" class="img-responsive ">
                    <h5 class="my-2"><a href="about.html">Money Protection</a></h5>
                    <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet itaque labor.</p>
                  </div>
                  <div class="img-box col-lg-4 col-md-6">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/b1.jpg" alt="product" class="img-responsive ">
                    <h5 class="my-2"><a href="about.html">Growth Guranteed</a></h5>
                    <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet itaque labor.</p>
                  </div>
                  <div class="img-box col-lg-4 col-md-6">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/b2.jpg" alt="product" class="img-responsive ">
                    <h5 class="my-2"><a href="about.html">Business Support</a></h5>
                    <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet itaque labor.</p>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </section>

<section class="w3l-clients" id="client">
    <div class="main-w3 text-center">
        <div class="container">
            <div class="cover-back">
          <h3>Our worldwide integration partner work with long time relationship</h3>
          <p class="para">Consectetur adipisicing elit. Fuga nostrum dicta labor dolor emque laboriosam facilis voluptatum debitis aliquam qui explicabo a, hic ullam tempora obcaecati.</p>
          <a class="btn btn-theme2 mt-md-5 mt-4" href="contact.html">Find out more</a>
        </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
