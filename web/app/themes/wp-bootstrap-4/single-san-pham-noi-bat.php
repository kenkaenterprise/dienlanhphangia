<?php 

// single-san-pham-noi-bat.php

get_header(); ?> 
<section class="breadcrumb_single_thanhly">
	<div class="container">
		<?php lewis_breadcrumbs() ?>
	</div>
</section>
<div class="container">
    <div class="row">

        <?php get_template_part( 'template-parts/single/no-sidebar', get_post_type() ); ?>

    </div>
</div>

<?php get_footer(); ?>
