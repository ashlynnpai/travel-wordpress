<?php get_header(); ?>

  <div class="container-fluid">   
    <div class="row" id="blog-list">
 
      <div class="col-md-9">

        <div class="page-header">
          <h1 id="blog-head"><?php wp_title(''); ?></h1>
        </div>

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <article class="post">
            
            <h3 id="blog-listing-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p>
              By <?php the_author(); ?> 
              on <?php echo the_time('l, F jS, Y');?>
              in <?php the_category( ', ' ); ?>.
              <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a>
            </p>

            <hr>

            <?php the_excerpt(); ?>

          </article>

         
        <?php endwhile; else: ?>
          
          <div class="page-header">
            <h1>Oh no!</h1>
          </div>

          <p>No content is appearing for this page!</p>

        <?php endif; ?>

          </div>
      
      <?php get_sidebar( 'blog' ); ?>

    </div>

<?php get_footer(); ?>