			<div class="row">
				<footer role="contentinfo">
				
					<div id="inner-footer" class="clearfix">
			          <hr />
			          <div id="widget-footer" class="clearfix row">
			            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer1') ) : ?>
			            <?php endif; ?>
			            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer2') ) : ?>
			            <?php endif; ?>
			            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer3') ) : ?>
			            <?php endif; ?>
			          </div>
						
						<div class="row">
							<nav class="secondary-degradate clearfix">
								<?php wp_bootstrap_footer_links(); // Adjust using Menus in Wordpress Admin ?>
							</nav>
						</div> <!-- end div row -->
						<div class="tpc-design row">
							<div class="container">
								<p class="pull-right"><a href="http://macfaen.es" id="credit320" title="Asesoría de comunicación y diseño">macfaen.es</a></p>
						
								<p class="attribution">&copy; <?php bloginfo('name'); ?></p>
							</div> <!-- end #container -->
					
						</div> <!-- end div row -->
					</div> <!-- end #inner-footer -->
					
				</footer> <!-- end footer -->
			
			</div> <!-- end div row footer -->

		</div> <!-- end #container -->
				
		<!--[if lt IE 7 ]>
  			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->

			<?php wp_footer(); // js scripts are inserted using this function ?>

		<!-- remove this for production -->

		<script src="//localhost:35729/livereload.js"></script>

	</body>

</html>