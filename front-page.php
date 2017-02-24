<?php get_header();?>
<?php the_post();?>
	<div class="row">
		<div class="col-12 text-center">
			<a href="<?php bloginfo('url');?>" title="<?php bloginfo('name');?>">
				<?php echo wp_get_attachment_image(get_field('banner', 63), 'full', false, array('class'=>'img-fluid'));?>
			</a>
		</div>
	</div>
	<div class="row">
		<div class="col-12 text-center p-3" style="color:#fff; background: <?php the_field('color', 63);?>">
			Welcome! Click the Lewis & Clark Trail region you want to explore...
		</div>
	</div>
	<div class="row">
		<div class="col-md-8 p-5">
			<h2>Go Adventuring!</h2>
			<?php wp_nav_menu(array('theme_location'=>'primary', 'depth'=>1));?>			
		</div>
		<div class="col-md-4">
			(autotour)
		</div>
	</div>

<?php get_footer();?>