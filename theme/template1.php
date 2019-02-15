<?php
/*
Template Name: Template1
*/
?>
<?php get_header(); ?>
	</head>
	<body>

  <?php include 'navigation.php' ?>

	<main role="main" aria-label="Content">

		<?php $args = array(
			'child_of' => get_top_ancestor_id(),
			'title_li' => ''
		); ?>

		<?php wp_list_pages($args); ?>

		<!-- section -->
		<section>

			<h1><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>


				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>
<?php get_footer(); ?>
