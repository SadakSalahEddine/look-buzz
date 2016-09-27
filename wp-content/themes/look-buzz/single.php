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

<div class="container">
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
                <div class="col-md-9">
                    <div class="breadcrumb">Navigation :  <?php get_breadcrumb(); ?></div>
                </div>
                <?php
                while (have_posts()) : the_post();
                    ?>
                    <div class="col-sm-4 img-responsive">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="col-sm-5">
                        <div class="project-name overflow">
                            <h2 class="bold"><?php echo get_the_title(); ?> </h2>
                            <ul class="nav navbar-nav navbar-default">
                                <li><a href="#"><i class="fa fa-clock-o"></i><?php echo the_date('d-m-Y'); ?></a></li>
                                <li><a href="#"><i class="fa fa-user"></i><?php echo 'Posted by ' . get_the_author(); ?> </a></li>
                            </ul>
                        </div>
                        <div class="project-info overflow">
                            <!--<h3>Project Info</h3>-->
                            <p><?php echo get_the_content(); ?></p>
                            <ul class="elements">
                                <li><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                <li><i class="fa fa-angle-right"></i> Donec tincidunt felis quis ipsum porttitor, non rutrum lorem rhoncus.</li>
                                <li><i class="fa fa-angle-right"></i> Nam in quam consectetur nulla placerat dapibus ut ut nunc.</li>
                            </ul>
                        </div>
                        <div class="skills overflow">
                            <h3>Share :</h3>
                            <ul class="nav navbar-nav navbar-default">
                                <li><a href="#"><i class="fa fa-facebook"></i>Facebook </a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i>Google Plus </a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i>linked in</a></li>
                            </ul>
                        </div>

                        <div class="blog-share">
                            <span class='st_facebook_hcount'></span>
                            <span class='st_twitter_hcount'></span>
                            <span class='st_linkedin_hcount'></span>

                            <span class='st_email_hcount'></span>
                        </div>
                    </div>

                    <div class="col-md-9 navigation_posts">
                        <?php
                        echo the_post_navigation(array(
                            'screen_reader_text' => 'Prevous And Next Buzz'));
                        ?>
                    </div>
                    <?php
                // If comments are open or we have at least one comment, load up the comment template.
//			if ( comments_open() || get_comments_number() ) :
//				comments_template();
//			endif;

                endwhile; // End of the loop.
                ?>





            </div>
        </div>
    </section>






    <!--	<div id="primary" class="content-area">
                    <main id="main" class="site-main" role="main">
    
    <?php
//		while ( have_posts() ) : the_post();
//
//			get_template_part( 'template-parts/content', get_post_format() );
//
//			the_post_navigation();
//
//			// If comments are open or we have at least one comment, load up the comment template.
//			if ( comments_open() || get_comments_number() ) :
//				comments_template();
//			endif;
//
//		endwhile; // End of the loop.
    ?>
            
            </div>-->
</div>

<?php
//get_sidebar();
get_footer();
?>
<script type="text/javascript">var switchTo5x = true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "7e8eb33b-fbe0-4915-9b93-09490e3d10df", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
