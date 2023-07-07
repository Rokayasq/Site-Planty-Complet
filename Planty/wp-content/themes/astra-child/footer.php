
<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>
<?php astra_content_bottom(); ?>
	</div> <!-- ast-container -->
	</div><!-- #content -->
<?php 
	astra_content_after();
		
	astra_footer_before();
		
	astra_footer();
		
	astra_footer_after(); 
?>
	</div><!-- #page -->

<?php 
	astra_body_bottom();    
	wp_footer(); 
?>
<footer>
	<a class="footer"  href="http://localhost:8888/Projet_6_Squalli_Rokaya_V2/Planty/" >
	Mentions légales
	</a>
</footer>
	</body>

</html>
