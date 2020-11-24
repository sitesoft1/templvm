<?php
/**
 * Template Name: disqus
 * Template Post Type: page
 * @package WordPress
 * @subpackage templvm
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); // вывод атрибутов языка ?>>
<head>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Roma, TEMPLVM, ROMAN TEMPLE, ALBA SARMATA, Poltava, Ukraine" />
<meta property="og:title" content="THE DEDICATION of the first pvblic ROMAN TEMPLE since CLASSICAL ANTIQUITY"/>
<meta property="og:type" content="Roma, TEMPLVM, ROMAN TEMPLE, ALBA SARMATA, Poltava, Ukraine"/>
<meta property="og:url" content="http://templvm.org/"/>
<meta property="og:image" content="/wp-content/themes/templvm/images/banner.jpg"/>
<meta name="p:domain_verify" content="16248160a19644d1817b2ca6cf4bd891"/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->

<!-- font-awesome-icons -->
<link href="/wp-content/themes/templvm/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
<link rel="stylesheet" href="/wp-content/themes/templvm/assets/css/main.css" />
<link href="/wp-content/themes/templvm/css/style.css" rel="stylesheet" type="text/css" media="all" />
<?/*
<link href="/wp-content/themes/templvm/css/bootstrap-responsive.css" rel="stylesheet" type="text/css" media="all" />
<link href="/wp-content/themes/templvm/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
*/?>
<link href="/wp-content/themes/templvm/css/style2.css" rel="stylesheet" type="text/css" media="all" />
<script src='https://www.google.com/recaptcha/api.js'></script>


<script src="/wp-content/themes/templvm/assets/js/jquery.min.js"></script>
            <script src="/wp-content/themes/templvm/assets/js/jquery.scrolly.min.js"></script>
            <script src="/wp-content/themes/templvm/assets/js/jquery.dropotron.min.js"></script>
            <script src="/wp-content/themes/templvm/assets/js/jquery.scrollex.min.js"></script>
            <script src="/wp-content/themes/templvm/assets/js/skel.min.js"></script>
            <script src="/wp-content/themes/templvm/assets/js/util.js"></script>
            <!--[if lte IE 8]><script src="/wp-content/themes/templvm/assets/js/ie/respond.min.js"></script><![endif]-->
            <script src="/wp-content/themes/templvm/assets/js/main.js"></script>
            <script src="/wp-content/themes/templvm/js/jquery-latest.js"></script>
            <script src="/wp-content/themes/templvm/bootstrap/js/bootstrap.min.js"></script>
			 <script id="dsq-count-scr" src="//templvm-1.disqus.com/count.js" async></script>
	<script type="text/javascript" src="/wp-content/themes/templvm/js/jQuery.yuukCountdown.js" ></script>
    <script>
        $(function(){
            $('#js-countDown').yuukCountDown({
                starttime: '2017/03/15 00:00:00',
                endtime: '2017/8/06 10:59:59',
                notStartCallBack: function(time){
                    console.log("Ready");
                },
                startCallBack: function(time){
                    console.log("Running");
                },
                endCallBack: function(time){
                    console.log("Complete");
                }
            });
        });
    </script>

<?php /* RSS и всякое */ ?>
	<link rel="alternate" type="application/rdf+xml" title="RDF mapping" href="<?php bloginfo('rdf_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php bloginfo('rss_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="Comments RSS" href="<?php bloginfo('comments_rss2_url'); ?>">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php /* Все скрипты и стили теперь подключаются в functions.php */ ?>

<?php wp_head(); // необходимо для работы плагинов и функционала ?>
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
					<div class="main">
					<?php if ( have_posts() ) while ( have_posts() ) : the_post(); // старт цикла ?>
					<!-- show content -->
						<?php //the_title(); // заголовок поста ?>
						<?php the_content(); // контент ?>
		<!-- show content END-->
				<?php endwhile; // конец цикла ?>
	</div>
	
	        
<?php wp_footer(); ?>
</body>
</html>


