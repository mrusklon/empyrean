<?php
/**
 * @package Frank
 */
?>
<!DOCTYPE html>

<!--[if IE 7 | IE 8]>
<html class="ie" lang="en-US">
<![endif]-->
<!--[if (gte IE 9) | !(IE)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>



<style type="text/css">
    .footerNav ul{
        margin: 0 !important;
    }
</style>




	<title>
		<?php
		wp_title( '&mdash;', true, 'right' );
		bloginfo( 'name' );
		?>
	</title>

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../../../../_main.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body id="page" <?php body_class(); ?>>
	<!--[if lt IE 9]>
		<div class="chromeframe">Your browser is out of date. Please <a href="http://browsehappy.com/">upgrade your browser </a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a>.</div>
	<![endif]-->


<div class="selfHeader">
	<header>
    <div class="navigation hidden-xs">
        <div class="logo">
            <div id="logo" style="display: block;"><a href="/"><img height="100" src="http://empyrean.moscow/img/logo_b5.png" alt="empyrean"></a></div>
            <p id="addres" style="top: 35px;">БОЛЬШАЯ ДМИТРОВКА, Д. 9, СТР. 1</p>
            <div id="w" class="callback" style="top: 72px;">
                <a class="fancybox" href="http://empyrean.moscow/contacts.php">СВЯЗАТЬСЯ С НАМИ</a>
            </div>
            <div id="w2" class="headerPhone" style="top: 72px;">
                <a href="tel:+74953749697">+7 495 374-96-97</a>
            </div>
        </div>

        <nav class="header1nav">
            <ul>
                <div id="logo2" style="position: absolute; top: -3px; left: 15px; display: none;">
                    <img width="30" src="http://empyrean.moscow/img/logo_b5.png" alt=""></div>
                <li><a href="http://empyrean.moscow/">Главная</a></li>
                <li><a href="http://empyrean.moscow/overcoatsexamples.php">Пальто</a></li>
                <li><a href="http://empyrean.moscow/suitsexamples.php">Костюмы</a></li>
                <li><a href="http://empyrean.moscow/shirts.php">Сорочки</a></li>
                <!--                <li><a href="../accessories.php">Аксесуары</a></li>-->
                <li><a href="http://empyrean.moscow/about.php">О нас</a></li>
                <li class="menuActive"><a href="http://empyrean.moscow/blog.php">Блог</a></li>
                <li><a href="http://empyrean.moscow/contacts.php">Контакты</a></li>
                <li class="gold"><a href="http://empyrean.moscow/certificate.php">Сертификаты</a></li>
            </ul>
        </nav>
    </div>

    <nav class="navbar navbar-default navbar-fixed-top visible-xs">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img width="30" src="http://empyrean.moscow/img/logo_blue5.png" alt=""></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav mobileNav">

                    <li><a href="http://empyrean.moscow/">Главная</a></li>
                    <li><a href="http://empyrean.moscow/overcoatsexamples.php">Пальто</a></li>
                    <li><a href="http://empyrean.moscow/suitsexamples.php">Костюмы</a></li>
                    <li><a href="http://empyrean.moscow/shirts.php">Сорочки</a></li>
                    <li><a href="http://empyrean.moscow/about.php">О нас</a></li>
                    <li><a href="http://empyrean.moscow/blog.php">Блог</a></li>
                    <li><a href="http://empyrean.moscow/contacts.php">Контакты</a></li>
                    <li class="gold"><a href="http://empyrean.moscow/certificate.php">Сертификаты</a></li>

                </ul>

            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</header>
</div>


<div class="container">
	<header id="page-header" class="row">
		

		<?php
			$header_image = get_header_image();
			if ( $header_image ) :
				if ( function_exists( 'get_custom_header' ) ) {
					$header_image_width = get_theme_support( 'custom-header', 'width' );
				} else {
					$header_image_width = HEADER_IMAGE_WIDTH;
				}
				?>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
			<?php
				if ( is_singular() && has_post_thumbnail( $post->ID ) &&
						( $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), array( $header_image_width, $header_image_width ) ) ) &&
						$image[1] >= $header_image_width ) :
					echo get_the_post_thumbnail( $post->ID, 'post-thumbnail' );
				else :
					if ( function_exists( 'get_custom_header' ) ) {
						$header_image_width  = get_custom_header()->width;
						$header_image_height = get_custom_header()->height;
					} else {
						$header_image_width  = HEADER_IMAGE_WIDTH;
						$header_image_height = HEADER_IMAGE_HEIGHT;
					}
					?>
				<img src="<?php header_image(); ?>" width="<?php echo $header_image_width; ?>" height="<?php echo $header_image_height; ?>" alt="" />
			<?php endif; ?>
		</a>
		<?php endif; ?>
		<?php if ( is_active_sidebar( 'widget-subheader' ) ) : ?>
		<div id='sub-header' class='row'>
			<?php if ( !dynamic_sidebar( 'Sub Header' ) ) : ?>
			<?php endif; ?>
		</div>
		<?php endif; ?>
	</header>
