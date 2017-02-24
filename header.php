<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <!-->

<html <?php language_attributes(); ?> class="no-js">
<!--<![endif]-->

    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="content-type" content="text/html; charset=<?php bloginfo('charset'); ?>">
        <meta http-equiv="content-language" content="<?php bloginfo('language'); ?>">
        <meta name="viewport" content="width=device-width">
        <?php wp_head();?>
    </head>
    <body <?php body_class(); ?>>
        <div class="container" style="background: #F2DEA5;">
	        
	        <div class="row" style="background-color: #7A4427;">
		        <div class="col-sm-12">
					<nav class="navbar navbar-toggleable-sm" id="menu-sections">
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar">&#9776;</button>
						<div class="collapse navbar-collapse" id="collapsingNavbar">
							<?php wp_nav_menu(array(
								'theme_location'=>'header',
								'menu_class'=>'nav navbar-nav mx-auto',
								'container'=>false,
								'menu_class'=>'nav navbar-nav mx-auto',
								'fallback_cb'=>'__return_false',
								'items_wrap'=>'<ul id="%1$s" class="%2$s">%3$s</ul>',
								'depth'=>2,
								'walker'=> new bootstrap_4_walker_nav_menu()));
							?>
						</div>
					</nav>
		        </div>
	        </div>
	        
