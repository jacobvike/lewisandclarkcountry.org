<?php
/*
Template Name: Home Page
*/
?>
<?php get_header();?>
<?php the_post();?>
<style type="text/css">
	body{
		background-image:url(<?php echo wp_get_attachment_image_url(get_field('bg'), 'full');?>);
		background-repeat: no-repeat;
		background-size: cover;
		background-position: center top;
	}
</style>


	<div class="row">
		<div class="col-12 text-center">
			<a href="<?php bloginfo('url');?>" title="<?php bloginfo('name');?>">
				<?php echo wp_get_attachment_image(get_field('banner'), 'full', false, array('class'=>'img-fluid'));?>
			</a>
		</div>
	</div>
	<div class="row">
		<nav class="col-12 text-center p-sm-3" style="color:#fff; background: <?php the_field('color');?>">
			(subpages)
		</nav>
	</div>
	<div class="row">
		<div class="col-sm-6 p-sm-5">
			<?php the_content();?>
		</div>
		<div class="col-sm-6 p-sm-5">
			<?php foreach(get_field('gallery') as $v):?>
			<?php echo wp_get_attachment_image($v['id'], 'large', false, array('class'=>'img-fluid'));?>
			<?php endforeach;?>
		</div>
	</div>
	<div class="row">
		<div class="col-12 text-center">
			<?php foreach(get_field('logos') as $v):?>
			<?php echo wp_get_attachment_image($v['id'], 'full', false, array('class'=>'img-fluid'));?>
			<?php endforeach;?>
		</div>
	</div>

<?php get_footer();?>