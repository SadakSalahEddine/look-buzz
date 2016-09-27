<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package look-buzz
 */
get_header();
get_search_form();
?>
<div class="container breadcrumb">
    <div class="breadcrumb">Navigation :  <?php get_breadcrumb(); ?></div>
</div>
<div class="container category-posts">  
    <div class="col-md-3 col-sm-5">
        <div class="sidebar blog-sidebar">
              <?php  
                   get_template_part( 'template-parts/content', 'category' );
                  get_template_part( 'template-parts/content', 'tags' );
                  get_template_part( 'template-parts/content', 'recentPosts' );
                  get_template_part( 'template-parts/content', 'NewsLetter' );
            ?>
        </div>
    </div>
    
    <section id="portfolio-information" class="padding-top">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="col-md-12 title-bloc-pages">
                  
                        <p>
                            <a>Lool Buzz</a>
                        </p>
                    </div>
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <div class="row">
                                <div class="col-md-2 img-category">
                                    <a href="<?php echo get_permalink(); ?>"> <?php the_post_thumbnail(); ?></a>
                                </div>
                                <div class="col-md-10">
                                    <div class="project-name overflow">
                                        <a href="<?php echo get_permalink(); ?>"><h2 class="bold"><?php echo get_the_title(); ?> </h2></a>
                                        <ul class="nav navbar-nav navbar-default">
                                            <li><a><i class="fa fa-clock-o"></i><?php echo the_date(); ?></a></li>
                                            <li><a><i class="fa fa-user"></i><?php echo 'Posted by ' . get_the_author(); ?> </a></li>
                                        </ul>
                                    </div>
                                    <div class="project-info">
                                        <p><?php echo $trimmed = wp_trim_words(get_the_content(), $num_words = 30, $more = null); ?></p>
                                        <a href="<?php echo get_permalink(); ?>" class="read-more">View More</a>
                                    </div>
                                </div>   

                            </div> 
                            <br/>

                            <?php
                            
                        endwhile;
                        
                        the_posts_pagination(array(
                            //    'mid_size' =>1,
                                'screen_reader_text' => ' ',
                                'prev_text' => __('Previous Buzz', 'textdomain'),
                                'next_text' => __('Next Buzz', 'textdomain'),
                                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __('', 'nieuwedruk') . ' </span>',
                            ));
                            
                        
                    endif;
                    ?>
                </div> 
                
                <div class="col-md-3">
                   <?php get_template_part( 'template-parts/content', 'randPosts' ); ?>
                </div>




            </div>
        </div>
    </section>

</div>

<?php
//get_sidebar();
get_footer();
