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
		<div class="my_wrapper row">
            <div class="col1">
                <div class="left-sidebar-logo">
                    <?php if( !empty(get_the_post_thumbnail()) ){ ?>
                        <img src="<?php the_post_thumbnail_url(); ?>">
                    <?php } ?>
                </div>
                
                <div class="left-sidebar-content">
                   <?php $page_links = get_fields(get_the_ID()); $cnt=0; ?>
                   <?php if(!empty($page_links)){ ?>
                       <ul class="collegium_sitebar_menu">
                       <?php foreach ($page_links as $name => $value){ ?>
                            <?php if(!empty($value['url']) and !empty($value['title'])){ ?>
                               <?php if($cnt>0){ ?>
                                    <i class="fa fa-circle" aria-hidden="true"></i>
                               <?php } $cnt++; ?>
                            <li><a href="<?php echo $value['url']; ?>"><?php echo $value['title']; ?></a></li>
                            <?php } ?>
                       <?php } ?>
                       </ul>
                   <?php } ?>
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