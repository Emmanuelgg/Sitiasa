<?php $theme = yog_helper()->get_current_theme(); ?>
<header class="yog-dashboard-header">

	<div class="yog-dashboard-title  clearfix">

		<div class="yog-left">

			<h1>
				<?php printf( esc_html__( 'Welcome to %s!', 'flipmart' ), $theme->name ) ?>
				<div class="yog-label">
					<span><?php printf( esc_html__( 'Latest Update %s', 'flipmart' ), $theme->version ) ?></span>
				</div>
			</h1>

			<p><?php echo esc_html__( 'Thank you for using Flipmart. CKThemes will improve your overall web publishing experience.', 'flipmart' ) ?></p>

	   </div>
	</div>

	<div class="clearfix"></div>

	<ul class="yog-inline-nav yog-clearlist clearfix yog-nav-tabs">
		<li class="yog-left is-active"><a href="<?php echo esc_url( yog_helper()->yog_dashboard_page_url() ); ?>#yog-general"><?php echo esc_html__( 'General', 'flipmart' ) ?></a></li>
		<li class="yog-left"><a href="<?php echo esc_url( yog_helper()->yog_plugin_page_url() ); ?>"><?php echo esc_html__( 'Plugins', 'flipmart' ) ?></a></li>
        <li class="yog-left"><a href="<?php echo esc_url( yog_helper()->yog_dashboard_page_url() ); ?>#yog-changelog" class="no-broder"><?php echo esc_html__( 'Changelog', 'flipmart' ) ?></a></li>
        <li class="yog-right"><a href="https://www.youtube.com/watch?v=uO91k9s6vM0&index=1&list=PLYp76EP6RhnwOkp-TsZD8yFML1O1GPCIn" target="_blank"><i class="color fa fa-youtube-play"></i> <?php echo esc_html__( 'Videos', 'flipmart' ) ?> <i class="fa fa-angle-right"></i></a></li>
	</ul>

</header>
