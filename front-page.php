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
            <h2>Heading</h2>
    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
        </div>  
          
        <div class="col-md-4">
            <h2>Heading</h2>
    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
        </div>    
          
        <div class="col-md-4">
            <h2>Heading</h2>
    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
        </div>      
               
    </div>      
   


<?php get_footer(); ?>