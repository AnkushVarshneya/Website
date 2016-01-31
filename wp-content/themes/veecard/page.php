<?php get_header(); ?>

		<article>

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<div id="title-left">
				<header>
					<h1><?php the_title(); ?></h1>
				</header>
			</div>
			<div id="title-right">
			</div>		

			<?php the_content(); ?>

			<?php endwhile; endif;?>

		</article>

<?php get_footer(); ?>