<?php
/**
 * Шаблон рубрики (category.php)
 * @package WordPress
 * @subpackage templvm
 */
get_header(); // подключаем header.php ?> 
<div id="main" class="wrapper style1">
	<div class="container">
	
		<div class="row">
			<div class="<?php content_class_by_sidebar(); // функция подставит класс в зависимости от того есть ли сайдбар, лежит в functions.php ?>">
				<h2><?php single_cat_title(); // название категории ?></h2>
				<?php if (have_posts()) : while (have_posts()) : the_post(); // если посты есть - запускаем цикл wp ?>
					<?php get_template_part('loop'); // для отображения каждой записи берем шаблон loop.php ?>
				<?php endwhile; // конец цикла
				else: echo '<p>Нет записей.</p>'; endif; // если записей нет, напишим "простите" ?>	 
				<?php pagination(); // пагинация, функция нах-ся в function.php ?>
			</div>
			<?php get_sidebar(); // подключаем sidebar.php ?>
		</div>
		
	</div>
</div>
<?php get_footer(); // подключаем footer.php ?>