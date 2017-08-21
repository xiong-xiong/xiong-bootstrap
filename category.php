<?php get_header();?>
<section>
  <div class="xiong-hero">
    <div class="container">
        <div class="col-md-6 xiong-hero-content">

          <h2><?php single_cat_title( );?></h2>

    </div><!--col6-->
    <div class="col-md-6" id="xiong-herokuva">
      <img src="<?php bloginfo('template_url' );?>/img/juhahero.png">
    </div>
    </div>
  </div>

</section>

<section>

<section>
  <div class="container">
    <div class="row">
      
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <div class="col-md-6">
             <?php get_template_part( 'templates/articlebox'); ?>



          </div><!-- col6-->
        <?php endwhile; endif; ?>
        
        </div><!-- row-->


         <div class="xiong-pagination">

          <center>
            <?php get_template_part( 'templates/pagination'); ?>
          </center>

        </div><!--sivutus -->

  </div><!--/container -->
</section>



<?php get_footer();?>
      
     