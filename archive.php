<?php get_header();?>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="card">
					<h2 class="card-header page-title"><?php echo single_cat_title();?></h2>
					<div class="card-block">
						<?php while(have_posts()) : the_post();?>
						<?php the_title();?>
						<?php the_excerpt();?>
						<?php endwhile;?>
					</div>
				</div>
				<?php pagination();?>
			</div>
			<div class="col-md-6">
				<?php get_sidebar();?>
			</div>
		</div>
	</div>
<?php get_footer();?>