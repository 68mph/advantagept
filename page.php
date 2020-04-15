<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package hogeyboom
 */

get_header(); ?>

<div class="pageHead"></div>
	<div id="primary" class="content-area">
		<div class="hero">	<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
          
  <div class="pageIntro" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat fixed center 0;background-size:cover;background-attachment:scroll;">
     <section class="pagetitle">
  	<h1><?php the_title(); ?></h1>
		 <h2><?php the_subtitle(); ?></h2>
		 <a class="button" href="#anchor">Learn More</a>

     </section>
  </div>
</div>
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
