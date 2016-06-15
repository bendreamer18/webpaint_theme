<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >

    <?php if(is_page_template('page-home.php') or is_blog()){ ?>
    
    <?php  } ?>


<?php /* ?>
    <!-- Header -->
    <nav class="main-menu">
        <div class="menu-align">
            <!-- Main Menu Left -->
            <?php
            if ( has_nav_menu( 'header_left_menu' ) ) {
                wp_nav_menu(array(
                    'theme_location'=> 'header_left_menu',
                    'menu'			=> 'Header Left Menu',
                    'menu_class'	=> 'menu menu-left cf',
                    'walker'		=> new Aletheme_Nav_Walker(),
                    'container'		=> '',
                ));
            }
            ?>

            <!-- Logo -->
            <ul class="logo">
                <?php if(ale_get_option('sitelogo')){ ?>
                    <a href="<?php echo home_url(); ?>/" class="customlogo"><img src="<?php echo ale_get_option('sitelogo'); ?>" /></a>
                <?php } else { ?>
                    <a href="<?php echo home_url(); ?>/" class="alelogo"><?php echo bloginfo('name'); ?></a>
                <?php } ?>
            </ul>



            <!-- Main Menu Right -->
            <?php
            if ( has_nav_menu( 'header_right_menu' ) ) {
                wp_nav_menu(array(
                    'theme_location'=> 'header_right_menu',
                    'menu'			=> 'Header Right Menu',
                    'menu_class'	=> 'menu menu-right cf',
                    'walker'		=> new Aletheme_Nav_Walker(),
                    'container'		=> '',
                ));
            }
            ?>

            <!-- DropDown -->
            <div class="menu-click-drop">
                <a><?php _e('MENU','aletheme'); ?></a>

                <?php
                if ( has_nav_menu( 'mobile_menu' ) ) {
                    wp_nav_menu(array(
                        'theme_location'=> 'mobile_menu',
                        'menu'			=> 'Mobile Menu',
                        'menu_class'	=> 'dropdown-menu cf',
                        'walker'		=> new Aletheme_Nav_Walker(),
                        'container'		=> '',
                    ));
                }
                ?>
            </div>
        </div>
    </nav>
    <?php */ ?>

    <nav class="navbar navbar-inverse navbar-fixed-top"> 
        <div class="container" id="nav-container"> 
            <div class="navbar-header"> 
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> 
                    <span class="sr-only">Toggle navigation</span> 
                    <span class="icon-bar"></span> 
                    <span class="icon-bar"></span> 
                    <span class="icon-bar"></span> 
                </button> 
                <a class="navbar-brand" href="#" id="logo"> <img src="<?php echo ale_get_option('sitelogo'); ?>" alt=""> </a> 
            </div> 
            <div id="navbar" class="navbar-collapse collapse"> 
                <ul class="nav navbar-nav" id="top_menu"> 
                   <?php
                if ( function_exists( 'wp_nav_menu' ) )
                    wp_nav_menu( 
                        array( 
                        'theme_location' => 'custom-menu',
                        'fallback_cb'=> 'custom_menu',
                        'container' => 'ul',
                        'menu_id' => 'nav',
                        'menu_class' => 'nav navbar-nav') 
                    );
                else custom_menu();
                ?>
                </ul> 
            </div><!-- /.nav-collapse —>  -->
        </div> 

    </nav>

        <!-- We are Block -->
    <!-- <div class="row" id="weare_row">
        <div id="we-are-text">
            <p>We are <span id="webpaint"> <?php echo ale_get_option('company-name'); ?> </span></p>
            <span id="small_weare"> <?php echo ale_get_option('we-want'); ?> </span>
        </div>

        <div align="center"><button id="weare_button">See Portfolio</button></div>
    </div> -->
