<?php
// this is index display
get_header();
?>
<?php
	if (have_posts()):
			the_post( );
			get_template_part('templates/post/content');


		//do what you want to do.....
	
	endif;




get_footer();


?>



