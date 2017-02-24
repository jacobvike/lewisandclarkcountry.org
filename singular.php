<?php get_header();?>
	<div class="container">
		<div class="row p-2">
			<div class="col-md-8">
				<div class="">
					<div class="card-block">
						<h2 class="card-header page-title"><?php the_title();?></h2>
						<?php while(have_posts()) : the_post();?>
						<?php the_post_thumbnail('full', array('class'=>'img-fluid'));?>
						<?php the_content();?>
						<?php endwhile;?>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<?php get_sidebar();?>
			</div>
		</div>
	</div>
<?php get_footer();?>