<div class="toolbar">
    <div class="pager">
       <?php  
          if( yog_helper()->get_option( 'shop-filter', 'raw', false, 'options' )  ){
             woocommerce_catalog_ordering();
          } 
                    
          if( yog_helper()->get_option( 'result-count', 'raw', false, 'options' ) ){
             woocommerce_result_count();
          }  
          
          if( yog_helper()->get_option( 'top-pagination', 'raw', false, 'options' ) ){
             yog_wp_paginate( array( 'before' => '<div class="pages">', 'after' => '</div>', 'class' => 'pagination', 'title' => false, 'nextpage' => '<i class="fa fa-angle-right"></i>', 'previouspage' => '<i class="fa fa-angle-left"></i>' ) );    
          }  
       ?> 
    </div>
    <div class="sorter">
        <?php 
           $yog_grid_active = $yog_list_active = '';
            if( isset( $_GET['shop'] ) && !isset( $_COOKIE['gridcookie'] )):
                if( $_GET['shop'] == 'grid' ){
                   $yog_grid_active = 'button-active';
                }else{
                   $yog_list_active = 'button-active'; 
                }
            elseif( isset( $_COOKIE['gridcookie'] ) ):
                 if( $_COOKIE['gridcookie'] == 'grid' ){
                   $yog_grid_active = 'button-active';
                }else{
                   $yog_list_active = 'button-active'; 
                }          
            else:
                if( yog_helper()->get_option( 'shop-layout', 'raw', 'grid', 'options' ) == 'grid' ){
                   $yog_grid_active = 'button-active';
                }else{
                   $yog_list_active = 'button-active'; 
                }
            endif;
      ?>  
      <div class="view-mode"> 
          <a data-toggle="tab" href="#grid-container" class="button-grid <?php echo $yog_grid_active; ?>" ><?php echo esc_html__( 'Grid', 'flipmart' ); ?></a> 
          <a data-toggle="tab" href="#list-container" class="button-list <?php echo $yog_list_active; ?>"><?php echo esc_html__( 'List', 'flipmart' ); ?></a>
      </div>
    </div>
</div>