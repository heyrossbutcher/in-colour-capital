<footer>
  <div class="wrapper clearfix">
	<h2>Contact</h2>
  	<div class="credentials clearfix">

  		<?php $latestPosts = new wp_query(array(
  		  'post_type' => 'credential',//we only want about pieces
  		  'posts_per_page' => -1
  		)) ?>
		
		<?php if($latestPosts->have_posts()) while($latestPosts->have_posts()) : $latestPosts->the_post() ?>

		    <?php $info = get_field('info'); ?>
		    <?php $email = get_field('email'); ?>

			<div class="creds cred_<?php the_ID(); ?>">
				<h3><?php the_title();  //Get the Heading ?></h3>
			    <p><?php the_field('info');  //Get the Info ?></p>

			    <?php if($email) : ?>
			    	<p><?php the_field('email');  //Get the Email ?></p>
			    <?php endif ?>
			</div>

		<?php endwhile; // end of the loop. ?>

  	</div>
  	<div class="footer-icon">
  		<img src="<?php bloginfo( 'template_directory' ); ?>/img/footer-icon.svg">
  	</div>
  	<div class="copyright">
	    <p>&copy; In Colour Capital <?php echo date('Y'); ?></p>
    </div>
  </div>
</footer>

<script>
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?>
</body>
</html>