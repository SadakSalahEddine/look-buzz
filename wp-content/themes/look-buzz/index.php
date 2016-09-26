<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package look-buzz
 */
get_header();
get_search_form();
?>
<div class="container">
    <div class="col-md-12">
        <div class="row">

            <?php
            if (have_posts()) :

                if (is_home() && !is_front_page()) :
                    ?>
                    <div class="col-md-12 title-bloc">
                        <p>
                            <span>New</span>
                            <label>Last New Buzz</label>
                        </p>
                    </div>

                    <?php
                endif;

                /* Start the Loop */
                while (have_posts()) : the_post();
                    /*
                     * Include the Post-Format-specific template for the content.
                     * If you want to override this in a child theme, then include a file
                     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                     */
                    //  get_template_part('template-parts/content', get_post_format());
                    ?>
                    <div class="col-md-4 col-sm-12 text-center wow fadeIn" data-wow-duration="500ms" data-wow-delay="500ms">
                        <div class="single-blog two-column">
                            <div class="post-thumb">
                                <a href="<?php echo get_permalink(); ?>" class="img-home-bloc"><?php the_post_thumbnail(); ?></a>

                            </div>
                            <div class="post-content overflow">
                                <h2 class="post-title bold"><a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
                                <h3 class="post-author"><a><i class="fa fa-clock-o"></i>&nbsp; <?php echo ' '.the_date().'  ';?></a> <a><?php echo 'Posted by '.get_the_author();?> </a></h3>
                                <p><?php echo $trimmed = wp_trim_words(get_the_content(), $num_words = 25, $more = null); ?></p>
                                <a href="<?php echo get_permalink(); ?>" class="read-more">View More</a>
                                <div class="post-bottom overflow">
                                    <ul class="nav nav-justified post-nav">
                                        <li><a href="#"><i class="fa fa-tag"></i>Creative</a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i>32 Love</a></li>
                                        <li><a href="#"><i class="fa fa-comments"></i>3 Comments</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                endwhile;
            else :
                get_template_part('template-parts/content', 'none');
            endif;
            ?>

            <div class="col-md-12">
                <?php the_posts_pagination(array(
                    'screen_reader_text' => ' ',
                    'prev_text' => __('Previous Buzz', 'textdomain'),
                    'next_text' => __('Next Buzz', 'textdomain'),
                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __('', 'nieuwedruk') . ' </span>',
                ));
                ?> 
            </div>
        </div>           
    </div>







</div>



<?php
//get_sidebar();
get_footer();
