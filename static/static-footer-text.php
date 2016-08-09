<?php /* Static Name: Footer text */ ?>
<div id="footer-text" class="footer-text">
	<?php $myfooter_text = of_get_option('footer_text'); ?>
	
	<?php if($myfooter_text){?>
		<?php echo of_get_option('footer_text'); ?>
	<?php } else { ?>
		<span class="footer-logo"><?php bloginfo('name'); ?></span> &copy; <?php echo date('Y'); ?> &bull; Site Designed by <a href="http://www.duckdiverllc.com" class="duck"><i class="dd-duck-icon" style="vertical-align:middle"></i>Duck Diver, LLC.</a>
	<?php } ?>
	<?php if( is_front_page() ) { ?>
		<!-- {%FOOTER_LINK} -->
	<?php } ?>
</div>