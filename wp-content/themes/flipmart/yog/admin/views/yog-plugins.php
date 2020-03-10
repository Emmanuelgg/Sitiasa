<?php
$current_theme = wp_get_theme();
if( $current_theme->parent_theme ) {
	$template_dir  = basename( get_template_directory() );
	$current_theme = wp_get_theme($template_dir);
}

$installed_plugins = get_plugins();
$plugins = TGM_Plugin_Activation::$instance->plugins;
?>
<div class="yog-wrap">

	<div class="yog-dashboard">

		<h2 class="h1 yog-align-center"><?php echo esc_html__( 'CKThemes Plugins', 'flipmart' ); ?></h2>

       <div class="yog-info yog-align-center bg-seashell">
          <h4><i class="fa fa-check text-gradient"></i> <?php echo esc_html__( 'Custom and third party plugins', 'flipmart' ); ?></h4>
       </div>

	    <ul class="yog-cards-container clearfix">
	        <?php

			foreach( $plugins as $plugin ) :
				$btn = $btn_class = $class = $status = '';
				$file_path = $plugin['file_path'];

				// Install
				if( ! isset( $installed_plugins[$file_path] ) ) {
					$status = 'not-installed';
				}
				// Active
				elseif ( is_plugin_inactive( $file_path ) ) {
					$status = 'installed';
				}
				// Deactive
				elseif ( is_plugin_active( $file_path ) ) {
					$status = 'active';
				}
			?>
				<li class="yog-card yog-card-is-<?php echo esc_attr( $status ); ?>">

					<div class="yog-card-inner">

						<div class="yog-icon-container">

							<i class="text-gradient fa fa-plug"></i>

						</div>

						<h3><?php echo esc_html( $plugin['name'] ) ?></h3>

						<div class="yog-status"><span><?php echo ucwords( $status ) ?></span></div>

						<p>
							<?php echo esc_html( $plugin['yog_description'] ); ?>
						</p>

						<div class="yog-author">
							By <a href="#"><?php echo esc_html( $plugin['yog_author'] ); ?></a>
						</div>

						<div class="yog-card-footer clearfix">
							<?php yog_helper()->tgmpa_plugin_action( $plugin, $status ); ?>
						</div>

					</div>

				</li>

	        <?php endforeach; ?>
	    </ul>

	</div>

</div>
