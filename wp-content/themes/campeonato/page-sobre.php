<?php
// Template Name: Sobre
?>

<?php get_header(); ?>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<section class="container sobre">
			<h2 class="subtitulo">O maior campeonato de CSGO do mundo!</h2>

			<div class="grid">
				<h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed leo tellus, facilisis eget nibh vitae, ullamcorper mollis nunc.
				Maecenas condimentum neque nibh, et dictum enim ultricies vel. </h2>
			</div>
		</section>
	<?php endwhile; else: endif;?>

<?php get_footer(); ?>