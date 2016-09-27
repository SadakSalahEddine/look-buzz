<div class="rand-posts-category">
        
        <?php
     //  var_dump(get_the_category());
       $id_cat =""; 
       $name_cat ="";
       foreach (get_the_category() as $key => $value) {
          $id_cat  = $value->cat_ID; 
           $name_cat  = $value->cat_name; 
       //   break;
       }
       
        $args = array('posts_per_page' => 12, 'orderby' => 'rand','category'=> $id_cat);
        $rand_posts = get_posts($args);
            ?>
     <h3>Rand Posts <?php echo $name_cat ?> </h3>  
     <ul>
         
         <?php foreach ($rand_posts as $post) :
            setup_postdata($post); ?>
        <div class="media">
                <div>
                  <?php the_post_thumbnail() ?>
                </div>
                <div>
                    <h4><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h4>
                    <p>  </p>
                </div>
            </div>
        <?php endforeach;
        wp_reset_postdata();
        ?>
    </ul>
</div>