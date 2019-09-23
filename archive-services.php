<?php get_header(); ?>
<section class="site_container page_services_archive">
    <div class="page_heading services_page_heading font_two">
        <h2 class="page_title wrapper"><?php esc_html_e('Services', 'gardener');?></h2>
    </div>
    <div class="story services_list cf">
        <?php
        $args = array(
            'post_type'   => 'services',
            'posts_per_page' => -1,
        );

        $services = new WP_Query($args);
        $icon_image = '';

        if ($services->have_posts()) : while ($services->have_posts()) : $services->the_post();

        ?>
            <div class="services_item" <?php
                if(esc_url(ale_get_meta('service_bigicon'))) { ?>
                    style="background-image:url(<?php echo esc_url(ale_get_meta('service_bigicon'));?>)";
            <?php } ?>>
                <div class="service_data">
                    <h3 class="services_title font_two"><?php the_title();?></h3>
                    <div class="content font_one">
                        <?php echo ale_limit_excerpt(53);?>
                    </div>
                    <div class="details_buttons">
                        <span class="service_show_details details font_two venobox_service_popup" data-vbtype="inline" title="My Description" href="#service_popup" data-id="<?php echo get_the_ID();?>"><?php echo esc_html_e('Details', 'gardener');?><i class="fa fa-arrow-right"></i></span>
                        <a href="<?php echo home_url("/order/")."?servicetype=".get_the_ID();?>"><?php echo esc_html_e('Order', 'gardener');?></a>
                    </div>
                </div>
            </div>
        <?php endwhile; endif; wp_reset_query(); ?>
    </div>
</section>
<div id="service_popup" style="display: none">
    <div class="sk-three-bounce">
        <div class="sk-child sk-bounce1"></div>
        <div class="sk-child sk-bounce2"></div>
    </div>
</div>
<?php get_footer(); ?>