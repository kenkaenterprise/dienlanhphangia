<!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
<link rel="stylesheet" type="text/css" href="<?= get_stylesheet_directory_uri() ?>/assets/css/slide/style-slide.css" />
<!-- Start WOWSlider -->
<div id="wowslider-container1">
<div class="ws_images">
    <ul>
    <?php  
         if( have_rows('slider-home','option') ):
            while ( have_rows('slider-home','option') ) : the_row();  
                    $image = get_sub_field('image_slider','option');
                    $name =  get_sub_field('name_slider','option');
                    $link = get_sub_field('link_images','option'); ?>
        <li>
            <a href="<?php echo $link; ?>">
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $name; ?>" title="slide-home" />
            </a>
        </li>
    <?php
        endwhile;
      else :
      endif;?>
    </ul>
</div>
</div>
<!-- End WOWSlider -->
<script src="<?= get_stylesheet_directory_uri() ?>/assets/js/slide/wowslider.js"></script>
<script src="<?= get_stylesheet_directory_uri() ?>/assets/js/slide/script.js"></script>
