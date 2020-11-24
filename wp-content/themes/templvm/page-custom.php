<?php
/**
 * Страница с кастомным шаблоном (page-custom.php)
 * @package WordPress
 * @subpackage templvm
 * Template Name: Страница с кастомным шаблоном
 */
get_header(); // подключаем header.php ?>
<div id="main" class="wrapper style1">
	<div class="container">
	
		<div class="row">
			<div class="<?php content_class_by_sidebar(); // функция подставит класс в зависимости от того есть ли сайдбар, лежит в functions.php ?>">
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); // старт цикла ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> <?php // контэйнер с классами и id ?>
						
				<?php if(the_title('','',false)){ ?>
						<header class="major">
						<h2><?php the_title(); ?></h2>
						</header>
				<?php } ?>
						
						<section id="content">
						<?php the_content(); // контент ?>
						</section>
						
					</article>
				<?php endwhile; // конец цикла ?>
			</div>
			<?php get_sidebar(); // подключаем sidebar.php ?>
		</div>
	
	</div>
</div>
<?php get_footer(); // подключаем footer.php ?>