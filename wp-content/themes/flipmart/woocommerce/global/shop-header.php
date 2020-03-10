<?php
//Check.
if( !yog_helper()->get_option('top-bar', 'raw', false, 'options'  ) ){
    return;    
}
?>
<div class="clearfix filters-container m-t-10">
  <div class="row">
  
    <div class="col col-sm-3 col-md-2">
      <div class="filter-tabs">
        <ul id="filter-tabs" class="nav nav-tabs nav-tab-box nav-tab-fa-icon">
          <?php 
               $yog_grid_active = $yog_list_active = '';
                if( isset( $_GET['shop'] ) && !isset( $_COOKIE['gridcookie'] )):
                    if( $_GET['shop'] == 'grid' ){
                       $yog_grid_active = 'active';
                    }else{
                       $yog_list_active = 'active'; 
                    }
                elseif( isset( $_COOKIE['gridcookie'] ) ):
                     if( $_COOKIE['gridcookie'] == 'grid' ){
                       $yog_grid_active = 'active';
                    }else{
                       $yog_list_active = 'active'; 
                    }          
                else:
                    if( yog_helper()->get_option( 'shop-layout', 'raw', 'grid', 'options' ) == 'grid' ){
                       $yog_grid_active = 'active';
                    }else{
                       $yog_list_active = 'active'; 
                    }
                endif;
          ?>  
          <li class="grid-item <?php echo $yog_grid_active; ?>"> <a data-toggle="tab" href="#grid-container"><i class="icon fa fa-th-large"></i><?php echo esc_html__( 'Grid', 'flipmart' ); ?></a> </li>
          <li class="list-item <?php echo $yog_list_active; ?>"><a data-toggle="tab" href="#list-container"><i class="icon fa fa-th-list"></i><?php echo esc_html__( 'List', 'flipmart' ); ?></a></li>
        </ul>
      </div>
    </div>
    
    <div class="col col-sm-6 col-md-6">
        <?php 
            //Short Filter
            if( yog_helper()->get_option( 'shop-filter', 'raw', false, 'options' )  ){
                woocommerce_catalog_ordering();
            }
         ?>
    </div>
  
    <div class="col col-sm-3 col-md-4 text-right">
      <?php yog_action( 'products_display_filter' ) ?> 
    </div>

  </div>
</div>