<?php get_header();?>
<section>
	<div class="xiong-hero">
		<div class="container">
				<div class="col-md-6 xiong-hero-content">

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					
						<article>

							<p><?php the_content( );?><a href="http://xiong.fi/palvelut"><button>Lue lisää</button></a></p>
						</article>

				<?php endwhile; endif; ?>

		</div><!--col6-->
		<div class="col-md-6" id="xiong-herokuva">
			<img src="<?php bloginfo('template_url' );?>/img/juhahero.png">
		</div>
		</div>
	</div>

</section>

<section>
	<div class="container">
		<div class="row">
					<?php
						global $post;
						$args = array( 'category_name'=> 'referenssit', 'posts_per_page' => 2  );
						$myposts = get_posts( $args );
						foreach ( $myposts as $post ) : 
						  setup_postdata( $post ); ?>
			<div class="col-md-6">
	
					
						 
							      <?php get_template_part( 'templates/articlebox'); ?>


						

	
			</div><!--/col4-->
			<?php endforeach; wp_reset_postdata(); ?>
		</div><!--/row -->
		
	</div><!--/container -->
</section>



<?php get_footer();?>