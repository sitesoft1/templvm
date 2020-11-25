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

    <style>
        
        .my_wrapper {
            width: 100%;
            display: grid;
            grid-template-columns: 1fr 5fr;
            grid-template-rows: 200px;
        }

        @media screen and (max-width: 640px) {
            .my_wrapper {
                width: 100%;
                display: grid;
                grid-template-columns: 1fr;
                grid-template-rows: repeat(2, minmax(100px, 1fr));
            }
        }

        .item1{
            background: #0A246A;
        }

        .item2{
            background: #00bb00;
        }
        
    </style>
    
    <div class="my_wrapper">
        <div class="item1">1</div>
        <div class="item2">2</div>
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
						<header class="major">
						<h2><?php the_title(); ?></h2>
						</header>
				<?php } ?>
						
						
						<section id="content">
                        <?php if(the_title('','',false)){ ?>
                            <h2><?php the_title(); ?></h2>
                        <?php } ?>
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