<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @package WordPress
 * @subpackage templvm
 */
?>

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


<?php wp_footer(); ?>
</body>
</html>
<!-- Footer END -->