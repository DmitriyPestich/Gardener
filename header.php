<?php if(isset($_POST['contact'])) { $error = ale_send_contact($_POST['contact']); }?>
<!doctype html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="header_top">
    <div class="main-line">
        <div class="wrapper top_line">
            <div class="top_item phone_box">
                <?php if(ale_get_option('header_phone_label')){
                    echo '<span class="label_for_phone font_one">'.esc_attr(ale_get_option('header_phone_label')).'</span>';
                }?>
                <?php if(ale_get_option('header_phone')){
                    echo '<span class="header_phone font_two">'.esc_attr(ale_get_option('header_phone')).'</span>';
                }?>
            </div>
            <div class="top_item logo_box">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
                    <?php if(ale_get_option('sitelogo')) {?>
                        <img src="<?php echo esc_url (ale_get_option('sitelogo')); ?>" alt="logo" class="logo" title="<?php esc_attr(bloginfo('title')); ?>"/>
                    <?php } else { ?>
                        <h1><?php esc_attr(bloginfo('title')); ?></h1>
                    <?php }?>
                </a>
            </div>
            <div class="top_item search_box">
                <form id="search" method="get" action="<?php echo site_url()?>">
                    <input class="searchinput" type="text" name="s" size="21" maxlength="120" placeholder="" value="<?php echo get_search_query()?>">
                    <input class="searchsubmit" type="submit" value="&#xf002">
                </form>
            </div>
        </div>
    </div>
    <?php if (is_page_template('template-home.php')) {?>
        <div class="slider_home_container">
            <div class="main_top_slider">
                <ul class="slides">
            <?php
            $args = array(
                'post_type'   => 'post',
                'meta_key'    => 'ale_post_to_slider',
                'meta_value'  => 'on',
                'posts_per_page' => -1
            );

            $slides = new WP_Query($args);

            if ($slides->have_posts()) : while ($slides->have_posts()) : $slides->the_post();
                $ale_main_image = esc_url(ale_get_meta('main_image'));
                $ale_bg_image = esc_url(ale_get_meta('background_image'));
            ?>

                <li class="slider_item" <?php if($ale_bg_image) {echo 'style="background: url('.$ale_bg_image.') no-repeat center center;"';}?>>
                    <div class="image_container">
                        <?php if($ale_main_image){
                            echo '<img src="'.$ale_main_image.'" alt="" />';
                        }?>
                        <div class="slide_data_container">
                            <div class="slide_data">
                                <h2 class="title_slider font_two"><a href="<?php esc_url(the_permalink());?>"><?php the_title()?></a></h2>
                                <div class="sub_title_slide">
                                    <div class="slide_icon"><i class="fa fa-arrow-right"></i></div>
                                    <p class="sub_title"><a href="<?php esc_url(the_permalink());?>"><?php echo esc_attr(ale_get_meta('post_sub_title'))?></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

            <?php endwhile; endif; wp_reset_query();?>
                </ul>
            </div>
            <div class="main-navigation_home font_two">
                <?php if (has_nav_menu( 'header_menu')) { ?>
                    <nav class="navigation header_nav_home wrapper">
                        <?php
                        wp_nav_menu( array(
                            'theme_location' => 'header_menu',
                            'menu'        => 'Header Menu',
                            'menu_class'     => 'menu menu-header',
                            'walker'         => new Aletheme_Nav_Walker(),
                            'container'      => '',
                        )); ?>
                    </nav>
                <?php } ?>
            </div>
        </div>
    <?php } else {?>
    <div class="main-navigation font_two">
        <?php if (has_nav_menu( 'header_menu')) { ?>
            <nav class="navigation header_nav wrapper">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'header_menu',
                    'menu'        => 'Header Menu',
                    'menu_class'     => 'menu menu-header',
                    'walker'         => new Aletheme_Nav_Walker(),
                    'container'      => '',
                )); ?>
            </nav>
        <?php } ?>
    </div>

    <section class="breadcrumbs_section">
        <div class="breadcrumbs_line">
            <div class="left_line"></div>
            <?php echo ale_get_breadcrumbs(); ?>
            <div class="right_line"></div>
        </div>
    </section>
    <?php }?>
</header>



