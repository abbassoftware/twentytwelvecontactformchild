<?php
/*
Template Name: Contact
*/
?>


<?php require "contactformhandler.php"; ?>
<?php get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php 
				$wpContactFormObj = new ContactFormHandler();  
				$wpContactFormObj->displayContactForm(); 
			?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>