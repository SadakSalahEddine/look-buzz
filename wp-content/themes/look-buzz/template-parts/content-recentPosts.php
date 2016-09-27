<div class="sidebar-item  recent">
    <h3>Recent Posts</h3>

    <?php
    $args = array(
        'numberposts' => 3,
    );

    $recent_posts = $recent_posts = wp_get_recent_posts($args, ARRAY_A);

    foreach ($recent_posts as $recent) {
        if (has_post_thumbnail($recent["ID"])) {
            ?>

            <div class="media">
                <div class="pull-left">
                    <?php echo get_the_post_thumbnail($recent["ID"], 'thumbnail') ?>
                </div>
                <div class="media-body">
                    <h4><a href="#"><?php echo $recent["post_title"] ?></a></h4>
                    <p><?php echo date($recent["post_date"]); ?></p>
                </div>
            </div>


            <?php
        }
    }
    wp_reset_query();
    ?>

</div>