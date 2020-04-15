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
		</div>
	<!-- .entry-content -->
<figure class="hp">
	<h3>Call Today to Make an Appointment</h3>
	<h4>We're here to answer your questions or concerns</h4>
	<a href="/contact-us" class="button">Request appointment</a>
	</figure>
	
	<!-- About Card ---->
	<section id="about-card">
		<div class"title"="">
		<h3>About Advantange Physical Therapy</h3>
	<h4>Advantage Physical Therapy now has two locations in Brick Township and Howell New Jersey. </h4>
	<hr>
		</div>
	<div class="photo-grid">
		<img src="https://advantageptbrick.com/~advanub5/wp-content/themes/hogeyboom/images/col-sm1.jpg"/>
		<img class="sm2" src="https://advantageptbrick.com/~advanub5/wp-content/themes/hogeyboom/images/col-sm2.jpg"/>
		<img class="lg1" src="https://advantageptbrick.com/~advanub5/wp-content/themes/hogeyboom/images/col-lg.jpg"/>
	<div class="about-info">
		<h3>Dr. Richard Dawkins</h3>		
		<p>Dr. Dawkins has been practicing Physical Therapy since 1994. Each of his patients are treated with the highest level of individualized attention and care, utilizing a hands on approach along with evidence based treatment to improve and restore optimal physical function.</p>
<a class="button" href="/about-us">Find out more</a>
		</div>
		</div>
	</section>	
	
	<div class="intro">
	
	<div class="title">
		<h3>Patient Testimonials</h3>
		<h4>Read what some of our patients have had to say about us.</h4>
		<hr>
		</div>
	<section class="testimonials">

		<div class="box">
		<em>“Dear DJ and all wonderful staff! Thank all of you for all your help, compassion and friendship during the past six months, I could have not done it without all of you! I will miss you guys! THANK YOU!!” </em>
		<p>Jean R.</p>
		</div>

		<div class="box">
		<em>“Thank you for curing me. I hope everything is going well.” </em>
		<p>Emma C.</p>
		</div>


		<div class="box">
		<em>“Doc, thanks for helping me get back to work!”</em>
		<p>Pete M.</p>
		</div>
		</section>
		</div>
	
<!--	<div class="map">
			<div class"title">
		<h3>Where we are</h3>
	<h4>Advantage Physical Therapy now has two locations in Brick Township and Howell New Jersey. </h4>
	<hr>
		</div>
	<iframe src="https://www.google.com/maps/d/embed?mid=11n5lEfp_1CFIqdJpVD7iBf1EPEXFusBy" width="100%" height="425" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>-->
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

