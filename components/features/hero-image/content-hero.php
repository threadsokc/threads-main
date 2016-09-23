<?php
/**
 * The template used for displaying hero content.
 *
 * @package Threads_of_Compassion
 */
?>

<?php if ( has_post_thumbnail() ) : ?>
	<div class="threadsokc-hero">
		<?php the_post_thumbnail( 'threadsokc-hero' ); ?>
	</div>
<?php endif; ?>
