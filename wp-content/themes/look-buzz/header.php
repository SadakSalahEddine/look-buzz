<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>


<header id="header">      

    <div class="navbar navbar-inverse" role="banner">
        <div class="container">
            <div class="navbar-right">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="index.html">
                    <h1 class="logo-top"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt="" width="" height="" /></h1>
                </a>

            </div>
            <div class="collapse navbar-collapse">
                
               <?php   wp_nav_menu(array('theme_location' => 'primary',
                'menu_id' => 'primary-menu',
                'container' => 'ul',
                'menu_class' => 'nav navbar-nav navbar-left',        
            ));
               
               
               ?>



            </div>



        </div>
    </div>
</header>
<!--/#header-->


