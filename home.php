<?php get_header(); ?>
  <div class="container-fluid">   
    <div class="row" id="blog-list">
      <div class="col-md-9">
        <div class="page-header">
          <h1 id="blog-head"><?php wp_title(''); ?></h1>
        </div> 
        <?php 
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          $args = array('posts_per_page' => 5, 'paged' => $paged );
          query_posts($args); ?>
          <?php if ( have_posts() ) : while (have_posts()) : the_post(); ?>
          	<article class="post">
            <h3 id="blog-listing-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p>
              on <?php echo the_time('l, F jS, Y');?>
            </p>
            <hr>
            <?php the_excerpt(); ?>
          </article>
          <?php endwhile; ?>
          <?php next_posts_link(); ?>
          <?php previous_posts_link(); ?>
          <?php else : ?>
          <?php endif; ?>
        </div>
      <?php get_sidebar( 'blog' ); ?>
    </div>
  </div>
<?php get_footer(); ?>

