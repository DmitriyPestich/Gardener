<?php
/**
 * Template Name: Homepage Template
 */
get_header(); ?>
<section class="site_container">
    <?php if(ale_get_meta('order_form') == 'enable'){?>
        <div class="order_form">
            <div class="wrapper form_heading">
                <?php if (ale_get_meta('order_box_title')) {?>
                    <div class="title_form font_two">
                        <h2><?php echo esc_attr(ale_get_meta('order_box_title'));?></h2>
                    </div>
                    <div class="form_categoris font_two">
                        <ul class="services_categoris">
                            <li class="service_category_li_item" data-cat="<?php echo esc_html_e('For Home','gardener');?>"><?php echo esc_html_e('For Home','gardener');?></li>
                            <li class="service_category_li_item" data-cat="<?php echo esc_html_e('For Event','gardener');?>"><?php echo esc_html_e('For Event','gardener');?></li>
                            <li class="service_category_li_item" data-cat="<?php echo esc_html_e('Gardener Suply','gardener');?>"><?php echo esc_html_e('Gardener Suply','gardener');?></li>
                            <li class="service_category_li_item" data-cat="<?php echo esc_html_e('Industrial','gardener');?>"><?php echo esc_html_e('Industrial','gardener');?></li>
                            <li class="service_category_li_item" data-cat="<?php echo esc_html_e('Other','gardener');?>"><?php echo esc_html_e('Other','gardener');?></li>
                        </ul>
                    </div>
                <?php }?>
            </div>
        </div>
        <div class="gardener_order_data wrapper">
            <div class="order_form_container">
                <div class="gardener_data">
                    <div class="gardener_container">
                        <div class="gardener_slider_arrows">
                            <span class="previous_gardener"><i class="fa fa-caret-left"></i></span>
                            <span class="next_gardener"><i class="fa fa-caret-right"></i></span>
                        </div>
                        <?php if (ale_get_meta('gardeners_title')) {?><h4 class="gardener_slider_title font_two"><?php echo esc_attr(ale_get_meta('gardeners_title'));?></h4><?php }?>
                        <?php if (ale_get_meta('order_box_gardener_subtitle')) {?><span class="subtitle font_one"><?php echo esc_attr(ale_get_meta('order_box_gardener_subtitle'));?></span><?php }?>
                        <div class="gardener_slide">
                            <?php
                            $args = array(
                                'post_type'   => 'gardeners',
                                'posts_per_page' => -1
                            );

                            $gardeners = new WP_Query($args);

                            if ($gardeners->have_posts()) : while ($gardeners->have_posts()) : $gardeners->the_post();
                                $gardener_post = ale_get_meta('gardener_post');
                                $description_title = ale_get_meta('gardener_title');
                                $descriotion_person = get_the_excerpt();
                                ?>
                                <div>
                                    <div class="gardener_top">
                                        <?php if(get_the_post_thumbnail(get_the_ID(),'gardener-thumb')) {?>
                                            <div class="image">
                                                <?php echo get_the_post_thumbnail(get_the_ID(),'gardener-thumb');?>
                                            </div>
                                        <?php }?>
                                        <div class="name_post">
                                            <span class="gardener_name font_two"><?php the_title();?></span>
                                            <?php if($gardener_post) {?><span class="gardener_post font_one"><?php echo esc_attr($gardener_post);?></span><?php }?>
                                        </div>
                                    </div>
                                    <div class="gardener_middle">
                                        <?php if ($description_title) {?>
                                            <p class="description_title font_two"><?php echo esc_attr($description_title);?></p>
                                        <?php }?>
                                        <?php if ($descriotion_person) {?>
                                            <div class="description font_one">
                                                <p><?php echo esc_attr($descriotion_person);?></p>
                                            </div>
                                        <?php }?>
                                    </div>
                                    <div class="gardener_bottom">
                                        <div class="social_links">
                                            <?php if(ale_get_meta('gardener_fb')) {?><a href="<?php echo esc_url(ale_get_meta('gardener_fb'))?>" class="fb_icon" target="_blank"><i class="fa fa-facebook-square"></i></a><?php }?>
                                            <?php if(ale_get_meta('gardener_twi')) {?><a href="<?php echo esc_url(ale_get_meta('gardener_twi'))?>" class="twi_icon" target="_blank"><i class="fa fa-twitter"></i></a><?php }?>
                                            <?php if(ale_get_meta('gardener_email')) {?><a href="mailto:<?php echo esc_url(ale_get_meta('gardener_email'))?>" class="mail_icon" target="_blank"><i class="fa fa-envelope"></i></a><?php }?>
                                        </div>
                                    </div>
                                </div>

                            <?php endwhile; endif; wp_reset_query();?>
                        </div>
                    </div>
                </div>
                <div class="order_form_data">
                    <div class="order_form_box">
                        <form method="post" action="<?php the_permalink();?>" class="clearfix">
                            <div class="field">
                                <input name="contact[name]" type="text" placeholder="Name" value="<?php echo isset($_POST['contact']['name']) ? $_POST['contact']['name'] : ''?>" required="required" id="contact-form-name" />
                            </div>
                            <div class="field field_extra cf">
                                <input name="contact[phone]" type="text" placeholder="Phone" value="<?php echo isset($_POST['contact']['phone']) ? $_POST['contact']['phone'] : ''?>" required="required" id="contact-form-phone" />
                                <input name="contact[email]" type="email" placeholder="E-mail" value="<?php echo isset($_POST['contact']['email']) ? $_POST['contact']['email'] : ''?>" required="required" id="contact-form-email" />
                            </div>
                            <div class="field">
                                <input name="contact[address]" type="text" placeholder="Address" value="<?php echo isset($_POST['contact']['address']) ? $_POST['contact']['address'] : ''?>" required="required" id="contact-form-address" />
                            </div>
                            <div class="field">
                                <input name="contact[date]" type="date" placeholder="Date" value="<?php echo isset($_POST['contact']['date']) ? $_POST['contact']['date'] : ''?>" required="required" id="contact-form-date" />
                            </div>
                            <div class="field">
                                <textarea name="contact[massage]" placeholder="Comments..." id="contact-form-massage" required="required"><?php echo isset($_POST['contact']['massege']) ? $_POST['contact']['message'] : ''?></textarea>
                            </div>

                            <input type="submit" class="submit" value="<?php _e('Order', 'gardener')?>">
                            <input type="hidden" class="category_hidden_field" name="contact[categoty]" value="<?php _e('Not Selected', 'gardener')?>">
                            <?php wp_nonce_field() ?>
                        </form>
                    </div>
                </div>
                <div class="projects_data">
                    <div class="projects_container">
                        <?php if (ale_get_meta('l_projects_title')) {?><h4 class="gardener_slider_title font_two"><?php echo esc_attr(ale_get_meta('l_projects_title'));?></h4><?php }?>

                        <?php
                        $args = array(
                            'post_type'   => 'projects',
                            'posts_per_page' => 3
                        );

                        $projects = new WP_Query($args);

                        if ($projects->have_posts()) : while ($projects->have_posts()) : $projects->the_post();?>

                            <div class="project_item">
                                <span class="project_date font_one"><?php echo get_the_date();?></span>
                                <a href="<?php esc_url(the_permalink()); ?>" class="project_title_link font_two"><?php the_title();?></a>
                            </div>

                        <?php endwhile; endif; wp_reset_query();?>

                        <?php if(ale_get_meta('l_projects_link_title')) {?>
                            <div class="all_projects font_two">
                                <a href="<?php echo home_url("/projects")?>"><?php echo esc_attr(ale_get_meta('l_projects_link_title'));?><i class="fa fa-arrow-right"></i></a>
                            </div>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    <?php }?>

    <?php if(ale_get_meta('services_box') == 'enable'){?>
        <div class="services_box">
            <div class="service_left">
                <div class="services_image">
                    <?php
                    $args = array(
                        'post_type'   => 'services',
                        'posts_per_page' => 6
                    );

                    $services = new WP_Query($args);
                    $display = 'display';
                    $i = 0;
                    if ($services->have_posts()) : while ($services->have_posts()) : $services->the_post();
                        if ($i == 0){
                            $display = 'display';
                        } else{
                            $display = 'display_none';
                        }
                        $i++;
                        ?>
                        <div class="image <?php echo esc_attr($display) ;?>" style="background-image: url(<?php echo esc_url(the_post_thumbnail_url( 'full' )) ?>);" data-id="<?php echo get_the_ID();?>">

                        </div>
                    <?php endwhile; endif; wp_reset_query();?>
                </div>
            </div>
            <div class="service_center">
                <div class="services_list cf">
                    <?php
                    $args = array(
                        'post_type'   => 'services',
                        'posts_per_page' => 6
                    );
                    $j = 0;
                    $services = new WP_Query($args);

                    if ($services->have_posts()) : while ($services->have_posts()) : $services->the_post(); $j++ ?>
                        <div class="item_box_service" data-id="<?php echo get_the_ID();?>">
                            <div class="data_container <?php if ($j == 1) { echo 'popup_button'; } $i++;?> button<?php echo esc_attr($j)?>">
                                <?php if (ale_get_meta('service_icon')){?>
                                    <div class="image_holder">
                                        <?php echo "<img class='active_image' src=".esc_url(ale_get_meta('service_icon'))." alt=".get_the_title()." />";?>
                                        <?php echo "<img class='hover_image' src=".esc_url(ale_get_meta('service_icon_hover'))." alt=".get_the_title()." />";?>
                                    </div>
                                <?php }?>
                                <div class="title_holder font_two">
                                    <?php the_title();?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; endif; wp_reset_query();?>
                </div>
                <div class="service_description">
                    <?php
                        $args = array(
                            'post_type'   => 'services',
                            'posts_per_page' => 6
                        );

                        $services = new WP_Query($args);
                        $i = 0;
                        $ale_display = "display_none";

                        if ($services->have_posts()) : while ($services->have_posts()) : $services->the_post();
                            if ($i == 0){
                                $ale_display = "display";
                            } else {
                                $ale_display = "display_none";
                            }
                            $i++;
                        ?>

                        <div class="item_service <?php echo esc_attr($ale_display);?>" data-id="<?php echo get_the_ID();?>">
                            <h4 class="service_title font_two"><?php the_title();?></h4>
                            <?php if (ale_get_meta('gardener_title')) {?>
                                <p class="sub_title_service font_two"><?php echo esc_attr(ale_get_meta('gardener_title'));?></p>
                            <?php };?>
                            <div class="content_service font_one">
                                <?php if (esc_attr(ale_get_meta('service_description_image'))) {?>
                                    <div class="desc_img">
                                        <img src="<?php echo esc_url(ale_get_meta('service_description_image'))?>" alt=""/>
                                    </div>
                                <?php }?>
                                <div class="content">
                                    <?php $content = get_the_content();
                                    $trimmed_content = wp_trim_words( $content, 120, '<a href="'. get_permalink() .'"> ...Read More</a>' );
                                    echo ale_wp_kses ($trimmed_content);?>
                                </div>
                            </div>
                            <div class="line_separator"></div>
                            <div class="link_box font_one">
                                <?php if (ale_get_meta('service_link_one')) {?>
                                    <div class="link_service">
                                        <a href="<?php echo esc_url(ale_get_meta('service_link_one'));?>"><?php echo esc_attr(ale_get_meta('service_lebel_one'));?></a>
                                    </div>
                                <?php }?>
                                <?php if (ale_get_meta('service_link_two')) {?>
                                    <div class="link_service">
                                        <a href="<?php echo esc_url(ale_get_meta('service_link_two'));?>"><?php echo esc_attr(ale_get_meta('service_lebel_two'));?></a>
                                    </div>
                                <?php }?>
                                <?php if (ale_get_meta('service_link_three')) {?>
                                    <div class="link_service">
                                        <a href="<?php echo esc_url(ale_get_meta('service_link_three'));?>"><?php echo esc_attr(ale_get_meta('service_lebel_three'));?></a>
                                    </div>
                                <?php }?>
                            </div>
                        </div>

                    <?php endwhile; endif; wp_reset_query();?>
                </div>
            </div>
            <div class="service_right">

            </div>
        </div>

    <?php }?>

    <?php if(ale_get_meta('partners_box') == 'enable'){
        $bg_partners_link = '';
        if(ale_get_meta('pertners_bg')){
            $bg_partners_link = ale_get_meta('pertners_bg');
        }
        ?>
        <div class="partners_box" <?php echo 'style="background-image:url('.esc_url($bg_partners_link).');"'?>>

            <div class="container_partners wrapper">
                <div class="left_box">
                    <?php
                    $args = array(
                        'post_type'   => 'partners',
                        'posts_per_page' => 5
                    );

                    $partners = new WP_Query($args);

                    if ($partners->have_posts()) : while ($partners->have_posts()) : $partners->the_post(); ?>
                        <div class="left_slider_parents">
                            <h3 class="font_two"><?php the_title();?></h3>
                            <span class="sub_title"><?php echo esc_attr(ale_get_meta('partners_sub_title'));?></span>
                        </div>
                    <?php endwhile; endif; wp_reset_query();?>
                </div>
                <div class="right_box">
                    <div class="right_slider_partners ">
                        <div class="top_section">
                            <div class="count">
                                <span class="current_slide">

                                </span> /
                                <span class="all_slide">
                                    <?php echo esc_attr($partners->post_count);?>
                                </span>
                            </div>
                            <div class="arrow">
                                <div class="top"><i class="fa fa-sort-up"></i></div>
                                <div class="bottom"><i class="fa fa-sort-down"></i></div>
                            </div>
                            <div class="title font_two"><?php echo esc_html_e('Our partners','gardener');?></div>
                        </div>
                        <div class="slide_content">
                            <?php
                            $args = array(
                                'post_type'   => 'partners',
                                'posts_per_page' => 5
                            );

                            $partners = new WP_Query($args);


                            if ($partners->have_posts()) : while ($partners->have_posts()) : $partners->the_post(); ?>

                            <div class="bottom_section">
                                <div class="description font_one">
                                    <?php the_content() ;?>
                                </div>
                                <?php if (esc_url(ale_get_meta('partners_link_site'))) {?>
                                    <div class="link_site font_one">
                                        <span class="title_site"><?php echo ale_get_meta('partners_title_site');?></span>
                                        <a class="site_link" href="<?php echo esc_url(ale_get_meta('partners_link_site'));?>"><?php echo esc_html_e('See more','gardener');?></a>
                                    </div>
                                <?php }?>
                            </div>
                            <?php endwhile; endif; wp_reset_query();?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    <?php }?>

    <?php if(ale_get_meta('partners_box') == 'enable'){ ?>
        <section class="testimonials_box">
            <div class="wrapper">
                <div class="testiomnials_slider_box">
                    <?php
                    $args = array(
                        'post_type'   => 'testimonials',
                        'posts_per_page' => -1
                    );

                    $testimonials = new WP_Query($args);

                    if ($testimonials->have_posts()) : while ($testimonials->have_posts()) : $testimonials->the_post(); ?>
                        <div class="testimonials_slider">
                                <div class="testi_image">
                                    <?php echo get_the_post_thumbnail(get_the_ID(),'testimonil-thumb');?>
                                </div>
                                <h5 class="name font_two">
                                    <?php the_title();?>
                                </h5>
                                <?php if (esc_attr(ale_get_meta('testi_position'))) {?>
                                    <span class="position_author font_one">
                                        <?php echo esc_attr(ale_get_meta('testi_position'));?>
                                    </span>
                                <?php }?>
                                <?php if (esc_attr(ale_get_meta('testi_rating'))) {?>
                                    <div class="author_rating">
                                        <?php $rating = esc_attr(ale_get_meta('testi_rating'));

                                        ?>
                                        <div class="stars">
                                            <i class="fa fa-star <?php if ($rating >= 1) echo 'activ';?>"></i>
                                            <i class="fa fa-star <?php if ($rating >= 2) echo 'activ';?>"></i>
                                            <i class="fa fa-star <?php if ($rating >= 3) echo 'activ';?>"></i>
                                            <i class="fa fa-star <?php if ($rating >= 4) echo 'activ';?>"></i>
                                            <i class="fa fa-star <?php if ($rating >= 5) echo 'activ';?>"></i>
                                        </div>
                                    </div>
                                <?php }?>
                                <?php if (esc_attr(ale_get_meta('testi_subtitle'))) {?>
                                    <div class="subtitle_testi font_one">
                                        <?php echo esc_attr(ale_get_meta('testi_subtitle'));?>
                                    </div>
                                <?php }?>
                                <div class="description_testi font_two">
                                    <?php the_content();?>
                                </div>
                                <div class="separator">
                                    <i class="fa fa-quote-left"></i>
                                </div>
                        </div>
                    <?php endwhile; endif; wp_reset_query();?>
                </div>
                <div class="arrow">
                    <div class="prev"><i class="fa fa-arrow-left"></i></div>
                    <div class="next"><i class="fa fa-arrow-right"></i></div>
                </div>
            </div>
            <div class="testi_bg font_two">
                testimonials
            </div>
        </section>
    <?php }?>

    <?php if(ale_get_meta('portfolio_box') == 'enable'){ ?>
        <section class="portfolio_box">
            <div class="portfolio_slider">
                <?php
                $posts_per_page= '3';

                if(esc_attr(ale_get_meta('amount_sliders_portfolio'))){
                    $posts_per_page = esc_attr(ale_get_meta('amount_sliders_portfolio'));
                }

                $args = array(
                    'post_type'   => 'projects',
                    'posts_per_page' => $posts_per_page,

                );

                $portfolio = new WP_Query($args);

                if ($portfolio->have_posts()) : while ($portfolio->have_posts()) : $portfolio->the_post();?>
                <div class="portfolio_slide_item">
                    <figure>
                        <?php echo get_the_post_thumbnail(get_the_ID(),'projects-slide');?>
                        <figcaption>
                            <div class="wrapper">
                                <div class="container_info_portfolio">
                                    <?php if(esc_attr(ale_get_meta('projects_subtitle'))) {?>
                                        <span class="portfolio_subtitle font_two">
                                            <?php echo esc_attr(ale_get_meta('projects_subtitle'));?>
                                        </span>
                                        <h5 class="title font_two">
                                            <?php the_title();?>
                                        </h5>
                                        <div class="info_company_box font_two">
                                            <?php if(esc_attr(ale_get_meta('projects_name'))) {?>
                                                <div class="company">
                                                    <?php echo esc_html_e('Client:', 'gardener')." ". esc_attr(ale_get_meta('projects_name'))?>
                                                </div>
                                            <?php }?>
                                            <?php if (esc_attr(ale_get_meta('projects_date'))) {?>
                                                <div class="date_of_creation">
                                                    <?php echo esc_html_e('Data:', 'gardener')." ". esc_attr(ale_get_meta('projects_date'));?>
                                                </div>
                                            <?php }?>
                                        </div>
                                    <?php }?>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <?php endwhile; endif; wp_reset_query();?>
            </div>
            <div class="projects_nav">
                <div class="wrapper">
                    <div class="wrap_button">
                        <div class="button_slide_projects">
                            <div class="left"><i class="fa fa-caret-left"></i></div>
                            <div class="right"><i class="fa fa-caret-right"></i></div>
                        </div>
                        <div class="count_projects_slide">
                            <span class="current_slide">

                            </span> /
                                <span class="all_slide">
                                <?php echo esc_attr($portfolio->post_count);?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php }?>
</section>


<?php get_footer(); ?>
