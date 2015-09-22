<?php 
/*
  Template Name: Custom Home Page
*/
 ?>
<?php get_header(); ?>

<div class="main">
  <div class="container">

            <section class="masthead">
                <div class="wrapper">
                    <div class="animation-holder">
                    	<img src="<?php bloginfo( 'pingback_url' ); ?>"img/video-placeholder.jpg" width="670" height="209" alt="In Colour Capital">
                    </div>
                </div>
            </section><!-- End of Masthead section -->

            <section class="aboutUs">
                <div class="wrapper">
                	<p>ABOUT</p>
                </div>
            </section><!-- End of About section -->

            <section class="portfloio">
                <div class="wrapper">
                	<p>PORTFOLIO</p>
                </div>
            </section><!-- End of Portfilo section -->


  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>