<?php get_header(); ?>

    <!-- Main jumbotron -->
    
      <div class="container-fluid">
        <div class="jumbotron">
            <div id="header-image">
              
      <!-- Makes text content editable through Edit Page "Home" -->        
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <?php the_content(); ?>
    
        <?php endwhile; endif; ?>
            </div>
        </div>
          
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
          
        <div class="col-md-4">
            <h2><img class="icon" src="wp-content/themes/travel/img/people.png"/></h2>
    <p>Experience the local community through work, study and volunteering.  Opportunities are available ranging from a few hours to years.</p>
        </div>  
          
        <div class="col-md-4">
            <h2><img class="icon" src="wp-content/themes/travel/img/tunnel.png"/></h2>
    <p>Make long distance journeys by train.  Hike or bike to the next city ... or country.  See more of the country by trying out different means of travel. </p>
        </div>    
          
        <div class="col-md-4">
            <h2><img class="icon" src="wp-content/themes/travel/img/dollar.png"/></h2>
    <p>Save money without sacrificing the quality of your experience.  Try the street food or rent an apartment from a local. </p>
        </div>      
               
    </div>      
   


<?php get_footer(); ?>