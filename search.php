<?php get_header(); ?>

<div class="contentmain" >
  <div id="content" class="col-md-9">
    <h2 id="vertical-space">Search results for "<?php the_search_query(); ?>"</h2>
    <?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>

    <div class="post" id="post-<?php the_ID(); ?>">
      <h3 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
      <p class="meta"><small>Posted on <?php the_time('F jS, Y') ?> by <?php the_author() ?> <?php edit_post_link('Edit', ' | ', ''); ?></small></p>
      <div class="entry">
        <?php the_excerpt(); ?>
      </div>
      <div class="info">
        <p class="links">&raquo; <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></p>
        <p class="tags" id="vertical-space"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/tag.png" &nbsp; >  <?php the_tags(); ?></p>
      </div>
    </div>
    
    <?php endwhile; ?>

    <?php posts_nav_link( ' -- ', '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/img/left.png" />' . ' Back to Previous Results', 'More Results ' . '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/img/right.png" />' ); ?>

    <?php else : ?>
    
    <h2 class="center">No Results Found</h2>
    <p class="center">Sorry, nothing came up in this search.</p>
    
    <?php endif; ?>
    <?php get_footer(); ?>
  </div>
</div>


<?php get_sidebar(); ?>