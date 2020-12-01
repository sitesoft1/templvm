<?php
/**
 * Template Name: altar_of_yours
 * Template Post Type: page
 * @package WordPress
 * @subpackage templvm
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); // вывод атрибутов языка ?>>
	<head>
		<title>The altar of yours - TEMPLVM•ORG</title>
		<meta charset="<?php bloginfo( 'charset' ); // кодировка ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:image" content="/wp-content/themes/templvm/images/what_is_templvm.jpg"/>
		<!--[if lte IE 8]><script src="/wp-content/themes/templvm/assets/js/ie/html5shiv.js"></script><![endif]-->
		<!-- <link href="/wp-content/themes/templvm/bootstrap/css/bootstrap-theme.css" rel="stylesheet"> -->
		<link href="/wp-content/themes/templvm/bootstrap/css/bootstrap.css" rel="stylesheet">
		<!-- <link href="/wp-content/themes/templvm/bootstrap/css/bootstrap.css" rel="stylesheet"> -->
		<link rel="stylesheet" href="/wp-content/themes/templvm/assets/css/p_main.css" />
		<link rel="stylesheet" href="/wp-content/themes/templvm/css/altar.css" />

		<!--[if lte IE 9]><link rel="stylesheet" href="/wp-content/themes/templvm/assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="/wp-content/themes/templvm/assets/css/ie8.css" /><![endif]-->
		
<style type="text/css">
#text_more {
    height: 100px;
    width: 100%;
    transition: 1s;
    -moz-transition:all 1s;
    -webkit-transition:all 1s;
    -o-transition:all 1s;
}
</style>

<script src="/wp-content/themes/templvm/assets/js/jquery.min.js"></script>

<script>
 $(function () {
    var h = 500;
    var t = $('#text_more');
    var max = t[0].scrollHeight;
    var min = 22;

    $('.read-next').on('click', function (event) {
        var H = t.height();

        if (H === max) {
           H = min;
        } else if (H + h > max) {
           H = max;
        } else {
           H += h;
        }

        t.height(H);

        $(this).text(H === max ? 'REDUCE' : 'Read More...');

        return false;
      });
  });
</script>
		
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

	<!-- Scripts -->
			 <script src="/wp-content/themes/templvm/assets/js/jquery.scrolly.min.js"></script>
			<script src="/wp-content/themes/templvm/assets/js/jquery.dropotron.min.js"></script> 
			<script src="/wp-content/themes/templvm/assets/js/jquery.scrollex.min.js"></script>
			 <script src="/wp-content/themes/templvm/assets/js/skel.min.js"></script> 
			 <script src="/wp-content/themes/templvm/assets/js/util.js"></script> 
			<!--[if lte IE 8]><script src="/wp-content/themes/templvm/assets/js/ie/respond.min.js"></script><![endif]-->
			 <script src="/wp-content/themes/templvm/assets/js/main.js"></script> 
			<!-- Go to www.addthis.com/dashboard to customize your tools --> 
			
        <!--<script src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5923f166e4a2d866"></script>-->
        
			<script src="http://code.jquery.com/jquery-latest.js"></script>
			<script src="/wp-content/themes/templvm/bootstrap/js/bootstrap.min.js"></script>
		<!-- Scripts END -->
		
		<style>
		#header {
    background: rgba(120, 10, 9, 0.965);
    box-shadow: 0 0 0.25em 0 rgba(215, 215, 215, 0.25);
    cursor: default;
    height: 3.5em;
    left: 0;
    line-height: 3.5em;
    position: absolute !important;
    top: 0;
    width: 100%;
    z-index: 100;
}
		</style>
</head>
<body <?php body_class(); // все классы для body ?>>
	<?php wp_body_open(); ?>

			<!-- Header -->
				<header id="header">
					<h1 id="logo"><a href="/">TEMPLVM•ORG</a></h1>
					
					<nav id="nav">
				<?php				
				$args = array( // опции для вывода верхнего меню, чтобы они работали, меню должно быть создано в админке
								'theme_location' => 'top', // идентификатор меню, определен в register_nav_menus() в functions.php
								'container'=> false, // обертка списка, тут не нужна
						  		'menu_id' => 'top-nav-ul', // id для ul
						  		'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
								'menu_class' => 'top-menu', // класс для ul, первые 2 обязательны
						  		'walker' => new bootstrap_menu(true) // верхнее меню выводится по разметке бутсрапа, см класс в functions.php, если по наведению субменю не раскрывать то передайте false		  		
					  			);
								wp_nav_menu($args); // выводим верхнее меню
							
				?>		
					</nav>	
				</header>

            <div id="colleges-header">
                <h1 class="text-h1-home">The first pvblic temple of roman tradition <br>bvilt since classic antiqvity</h1>
            </div>

			<!-- Main -->
				<div class="main" class="wrapper style1">
					<div class="container">
					
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); // старт цикла ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> <?php // контэйнер с классами и id ?>
						<header class="major major-default-page">
							<br><h2><?php the_title(); ?></h2>
							<p></p>
						</header>
						
						<?php the_content(); ?>
				
				</article>
				<?php endwhile; // конец цикла ?>
						
					</div>
				</div>
				
			<!-- Footer -->
				<footer id="footer">
				<?php get_template_part( 'template-parts/footer/footer', 'widgets' ); ?>
				<div class="col-md-12">
					<?php $args = array( // опции для вывода нижнего меню, чтобы они работали, меню должно быть создано в админке
						'theme_location' => 'bottom', // идентификатор меню, определен в register_nav_menus() в function.php
						'container'=> false, // обертка списка, false - это ничего
						'menu_class' => 'nav nav-pills bottom-menu', // класс для ul
				  		'menu_id' => 'bottom-nav', // id для ul
				  		'fallback_cb' => false
				  	);
					wp_nav_menu($args); // выводим нижние меню
					?>
				</div>
				
					<ul class="icons">
						<li><a href="/" class="icon alt fa-university"><span class="label">Home</span></a></li>
						<li><a href="http://facebook.com/templvm.org" target="_blank" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="http://twitter.com/TemplvmOrg" target="_blank" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="https://youtube.com/user/MOctaviusCorvus/" target="_blank" class="icon alt fa-youtube"><span class="label">YouTube</span></a></li>
						<li><a href="http://instagram.com/templvm_project/" target="_blank" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="http://pinterest.com/corvvs/templvmorg" target="_blank" class="icon alt fa-pinterest"><span class="label">Pinterest</span></a></li>
						<li><a href="http://plus.google.com/u/2/communities/104957581101912910276" target="_blank" class="icon alt fa-google-plus-circle"><span class="label">Google +</span></a></li>
					</ul>
					<ul class="copyright">
						<li>All rights reserved. &copy; TEMPLVM • ORG</li><li>COL ALBA SARMATA • POLTAVA • UKRAINE</li>
					</ul>
				</footer>
				
<script>
	$('[data-toggle="modal"]').click(function () {
		var modal = $($(this).attr('href'));

		if (modal.is('#SendPrayerModal') || modal.is('#OrderRitualModal')) {
		    const altarModal = $(this).closest('.modal');

		    if (altarModal.length) {
                var altarName = altarModal.find('input[name="altar_name"]').val();

		        modal.find('input[name="altar_name"]').val(altarName);
            }
        }

        if (!modal.is('[data-modal-customize]')) return;

        var modalTitle = modal.find('.altarModal__title');
		var modalLogoLink = modal.find('.altarModal__logo');
		var modalLogoImage = modal.find('.altarModal__logo img');
		var modalInfo = modal.find('.altarModal__info');
		var modalInfo_secondary = modal.find('.altarModal__info_secondary');
		var modalImage = modal.find('.altarModal__image');
		var modalName = modal.find('input[name="altar_name"]');

		var name = this.name;
		var logo = $(this).data('logo');
		var page = $(this).data('page');
		var title = $(this).data('title');
		var title2 = $(this).data('title2');
		var img = $(this).data('image');
		var title_donors = $(this).data('title-donors');

		modalTitle.html(name);
		page ? modalLogoLink.attr('href', page) : modalLogoLink.removeAttr('href');
		modalLogoImage.attr('src', logo || '/wp-content/themes/templvm/images/modal-logo.jpg');
		modalInfo.html(title);
		modalInfo_secondary.html(title2);
		modalImage.attr('src', img);
		modalName.attr('value', name);
		$('.text_modal_donors').html(title_donors || '');
	});
	
	 
	 
$( document ).ready(function() {
	$(window).bind("load", function() {
		var urlString = location.hash;
		urlString = urlString.replace(/%20/g, ' ');
		urlString = urlString.replace('#', '');
		//alert(urlString);
		$("a[name*='"+urlString+"']").click();
	});
});
</script>

<?php wp_footer(); ?>
	</body>
</html>
