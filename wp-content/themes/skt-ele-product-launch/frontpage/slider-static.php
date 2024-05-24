<?php
global $complete;  
$ImageUrl[] = esc_url(get_template_directory_uri() ."/images/slides/slider1.jpg");
$ImageUrl[] = esc_url(get_template_directory_uri() ."/images/slides/slider2.jpg");
$ImageUrl[] = esc_url(get_template_directory_uri() ."/images/slides/slider3.jpg");

for($i=1; $i<=10; $i++){
	if(!empty($complete['slide_image'.$i])){
		$imgArr[] = $i;
	}
}
require get_template_directory() . '/frontpage/slider.php';
?>

<section id="home_slider">
  <div class="slider-main">
    <?php if(!empty($imgArr)){ ?>
    <div class="slider-wrapper theme-default">
      <div id="slider" class="nivoSlider">
        <?php
			   foreach($imgArr as $val){
				?>
        <img src="<?php echo $complete['slide_image'.$val]; ?>" data-thumb="<?php echo $complete['slide_image'.$val]; ?>" alt="<?php echo strip_tags($complete['slide_title'.$val]); ?>" title="<?php echo esc_attr('#htmlcaption'.$val) ; ?>" />
        <?php } ?>
      </div>
      <?php foreach($imgArr as $val)	{ ?>
      <div id="htmlcaption<?php echo esc_attr($val); ?>" class="nivo-html-caption">
        <div class="nivo-caption-content">
          <?php if(!empty($complete['slide_title'.$val])){ ?>
          <div class="title"><?php echo $complete['slide_title'.$val]; ?></div>
          <?php } ?>
          <?php if(!empty($complete['slide_desc'.$val])){ ?>
          <div class="slidedesc"><?php echo $complete['slide_desc'.$val]; ?></div>
          <?php } ?>
          <?php if(!empty($complete['slide_btn'.$val])){ ?>
          <div class="slidebtn"><a class="slidelink" href="<?php echo $complete['slide_link'.$val]; ?>"><?php echo $complete['slide_btn'.$val]; ?></a></div>
          <?php } ?>
          <?php if(!empty($complete['slide_btn'.$val.'_2'])){ ?>
          <div class="slidebtn slidebtn2"><a class="slidelink slidelink2" href="<?php echo $complete['slide_link'.$val.'_2']; ?>"><?php echo $complete['slide_btn'.$val.'_2']; ?></a></div>
          <?php } ?>
        </div>
      </div>
      <?php } ?>
    </div>
    <?php }
	else { ?>
    <div class="slider-wrapper slide-temp theme-default">
      <div id="slider" class="nivoSlider">
        <?php foreach($ImageUrl as $val) { ?>
        <img src="<?php echo $val; ?>" data-thumb="<?php echo $val; ?>" alt="" title="#htmlcaption" />
        <?php } ?>
      </div>
      <?php for($i=1; $i<=3; $i++)	{ ?>
      <div id="htmlcaption" class="nivo-html-caption">
        <div class="title"><?php echo 'Luxury Hotel'; ?></div>
        <div class="slidedesc">&nbsp;</div>
        <div class="slidebtn">&nbsp;</div>
      </div>
      <?php } ?>
    </div>
    <?php } ?>
    <div class="arrow-pattern"> <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
 width="1400.000000pt" height="138.000000pt" viewBox="0 0 1400.000000 138.000000"
 preserveAspectRatio="xMidYMid meet">
<g transform="translate(0.000000,138.000000) scale(0.100000,-0.100000)"
fill="#ffffff" stroke="none">
<path d="M12920 1370 c-136 -14 -260 -38 -485 -91 -566 -135 -1033 -274 -1972
-583 -559 -184 -746 -242 -998 -306 -373 -96 -609 -131 -885 -132 -270 0 -472
32 -895 142 -484 127 -689 168 -952 190 -180 16 -618 8 -803 -15 -304 -36
-661 -103 -960 -179 -74 -19 -224 -57 -332 -85 -472 -120 -1034 -183 -1898
-212 -506 -17 -1939 -3 -2607 26 l-133 6 0 -66 0 -65 7000 0 7000 0 -2 642 -3
643 -131 26 c-228 47 -364 61 -619 64 -132 2 -278 0 -325 -5z"/>
</g>
</svg> </div>
  </div>
  <div class="center">
	<div class="slider-icon-img"> <img src="<?php echo $complete['slide_icon_image']; ?>" /> </div>
</div>
</section>