<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package shelley
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
	<br><br>
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
