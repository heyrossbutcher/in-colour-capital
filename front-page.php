<?php 
/*
  Template Name: Custom Home Page
*/
 ?>
<?php get_header(); ?>

<div class="main">
        <div class="main-wrapper">

            <section class="masthead">
                <div class="wrapper">

                    <div class="animation-holder">
                    	<img src="<?php bloginfo( 'template_directory' ); ?>/img/video-placeholder.jpg" width="715" height="209" alt="In Colour Capital">
                    </div>

                </div>
            </section><!-- End of Masthead section -->

            <section class="intro">
                <div class="intro">
                    <?php $latestPosts = new wp_query(array(
                      'post_type' => 'intro',//we only want about pieces
                      'posts_per_page' => 1
                    )) ?> 
                    <div class="wrapper">
                        <?php if($latestPosts->have_posts()) while($latestPosts->have_posts()) : $latestPosts->the_post() ?>

                            <p><?php the_content(); ?></p>

                        <?php endwhile; // end of the loop. ?>
                    </div>
                </div>
            </section>

            <section class="aboutUs">
                <?php $latestPosts = new wp_query(array(
                  'post_type' => 'about',//we only want about pieces
                  'posts_per_page' => 1
                )) ?> 
                <div class="wrapper">

                    <?php if($latestPosts->have_posts()) while($latestPosts->have_posts()) : $latestPosts->the_post() ?>

                        <p><?php the_title(); ?></p>
                        <p><?php the_content(); ?></p>

                    <?php endwhile; // end of the loop. ?>
                </div>
            </section><!-- End of About section -->

            <section class="portfolio">
                <?php $latestPosts = new wp_query(array(
                  'post_type' => 'client',//we only want about pieces
                  'posts_per_page' => -1
                )) ?> 
                <div class="wrapper">
                    <?php if($latestPosts->have_posts()) while($latestPosts->have_posts()) : $latestPosts->the_post() ?>

                        <?php $client = get_field('create_a_row');  ?>
                        <?php $client_info = $client;  ?>

                        <h2><?php the_title(); ?></h2>
                        <?php //pre_r($client); ?>
                        
                        <?php $get_count = count($client_info, COUNT_RECURSIVE); ?>
                        <?php //pre_r($get_count); ?>

                        <?php //INCREMENTS OF 29 TO CHECK FOR THE NUMBER OF POSTS ?>


                    <?php endwhile; // end of the loop. ?>
                </div>
            </section><!-- End of Portfilo section -->

        </div><!-- End of main-wrapper -->

</div> <!-- /.main -->

<?php get_footer(); ?>