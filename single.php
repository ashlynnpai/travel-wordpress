<?php get_header(); ?>

  <div class="container-fluid">   
    <div class="blog-header"></div>
        <div class="row">     
            <div class="col-md-9">
                <div id="blog-post">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="page-header">      

    <h1><?php the_title(); ?></h1>
            <p><em>
              By <?php the_author(); ?> 
              on <?php echo the_time('l, F jS, Y');?>
              in <?php the_category( ', ' ); ?>.
              <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a>
            </em></p>
                </div>

          <p><?php the_content(); ?></p>
          <p><?php the_tags(); ?></p>
          <hr>
               </div>
                
                
    <div class="next-posts"><?php next_post_link('%link', 'Newer entry &gt;') ?></div>
    <div class="prev-posts"><?php previous_post_link('%link', '&lt; Older entry') ?></div>

		<?php comments_template( '', true ); ?>
       

        <?php endwhile; else: ?>
          
            <div class="page-header">
            <h1>Sorry!</h1>
            </div>

          <p>No content is appearing for this page!</p>

        <?php endif; ?>

            </div>
      
      <?php get_sidebar( 'blog' ); ?>

        </div>
    </div>
<?php get_footer(); ?>