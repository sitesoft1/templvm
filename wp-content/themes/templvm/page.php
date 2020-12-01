<?php
/**
 * Шаблон обычной страницы (page.php)
 * @package WordPress
 * @subpackage templvm
 */
get_header(); // подключаем header.php ?>

<!-- temp -->

<!-- test_page -->
    <div id="colleges-header">
        <h1 class="text-h1-home">The first pvblic temple of roman tradition <br>bvilt since classic antiqvity</h1>
    </div>

<div id="main" class="wrapper style1">
	<div class="container">
<!-- temp END-->
	
		<div class="row">
			<div class="<?php content_class_by_sidebar(); // функция подставит класс в зависимости от того есть ли сайдбар, лежит в functions.php ?>">
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); // старт цикла ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> <?php // контэйнер с классами и id ?>
					
					<!-- temp -->
				<?php if(the_title('','',false)){ ?>
						<header class="major major-default-page">
						<h2><?php the_title(); ?></h2>
						</header>
				<?php } ?>
						
						
						<section id="content">
						<?php the_content(); ?>
						</section>
				<!-- temp END-->
				
					</article>
				<?php endwhile; // конец цикла ?>
			</div>
			<?php get_sidebar(); // подключаем sidebar.php ?>
		</div>
		
<!-- temp -->
	</div>
</div>
<!-- temp END-->

<?php get_footer(); // подключаем footer.php ?>