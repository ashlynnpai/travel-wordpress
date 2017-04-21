<?php get_header(); ?>

    <!-- Main jumbotron -->
    
      
    <div class="jumbotron">
        <div id="header-image">
      
    <!-- Makes text content editable through Edit Page "Home" -->        
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <?php the_content(); ?>

            <?php endwhile; endif; ?>
        </div>
    </div>
    <div class="container-fluid">     
    <!-- Rows -->
    <!-- First row uses widgets to control content -->
    <div class="row" id="row-one">
        <div class="col-md-6">
            
            <?php if ( dynamic_sidebar( 'front-left' ) ); ?>
        </div>
          
        <div class="col-md-6">
    
             <?php if ( dynamic_sidebar( 'front-right' ) ); ?>
        </div>
    </div>   
          
    <div class="row" id="row-two">      
        <div class="col-md-10 col-md-offset-1 text-center">        
            <div class="col-md-4 icon-info">
                <h2><img src="wp-content/themes/travel/img/signs.png"/></h2>
        <p>Experience the local community as more than a tourist through work, study and volunteering. Make your vacation more than a vacation.</p>
            </div>  
              
            <div class="col-md-4">
                <h2><img src="wp-content/themes/travel/img/bus.png"/></h2>
        <p>Travel the slow way. Go by bus, car, train, boat, or bike. Walk, hike or ride a horse or camel to the next town or the next country. Some of the best parts are missed by flying.</p>
            </div>    
              
            <div class="col-md-4">
                <h2><img src="wp-content/themes/travel/img/food.png"/></h2>
        <p>Save money without sacrificing the quality of your experience.  Try the street food or the local produce and rent an apartment from a local, or do a homestay or farmstay.</p>
            </div>      
        </div>           
    </div>      
   
<!-- Free icons by Round Icons distributed by tympanus.net at http://tympanus.net/codrops/2014/10/17/freebie-travel-ecology-icon-set/ -->

<?php get_footer(); ?>