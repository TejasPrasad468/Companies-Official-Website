<?php 
/**
 * The Footer for SKT Ele Product Launch
 *
 * Displays the footer area of the template.
 *
 * @package SKT Ele Product Launch
 * 
 * @since SKT Ele Product Launch 1.0
 */
global $complete;?>

	<?php /*To Top Button */?>
	<a class="to_top <?php if (empty ($complete['totop_id'])) { ?>hide_totop<?php } ?>"><i class="fa-angle-up fa-2x"></i></a>
<!--Footer Start-->

<div class="footer_wrap layer_wrapper <?php if(!empty($complete['hide_mob_footwdgt'])){ echo 'mobile_hide_footer';} ?>">
<?php
  global $complete;
  $footertype = $complete['foot_layout_id']; 
?>
<div id="footer" class="footer-type<?php echo $footertype; ?>">
    
    <?php if($complete['hide_foot_infobox'] == '') { ?> 
		<div class="footer-infobox">
        	<div class="center">
                <div class="footer-infobox-left"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="footer-logo-img" src="<?php echo $complete['footer_logo']; ?>"></a></div>
                <div class="footer-infobox-right"><?php echo do_shortcode($complete['footer_infobox_content']); ?></div>
                <div class="clear"></div>
            </div>
        </div>
    <?php } ?>
    
	<div class="center">
    	<div class="rowfooter<?php if ($footertype == 5) {?> footernone<?php } ?>">
            <div class="clear"></div>
    		<?php if ($footertype == 4) {?>
            <div class="footercols4"><?php if (dynamic_sidebar('footer-1')) : else : ?><h3><?php if (!empty ($complete['foot_cols1_title'])) { $ftcols1 = html_entity_decode($complete['foot_cols1_title']); $ftcols1 = stripslashes($ftcols1); echo do_shortcode($ftcols1); } ?></h3><?php $ftcols1cntnt = $complete['foot_cols1_content']; echo do_shortcode($ftcols1cntnt); endif;?></div>
            <div class="footercols4"><?php if (dynamic_sidebar('footer-2')) : else : ?><h3><?php if (!empty ($complete['foot_cols2_title'])) { $ftcols2 = html_entity_decode($complete['foot_cols2_title']); $ftcols2 = stripslashes($ftcols2); echo do_shortcode($ftcols2); } ?></h3><?php $ftcols2cntnt = $complete['foot_cols2_content']; echo do_shortcode($ftcols2cntnt); endif;?>
            </div>
            <div class="footercols4"><?php if (dynamic_sidebar('footer-3')) : else : ?><h3><?php if (!empty ($complete['foot_cols3_title'])) { $ftcols3 = html_entity_decode($complete['foot_cols3_title']); $ftcols3 = stripslashes($ftcols3); echo do_shortcode($ftcols3); } ?></h3><?php $ftcols3cntnt = $complete['foot_cols3_content']; echo do_shortcode($ftcols3cntnt); endif;?></div>
            <div class="footercols4"><?php if (dynamic_sidebar('footer-4')) : else : ?><h3><?php if (!empty ($complete['foot_cols4_title'])) { $ftcols4 = html_entity_decode($complete['foot_cols4_title']); $ftcols4 = stripslashes($ftcols4); echo do_shortcode($ftcols4); } ?></h3><?php $ftcols4cntnt = $complete['foot_cols4_content']; echo do_shortcode($ftcols4cntnt); endif;?></div>
            <?php } if ($footertype == 3) {?>    
            <div class="footercols3"><?php if (dynamic_sidebar('footer-1')) : else : ?><h3><?php if (!empty ($complete['foot_cols1_title'])) { $ftcols1 = html_entity_decode($complete['foot_cols1_title']); $ftcols1 = stripslashes($ftcols1); echo do_shortcode($ftcols1); } ?></h3><?php $ftcols1cntnt = $complete['foot_cols1_content']; echo do_shortcode($ftcols1cntnt); endif;?></div>
            <div class="footercols3"><?php if (dynamic_sidebar('footer-2')) : else : ?><h3><?php if (!empty ($complete['foot_cols2_title'])) { $ftcols2 = html_entity_decode($complete['foot_cols2_title']); $ftcols2 = stripslashes($ftcols2); echo do_shortcode($ftcols2); } ?></h3><?php $ftcols2cntnt = $complete['foot_cols2_content']; echo do_shortcode($ftcols2cntnt); endif;?></div>
            <div class="footercols3"><?php if (dynamic_sidebar('footer-3')) : else : ?><h3><?php if (!empty ($complete['foot_cols3_title'])) { $ftcols3 = html_entity_decode($complete['foot_cols3_title']); $ftcols3 = stripslashes($ftcols3); echo do_shortcode($ftcols3); } ?></h3><?php $ftcols3cntnt = $complete['foot_cols3_content']; echo do_shortcode($ftcols3cntnt); endif;?></div>
            <?php } ?>
            <?php if ($footertype == 2) {?>    
            <div class="footercols2"><?php if (dynamic_sidebar('footer-1')) : else : ?><h3><?php if (!empty ($complete['foot_cols1_title'])) { $ftcols1 = html_entity_decode($complete['foot_cols1_title']); $ftcols1 = stripslashes($ftcols1); echo do_shortcode($ftcols1); } ?></h3><?php $ftcols1cntnt = $complete['foot_cols1_content']; echo do_shortcode($ftcols1cntnt); endif;?></div>
            <div class="footercols2"><?php if (dynamic_sidebar('footer-2')) : else : ?><h3><?php if (!empty ($complete['foot_cols2_title'])) { $ftcols2 = html_entity_decode($complete['foot_cols2_title']); $ftcols2 = stripslashes($ftcols2); echo do_shortcode($ftcols2); } ?></h3><?php $ftcols2cntnt = $complete['foot_cols2_content']; echo do_shortcode($ftcols2cntnt); endif;?></div>
            <?php } if ($footertype == 1) { if(!dynamic_sidebar('footer-1')) : ?> 
            <div class="footercols1"><?php if (dynamic_sidebar('footer-1')) : else : ?><h3><?php if (!empty ($complete['foot_cols1_title'])) { $ftcols1 = html_entity_decode($complete['foot_cols1_title']); $ftcols1 = stripslashes($ftcols1); echo do_shortcode($ftcols1); } ?></h3><?php $ftcols1cntnt = $complete['foot_cols1_content']; echo do_shortcode($ftcols1cntnt); endif;?></div>
            <?php  endif; ?>          
            <?php } ?>
        </div>              
        <div class="clear"></div> 
    </div>
    <div id="copyright">
        <div class="copytext"><?php $copyrightcntnt = $complete['footer_text_id']; echo do_shortcode($copyrightcntnt); ?></div>
    </div>
