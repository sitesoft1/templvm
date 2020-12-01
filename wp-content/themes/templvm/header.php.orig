<?php
/**
 * Шаблон шапки (header.php)
 * @package WordPress
 * @subpackage templvm
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); // вывод атрибутов языка ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); // кодировка ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- templvm add -->
	<meta property="og:image" content="/wp-content/themes/templvm/images/gratias_ago.jpg"/>

    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">-->
    <link rel="stylesheet" href="/wp-content/themes/templvm/assets/css/p_main.css" />
    
	<!--[if lte IE 9]><link rel="stylesheet" href="/wp-content/themes/templvm/assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="/wp-content/themes/templvm/assets/css/ie8.css" /><![endif]-->
		
		<!-- Scripts -->
		
		<!--[if lte IE 8]><script src="/wp-content/themes/templvm/assets/js/ie/html5shiv.js"></script><![endif]-->
			<script src="/wp-content/themes/templvm/assets/js/jquery.min.js"></script>
			<script src="/wp-content/themes/templvm/assets/js/jquery.scrolly.min.js"></script>
			<script src="/wp-content/themes/templvm/assets/js/jquery.dropotron.min.js"></script>
			<script src="/wp-content/themes/templvm/assets/js/jquery.scrollex.min.js"></script>
			<script src="/wp-content/themes/templvm/assets/js/skel.min.js"></script>
			<script src="/wp-content/themes/templvm/assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="/wp-content/themes/templvm/assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="/wp-content/themes/templvm/assets/js/main.js"></script>
			<!-- Go to www.addthis.com/dashboard to customize your tools -->
			<!--<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5923f166e4a2d866"></script>-->
			
	<!-- templvm add END -->
	<?php /* RSS и всякое */ ?>
	<link rel="alternate" type="application/rdf+xml" title="RDF mapping" href="<?php bloginfo('rdf_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php bloginfo('rss_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="Comments RSS" href="<?php bloginfo('comments_rss2_url'); ?>">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php /* Все скрипты и стили теперь подключаются в functions.php */ ?>

	<!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<?php wp_head(); ?>
</head>
<body <?php body_class(); // все классы для body ?>>
	<?php wp_body_open(); ?>
<!-- Header -->
	<header id="header">
	<h1 id="logo"><a href="/">TEMPLVM•ORG</a></h1>
	
		<nav id="nav">
				<?php $args = array( // опции для вывода верхнего меню, чтобы они работали, меню должно быть создано в админке
								'theme_location' => 'top', // идентификатор меню, определен в register_nav_menus() в functions.php
								'container'=> false, // обертка списка, тут не нужна
						  		'menu_id' => 'top-nav-ul', // id для ul
						  		'items_wrap' => '<ul id="%1$s" class="nav navbar-nav %2$s">%3$s</ul>',
								'menu_class' => 'top-menu', // класс для ul, первые 2 обязательны
						  		'walker' => new bootstrap_menu(true) // верхнее меню выводится по разметке бутсрапа, см класс в functions.php, если по наведению субменю не раскрывать то передайте false		  		
					  			);
								wp_nav_menu($args); // выводим верхнее меню
				?>		
		</nav>
	</header>