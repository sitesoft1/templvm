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
<!--
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
    -->


<div id="main" class="wrapper style1">
	<div class="container">
<!-- temp END-->

        <style>

            .my_wrapper {
                width: 100%;
                display: grid;
                grid-gap: 20px;
                grid-template-columns: 1fr 5fr;
                grid-template-rows: 1fr;

                grid-template-areas:
                        "s c";
            }

            @media screen and (max-width: 800px) {
                .my_wrapper {
                    width: 100%;
                    display: grid;
                    grid-gap: 5px;
                    grid-template-columns: 1fr;
                    grid-template-areas:
                            "s"
                            "c";
                }
            }
            

            .col1{
                grid-area: s;
                /* background: rgba(120, 10, 9, 0.965); */
            }

            .col2{
                grid-area: c;
                background: #00bb00;
            }
            
            .left-sidebar-logo{
                text-align: center;
                margin-bottom: 15px;
            }
            
            .left-sidebar-content{
                background: rgba(120, 10, 9, 0.965);
            }

        </style>
	
		<div class="my_wrapper row">
   
            <div class="col1">
                
                <div class="left-sidebar-logo">
                    <img src="<?php the_post_thumbnail_url(); ?>">
                </div>
                <div class="left-sidebar-content">
                    <h3>Левый сайдбар</h3>
                    <p>Контент левого сайдбара</p>
                    <?php get_sidebar(); // подключаем sidebar.php ?>
                </div>
                
            </div>
            
            <div class="col2 <?php content_class_by_sidebar(); // функция подставит класс в зависимости от того есть ли сайдбар, лежит в functions.php ?>">
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
		</div>
		
<!-- temp -->
	</div>
</div>
<!-- temp END-->

<?php get_footer(); // подключаем footer.php ?>