</div>

<!--Footer END-->
    <div class="footer-pattern">
        <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="1400.000000pt" height="68.000000pt" viewBox="0 0 1400.000000 68.000000" preserveAspectRatio="xMidYMid meet">
            <g transform="translate(0.000000,68.000000) scale(0.100000,-0.100000)" fill="#2f5bea" stroke="none">
                <path class="skt-builder-wave-color" d="M618 664 c-73 -17 -143 -52 -241 -121 -90 -62 -172 -101 -293 -139 l-84 -26 0 -189 0 -189 7000 0 7000 0 0 189 0 189 -27 6 c-16 3 -46 8 -68 12 -65 10 -196 64 -255 104 -76 52 -205 115 -297 146 -65 22 -101 28 -213 32 -206 7 -268 -12 -460 -138 -119 -79 -290 -149 -381 -157 -114 -11 -295 43 -422 125 -98 63 -242 129 -333 152 -56 15 -110 20 -197 20 -182 0 -254 -24 -429 -141 -132 -89 -310 -159 -404 -159 -115 0 -283 55 -399 130 -89 58 -243 128 -331 150 -56 15 -110 20 -197 20 -181 0 -262 -26 -420 -137 -125 -87 -319 -163 -415 -163 -113 1 -283 55 -386 123 -87 58 -252 134 -341 157 -57 15 -111 20 -198 20 -182 0 -256 -24 -430 -142 -94 -65 -241 -130 -336 -149 -116 -24 -299 23 -448 115 -101 63 -199 111 -290 143 -66 22 -100 27 -218 31 -202 6 -279 -17 -448 -135 -125 -87 -319 -163 -415 -163 -113 1 -283 55 -386 123 -87 58 -252 134 -341 157 -57 15 -111 20 -199 20 -184 0 -248 -21 -435 -146 -109 -73 -283 -143 -372 -151 -67 -6 -197 18 -283 53 -34 13 -98 47 -143 74 -205 126 -341 170 -526 170 -182 0 -256 -24 -430 -142 -128 -87 -310 -158 -407 -158 -109 0 -284 58 -395 130 -89 58 -243 128 -331 150 -93 24 -287 26 -376 4z"></path>
            </g>
        </svg>
    </div>
</div><!--layer_wrapper class END-->
<?php wp_footer(); ?>
</body>
</html>