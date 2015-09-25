<?php 
/*
  Template Name: Custom Home Page
*/
 ?>
<?php get_header(); ?>

<div class="main">
        <div class="main-wrapper">

            <section class="masthead" id="masthead">
                <div class="wrapper">

                    <div class="animation-holder">
                    <img src="<?php bloginfo( 'template_directory' ); ?>/img/in-color-digital.svg" alt="">
                    </div>

                </div>
            </section><!-- End of Masthead section -->

            <section class="intro">
                    <?php $latestPosts = new wp_query(array(
                      'post_type' => 'intro',//we only want about pieces
                      'posts_per_page' => 1
                    )) ?> 
                    <div class="wrapper">
                        <?php if($latestPosts->have_posts()) while($latestPosts->have_posts()) : $latestPosts->the_post() ?>
                            <div class="centre_wrapper">
                              <?php the_content(); ?>
                            </div>

                        <?php endwhile; // end of the loop. ?>
                    </div>
            </section>

            <section class="aboutUs" id="about">
                <?php $latestPosts = new wp_query(array(
                  'post_type' => 'about',//we only want about pieces
                  'posts_per_page' => 1
                )) ?> 
                <div class="wrapper">

                    <?php if($latestPosts->have_posts()) while($latestPosts->have_posts()) : $latestPosts->the_post() ?>

                        <h2><?php the_title(); ?></h2>
                        <div class="centre_wrapper">
                          <?php the_content(); ?>
                        </div>

                    <?php endwhile; // end of the loop. ?>
                </div>
            </section><!-- End of About section -->

            <section class="portfolio" id="portfolio">
                <?php $latestPosts = new wp_query(array(
                  'post_type' => 'client',//we only want about pieces
                  'posts_per_page' => -1
                )) ?> 
                <div class="wrapper clearfix">
                    <?php if($latestPosts->have_posts()) while($latestPosts->have_posts()) : $latestPosts->the_post() ?>

                        <?php $client = get_field('create_a_row');  ?>
                        <?php $client_info = $client;  ?>

                        <h2><?php the_title(); ?></h2>
                        <?php //pre_r($client); ?>
                        


                        <!-- /////////////////////// -->
                        <!-- This is the row factory -->
                        <!-- /////////////////////// -->
                        <?php //INCREMENTS OF 29 TO CHECK FOR THE NUMBER OF POSTS ?>
                        <?php $get_count = count($client_info, COUNT_RECURSIVE); ?>

                        <!-- Iterate over the array and pull out the rows -->
                        <?php foreach ($client as $client_data) {

                            //This finds the row name
                            $which_row = $client_data['select_a_row'];

                            //This create the variable to get correct row info
                            $get_the_row = $client_data[$which_row];

                                // Iterate over the array and pull out the embedded rows data
                                foreach ($get_the_row as $row_data) {
                                    $get_posts_data = $row_data;
                                    //pre_r($row_data);
                                }
                            }
                        ?>

                        <!-- //////////////////////////////////////////////////////////// -->
                        <!-- This is checking to see if the number of clients is under 5 -->
                        <!-- //////////////////////////////////////////////////////////// -->
                        <?php if( $get_count <= 140 ) : ?>

                            <?php 
                            echo '<div class="all_rows">';
                              
                            foreach ($client as $client_data) {

                                  //This finds the row name
                                  $which_row = $client_data['select_a_row'];

                                  //This create the variable to get correct row info
                                  $get_the_row = $client_data[$which_row];


                                      // Iterate over the array and pull out the embedded rows data
                                      foreach ($get_the_row as $row_data) {
                                          $get_posts_data = $row_data;
                                          //pre_r($row_data);
                                          echo '<div class="client_container" style="background-image: url('.$get_posts_data['image']['sizes']['large'].')">';
                                          echo '<div class="client_writeup">';
                                          echo '<div class="write_up">';
                                          echo '<h3>'.$get_posts_data['title'].'</h3>';
                                          echo '<p>'.$get_posts_data['description'].'</p>';
                                          echo '</div>';
                                          echo '</div>';
                                          echo '</div>';
                                      }
                                  }
                              echo '</div>';
                            ?>

                        <?php else : ?>

                           <?php 
                                foreach ($client as $client_data) {

                                  //This finds the row name
                                  $which_row = $client_data['select_a_row'];

                                  if( $which_row == 'full_row' ) {
                                      //This create the variable to get correct row info
                                      $get_the_row = $client_data['full_row'];
                                      //This builds the client squares
                                      define_rows($get_the_row, $which_row);

                                  } else if ( $which_row == 'left_blank' ) {
                                      $get_the_row = $client_data['left_blank'];
                                      //
                                      define_rows($get_the_row, $which_row);

                                  } else if ( $which_row == 'center_blank' ) {
                                      $get_the_row = $client_data['center_blank'];
                                      //
                                      define_rows($get_the_row, $which_row);

                                  } else if ( $which_row == 'right_blank' ) {
                                      $get_the_row = $client_data['right_blank'];
                                      //
                                      define_rows($get_the_row, $which_row);
                                        
                                  } 
                              }     

                           ?>

                       
                        <?php endif ?>

    

                    <?php endwhile; // end of the loop. ?>
                </div><!-- End of Wrapper -->
            </section><!-- End of Portfilo section -->

        </div><!-- End of main-wrapper -->

</div> <!-- /.main -->

<?php get_footer(); ?>