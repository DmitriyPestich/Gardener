<?php get_header(); ?>
<section class="site_container page_gardeners_archive">
    <div class="page_heading font_two">
        <h2 class="page_title wrapper"><?php esc_html_e('Our theam', 'gardener');?></h2>
    </div>
    <div class="story gardeners_list cf">
        <div class="wrapper">
            <div class="staff_members">
                <?php
                $args = array(
                    'post_type'   => 'gardeners',
                    'posts_per_page' => -1,
                    'meta_key' => 'ale_gardener_staff',
                    'meta_value' => 'on',
                );

                $gardeners = new WP_Query($args);

                if ($gardeners->have_posts()) : while ($gardeners->have_posts()) : $gardeners->the_post();?>
                    <div class="container_staff_members">
                        <div class="member_photo">
                            <?php echo get_the_post_thumbnail(get_the_ID(),'gardener-bigthumb');?>
                        </div>
                        <div class="member_names">
                            <span class="member_name font_two"><?php the_title();?></span>
                            <?php if ( esc_attr(ale_get_meta('gardener_post'))) {?>
                                <span class="member_position font_one">
                                    <?php echo esc_attr(ale_get_meta('gardener_post'));?>
                                </span>
                            <?php }?>
                            <div class="social_links">
                                <?php if(ale_get_meta('gardener_fb')) {?><a href="<?php echo esc_url(ale_get_meta('gardener_fb'))?>" class="fb_icon" target="_blank"><i class="fa fa-facebook-square"></i></a><?php }?>
                                <?php if(ale_get_meta('gardener_twi')) {?><a href="<?php echo esc_url(ale_get_meta('gardener_twi'))?>" class="twi_icon" target="_blank"><i class="fa fa-twitter"></i></a><?php }?>
                                <?php if(ale_get_meta('gardener_email')) {?><a href="mailto:<?php echo esc_url(ale_get_meta('gardener_email'))?>" class="mail_icon" target="_blank"><i class="fa fa-envelope"></i></a><?php }?>
                            </div>
                        </div>
                        <div class="member_description">
                            <span class="sub_title font_two">
                                <?php echo esc_attr(ale_get_meta('gardener_title'));?>
                            </span>
                            <div class="content_area font_one">
                                <?php echo ale_limit_excerpt(30);?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; endif; wp_reset_query(); ?>
            </div>
            <div class="gardener_members">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php if (ale_get_meta('gardener_staff') != 'on') {?>
                        <div class="member_gardener">
                            <div class="photo">
                                <?php echo get_the_post_thumbnail(get_the_ID(),'gardener-thumb');?>
                            </div>
                            <div class="name font_two">
                                <?php the_title();?>
                            </div>
                            <?php if(esc_attr(ale_get_meta('gardener_post'))) {?>
                                <div class="position font_one">
                                    <?php echo esc_attr(ale_get_meta('gardener_post'));?>
                                </div>
                            <?php }?>
                            <div class="content_member">
                                <div class="photo">
                                    <?php echo get_the_post_thumbnail(get_the_ID(),'gardener-thumb');?>
                                </div>
                                <div class="name font_two">
                                    <?php the_title();?>
                                </div>
                                <?php if(esc_attr(ale_get_meta('gardener_post'))) {?>
                                    <div class="position font_one">
                                        <?php echo esc_attr(ale_get_meta('gardener_post'));?>
                                    </div>
                                <?php }?>
                                <div class="social_links">
                                    <?php if(ale_get_meta('gardener_fb')) {?><a href="<?php echo esc_url(ale_get_meta('gardener_fb'))?>" class="fb_icon" target="_blank"><i class="fa fa-facebook-square"></i></a><?php }?>
                                    <?php if(ale_get_meta('gardener_twi')) {?><a href="<?php echo esc_url(ale_get_meta('gardener_twi'))?>" class="twi_icon" target="_blank"><i class="fa fa-twitter"></i></a><?php }?>
                                    <?php if(ale_get_meta('gardener_email')) {?><a href="mailto:<?php echo esc_url(ale_get_meta('gardener_email'))?>" class="mail_icon" target="_blank"><i class="fa fa-envelope"></i></a><?php }?>
                                </div>
                                <div class="content_area font_one">
                                    <?php echo ale_limit_excerpt(20);?>
                                </div>
                            </div>
                        </div>

                    <?php }?>
                <?php endwhile; endif; wp_reset_query(); ?>
            </div>
        </div>

    </div>
</section>
<?php get_footer(); ?>