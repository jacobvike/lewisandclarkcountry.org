
		<footer class="row text-center mb-5">
			<div class="col-12">
				<div class="p-3" id="footer">
					<?php wp_nav_menu(array('theme_location'=>'footer', 'depth'=>1, 'container'=>'nav', 'container_id'=>'menu-footer'));?>
					<p>
						&copy; 2012-<?php echo date('Y');?> <?php bloginfo('name');?>. <?php bloginfo('description');?>,
					</p>
					<p>
						(866) 283-3204
					</p>
				</div>
			</div>
		</footer>
	</div>
<?php wp_footer();?>
  </body>
</html>