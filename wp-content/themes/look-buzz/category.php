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

            <div class="sidebar-item categories">
                <h3>Categories</h3>
                <ul class="nav navbar-stacked">
                    <li><a href="#">Lorem ipsum<span class="pull-right">(1)</span></a></li>
                    <li class="active"><a href="#">Dolor sit amet<span class="pull-right">(8)</span></a></li>
                    <li><a href="#">Adipisicing elit<span class="pull-right">(4)</span></a></li>
                    <li><a href="#">Sed do<span class="pull-right">(9)</span></a></li>
                    <li><a href="#">Eiusmod<span class="pull-right">(3)</span></a></li>
                    <li><a href="#">Mockup<span class="pull-right">(4)</span></a></li>
                    <li><a href="#">Ut enim ad minim <span class="pull-right">(2)</span></a></li>
                    <li><a href="#">Veniam, quis nostrud <span class="pull-right">(8)</span></a></li>
                </ul>
            </div>
            <div class="sidebar-item tag-cloud">
                <h3>Tag Cloud</h3>
                <ul class="nav nav-pills">
                    <li><a href="#">Corporate</a></li>
                    <li><a href="#">Joomla</a></li>
                    <li><a href="#">Abstract</a></li>
                    <li><a href="#">Creative</a></li>
                    <li><a href="#">Business</a></li>
                    <li><a href="#">Product</a></li>
                </ul>
            </div>


            <div class="news_letter sidebar-item">
                <h3>News Letter </h3> 
                <div class="message_news"></div>
                <p><span class="glyphicon glyphicon-envelope"></span> subscribe to our news</p>
                <form id="NewsLetter">
                    <input type="email" class="form-control" name="email">
                    <div>
                        <b class="glyphicon glyphicon glyphicon-chevron-right"></b>
                        <input type="submit" value="&nbsp;&nbsp;&nbsp;&nbsp;s'inscrire">
                    </div>
                </form>
            </div>

        </div>
    </div>



    <section id="portfolio-information" class="padding-top">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
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




            </div>
        </div>
    </section>

</div>

<?php
//get_sidebar();
get_footer();
