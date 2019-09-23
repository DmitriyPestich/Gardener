<?php

    /**
     * Javascript for Load More
     *
     */
    function ale_service_popup_js() {

        global $wp_query;
        $args = array(
            'nonce'       => wp_create_nonce( 'ale-service-popup-nonce' ),
            'url'         => admin_url( 'admin-ajax.php' ),
        );
        wp_enqueue_script( 'ale-service_popup',
            get_stylesheet_directory_uri() . '/js/libs/service-popup.js',
            array( 'jquery' ),
            '1.0',
            true );
        wp_localize_script( 'ale-service_popup', 'aleservicepopup', $args );

    }

    add_action( 'wp_enqueue_scripts', 'ale_service_popup_js' );

    /**
     * AJAX Load More
     *
     */
    function ale_ajax_service_popup() {
        check_ajax_referer( 'ale-service-popup-nonce', 'nonce' );
        $post_id = $_POST['post'];
        $current_post = get_post($post_id);

        ob_start(); ?>
        <div class="service_content_popup">
            <div class="top_line">
                <h2 class="title font_two"><?php echo esc_attr($current_post->post_title);?></h2>
                <div class="buttons">
                    <a href="#" class="order_button font_one"><?php echo esc_html_e('Order', 'gardener');?></a>
                    <?php if(esc_attr(ale_get_meta('gardener_title', true, $post_id))) {?>
                        <span class="subtitle font-two">
                            <?php echo esc_attr(ale_get_meta('gardener_title', true, $post_id));?>
                        </span>
                    <?php }?>
                </div>
                <?php if (esc_url(ale_get_meta('service_bigicon_hover', true, $post_id))) {?>
                    <div class="icon_box">
                        <img src="<?php echo esc_url(ale_get_meta('service_bigicon_hover', true, $post_id))?>" alt=""/>
                    </div>
                <?php }?>
            </div>
            <div class="content_line">
                <?php if (esc_attr(ale_get_meta('service_description_image', true, $post_id))) {?>
                    <div class="desc_img">
                        <img src="<?php echo esc_url(ale_get_meta('service_description_image', true, $post_id))?>" alt=""/>
                    </div>
                <?php }?>
                <div class="service_content">
                    <?php echo apply_filters( 'the_content', $current_post->post_content);?>
                </div>
            </div>
            <div class="latest_projects">
                <div class="top_line_projects">
                    <div class="box_title font_two">
                        <?php echo esc_html('Latest projects', 'gardener')?>
                    </div>
                    <div class="line"></div>
                    <div class="all_projects font_two">
                        <a href="<?php echo home_url("/projects")?>"><?php echo esc_html('All projects', 'gardener');?><i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="container_projects_item">
                    <?php
                    $args = array(
                        'post_type'   => 'projects',
                        'posts_per_page' => 3
                    );

                    $projects = new WP_Query($args);

                    if ($projects->have_posts()) : while ($projects->have_posts()) : $projects->the_post();?>
                        <div class="project_item">
                            <span class="project_date font_one"><?php echo get_the_date();?></span>
                            <a href="<?php esc_url(the_permalink()); ?>" class="project_title_link font_two" target="_blank"><?php the_title();?></a>
                        </div>

                    <?php endwhile; endif; wp_reset_query();?>
                </div>
            </div>
        </div>
        <?php
        $data = ob_get_clean();
        wp_send_json_success( $data );
        wp_die();
    }

    add_action( 'wp_ajax_ale_ajax_service_popup', 'ale_ajax_service_popup' );
    add_action( 'wp_ajax_nopriv_ale_ajax_service_popup', 'ale_ajax_service_popup' );
