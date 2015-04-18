<?php get_header(); ?>
 
    <div class="container-fluid">
        <div class="row not-found">
            <div class="col-md-9">
                <article id="post-0" <?php post_class( 'et_pb_post not_found' ); ?>>
                    <p id="not-found_text"><?php esc_html_e('Sorry, there is no one home here.'); ?></p>

                </article> 
            </div> 
 
            <?php get_sidebar(); ?>
        </div>
      <p>Photo by phphoto2010, CC by ND 2.0</p>
    </div> 
 
<?php get_footer(); ?>
