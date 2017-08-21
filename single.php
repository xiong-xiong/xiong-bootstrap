<?php get_header();?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_header();?>

<section>
  <div class="container">
    <div class="row">
            <article class="xiong-single-article">
                <div class="xiong-article-wrapper">
                  <header>
                  <h2><?php the_title( );?></h2>
                  </header>
                  <content>
                    <p><?php the_content( );?></p>


                    <aside class="testimonial row">
                      <div class="col-sm-3"><img id="client-image" src="<?php the_field('testimonial_client_image');?>"></div>
                      <div class="col-sm-9">
                       
                        <i class="fa fa-quote-right"></i><p><?php the_field('testimonial_text');?></p>
                        <em><?php the_field('testimonial_client_name');?> </em>
                      </div>
                    </aside>

                   <button> <i class="fa fa-arrow-left"> </i> <?php previous_post_link('%link', '%title', TRUE); ?></button>
                   <button><?php next_post_link('%link', '%title', TRUE); ?> <i class="fa fa-arrow-right"></i></button>
                  </content>
                </div>
            </article>
        
    </div><!--/row -->
  </div><!--/container -->
</section>



<?php endwhile; endif; ?>

<!-- Hide testimonial aside if there's no testimonial -->
<?php if( empty( get_post_meta( $post->ID, 'testimonial_text', true ) ) ) {
  echo "
  <style> .testimonial { display: none;} </style>";
}?>

<?php get_footer();?>