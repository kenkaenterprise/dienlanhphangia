<div class="related__post my-4">
	<div class="title__related">
		<h3><span>Tin liên quan</span></h3>
	</div>
	<ul class="related__list">
          <?php
              $categories = get_the_category($post->ID);
              if ($categories) 
              {
                  $category_ids = array();
                  foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;

                  $args = array(
                      'category__in' => $category_ids,
                      'post__not_in' => array($post->ID),
                      'showposts' => 6, // Số bài viết bạn muốn hiển thị.
                      'ignore_sticky_posts' => 1,
                      'orderby' => 'rand',
                      'order' => 'DESC',
                  );
                  $my_query = new wp_query($args);
                  if( $my_query->have_posts() ) 
                  {                      
                      while ($my_query->have_posts())
                      {
                          $my_query->the_post(); ?>
                          <li>                                               
                            <a href="<?php the_permalink() ?>" class="thumb_related">
                               <?php the_post_thumbnail(); ?>
                            </a>
                            <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>" class="title_related"><?php the_title(); ?></a>    
                          </li>
                          <?php
                      }                      
                  }
              }
          ?>
	</ul>
</div>