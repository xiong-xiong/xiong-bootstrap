<?php get_header();?>


<section>
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="xiong-main-content">
        <?php 
        global $wp_query;
        $args = array_merge( $wp_query->query, array( 'category_name' => 'paivakirjat' ) );
        query_posts( $args );
        if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          
            <?php get_template_part( 'templates/articlebox'); ?>

        <?php endwhile; endif; ?>
      </div><!--main-content -->
    
      </div><!--/col8 -->
      <div class="col-md-4">
        <aside class="xiong-front-sidebar">
          <?php dynamic_sidebar('cat_sidebar' ); ?>
        </aside>
      </div><!--/col4-->
    </div><!--/row -->
    <div class="row">
          <div class="xiong-pagination">
          <center>

            <?php get_template_part( 'templates/pagination'); ?>
          </center>
        </div><!--sivutus -->
    </div><!--row -->
  </div><!--/container -->
</section>



<?php get_footer();?>