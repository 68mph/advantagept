<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package hogeyboom
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="hero">	<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
          
  <div class="pageIntro" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat fixed center 0;background-size:cover;background-attachment:scroll;">
     <section class="pagetitle">
  	<h1><?php the_title(); ?></h1>
		 <h2><?php the_subtitle(); ?></h2>
		 <a class="button" href="#anchor">Learn More</a>

     </section>
  </div>
</div>
	<div class="entry-content intro">
		<span id="anchor"></span>
		<div>
				<?php the_content(); ?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'hogeyboom' ),
				'after'  => '</div>',
			) );
		?>
	
			</div>
		</div><!-- .entry-content -->
<figure class="hp">
	<h3>Call Today to Make an Appointment</h3>
	<h4>We're here to answer your questions or concerns</h4>
	<a href="/contact-us" class="button">Request appointment</a>
	</figure>
	<div class="map">
			<div class="title">
		<h3>Where we are</h3>
	<h4>Advantage Physical Therapy now has two locations in Brick Township and Howell New Jersey. </h4>
	<hr>
		</div>
	<iframe src="https://www.google.com/maps/d/embed?mid=11n5lEfp_1CFIqdJpVD7iBf1EPEXFusBy" width="100%" height="425" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
<span id="anchor2"></span>
	<section class="requestInfo">
			<div class="title">
		<h3>Request Information</h3>
			<h4>Please contact us with any questions or concerns.</h4>
				<hr>
		</div>

<div class="inner">		

		<div class="form">
<? dynamic_sidebar( 'contact' ); ?>

			</div>
	</div>
	</section>
	
</article><!-- #post-## -->

