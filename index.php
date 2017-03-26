
<?php 

get_header();
get_sidebar();
?>

<div id="entry-content-page">
<?php
// TO SHOW THE PAGE CONTENTS
    while ( have_posts() ) : the_post(); 
?> 
	<article>
		<?php
			the_title( '<h3>', '</h3>' );
		    the_content(); 
	    ?> <!-- Page Content -->
	</article><!-- .entry-content-page -->
<?php
	endwhile; //resetting the page loop
?>
</div>
<?php
	wp_reset_query(); //resetting the page query
	get_footer();
?>