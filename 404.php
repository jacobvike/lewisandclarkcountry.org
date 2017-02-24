<?php get_header();?>
	<div class="container">
	<?php while(have_posts()) : the_post();?>
		<div class="row">
			<div class="col-sm-6">
				<?php the_title();?>
			</div>
			<div class="col-sm-6">
				<?php the_content();?>
			</div>
		</div>
	<?php endwhile;?>
	</div>
	
<?php get_footer();?>