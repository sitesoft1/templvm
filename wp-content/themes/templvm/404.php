<?php
/**
 * Страница 404 ошибки (404.php)
 * @package WordPress
 * @subpackage templvm
 */
get_header(); // Подключаем header.php ?>


<div id="main" class="wrapper style1">
	<div class="container">
	
		<div class="row">
			<div class="<?php content_class_by_sidebar(); // функция подставит класс в зависимости от того есть ли сайдбар, лежит в functions.php ?>">
				
				<header class="major">
				<h2>Error 404!</h2>
				</header>
				
				<section id="content">
				<p>Error 404 - Page Not Found</p>
				</section>
				
			</div>
			<?php get_sidebar(); // подключаем sidebar.php ?>
		</div>
		
	</div>
</div>
	
<?php get_footer(); // подключаем footer.php ?>