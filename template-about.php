<?php
/**
 * Template Name: About Template
 */
get_header(); ?>
<section class="site_container">
    <div class="page_heading font_two">
        <h2 class="page_title wrapper"><?php the_title();?></h2>
    </div>
            <span class="sub-title">
                <?php echo esc_attr(get_post_meta('info_title'));?>
            </span>
    <!-- Content -->
    <div class="story about_template cf">
    <?php if (have_posts()) : while(have_posts()) : the_post(); ?>

        <div class="about_author">
            <div class="wrapper">
                <?php if (esc_url(ale_get_meta('author_photo'))) {?>
                    <div class="image_box">
                        <img src="<?php echo esc_url(ale_get_meta('author_photo'))?>" alt="<?php echo esc_attr(ale_get_meta('author_name'));?>">
                    </div>
                <?php }?>
                <div class="box_data <?php if (ale_get_meta('author_photo')) {echo "have_image"; }?>">
                    <?php if (esc_attr(ale_get_meta('author_subtitle'))) {?>
                        <h2 class="subtitle font_two">
                            <?php echo esc_attr(ale_get_meta('author_subtitle'));?>
                        </h2>
                    <?php }?>
                    <div class="description">
                        <?php the_content() ;?>
                    </div>
                    <div class="author_name">
                        <?php if (esc_attr(ale_get_meta('author_name'))) {?>
                            <span class="author font_two"><?php echo esc_attr(ale_get_meta('author_name'));?></span>
                        <?php }?>
                        <?php if (esc_attr(ale_get_meta('author_position'))) {?>
                            <span class="position"><?php echo esc_attr(ale_get_meta('author_position'));?></span>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php if(ale_get_meta('additional_info') == 'enable') {?>
        <div class="additional_info_box">
            <div class="wrapper">
                <div class="top_info">
                    <div class="left_info">
                        <?php if (esc_attr(ale_get_meta('info_title'))) {?>
                            <h2 class="title"><?php echo esc_attr(ale_get_meta('info_title'));?></h2>
                        <?php }?>
                    </div>
                    <div class="right_info">
                        <?php if (esc_url(ale_get_meta('info_photo_one'))) {?>
                            <img src="<?php echo esc_url(ale_get_meta('info_photo_one'));?>" alt="<?php echo esc_attr(ale_get_meta('author_name'));?>">
                        <?php }?>
                    </div>
                </div>
                <div class="bottom_info">
                    <div class="left_info">
                        <?php if (esc_url(ale_get_meta('info_photo_two'))) {?>
                            <img src="<?php echo esc_url(ale_get_meta('info_photo_two'));?>" alt="<?php echo esc_attr(ale_get_meta('author_name'));?>">
                        <?php }?>
                    </div>
                    <div class="right_info">
                        <?php if (esc_attr(ale_get_meta('info_description'))) {?>
                            <p class="description"><?php echo esc_attr(ale_get_meta('info_description'));?></p>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    <?php }?>
    <?php if(ale_get_meta('skills_info') == 'enable') {?>
        <div class="skills_container wrapper">
            <div class="skills_box">
                <?php if (esc_url(ale_get_meta('info_icon_1'))) {?>
                    <div class="skills_image">
                        <img src="<?php echo esc_url(ale_get_meta('info_icon_1'));?>" alt="<?php echo esc_attr(ale_get_meta('skills_title_1'));?>">
                    </div>
                <?php }?>
                <div class="info_box">
                    <?php if (esc_attr(ale_get_meta('skills_title_1'))) {?>
                        <h2 class="title font_two"><?php echo esc_attr(ale_get_meta('skills_title_1'));?></h2>
                    <?php }?>
                    <?php if (esc_attr(ale_get_meta('skills_description_1'))) {?>
                        <p class="description"><?php echo esc_attr(ale_get_meta('skills_description_1'));?></p>
                    <?php }?>
                </div>
            </div>
            <div class="skills_box">
                <?php if (esc_url(ale_get_meta('info_icon_2'))) {?>
                    <div class="skills_image">
                        <img src="<?php echo esc_url(ale_get_meta('info_icon_2'));?>" alt="<?php echo esc_attr(ale_get_meta('skills_title_2'));?>">
                    </div>
                <?php }?>
                <div class="info_box">
                    <?php if (esc_attr(ale_get_meta('skills_title_2'))) {?>
                        <h2 class="title font_two"><?php echo esc_attr(ale_get_meta('skills_title_2'));?></h2>
                    <?php }?>
                    <?php if (esc_attr(ale_get_meta('skills_description_2'))) {?>
                        <p class="description"><?php echo esc_attr(ale_get_meta('skills_description_2'));?></p>
                    <?php }?>
                </div>
            </div>
            <div class="skills_box">
                <?php if (esc_url(ale_get_meta('info_icon_3'))) {?>
                    <div class="skills_image">
                        <img src="<?php echo esc_url(ale_get_meta('info_icon_3'));?>" alt="<?php echo esc_attr(ale_get_meta('skills_title_3'));?>">
                    </div>
                <?php }?>
                <div class="info_box">
                    <?php if (esc_attr(ale_get_meta('skills_title_3'))) {?>
                        <h2 class="title font_two"><?php echo esc_attr(ale_get_meta('skills_title_3'));?></h2>
                    <?php }?>
                    <?php if (esc_attr(ale_get_meta('skills_description_3'))) {?>
                        <p class="description"><?php echo esc_attr(ale_get_meta('skills_description_3'));?></p>
                    <?php }?>
                </div>
            </div>
        </div>
    <?php }?>
    <?php if(ale_get_meta('video_info') == 'enable') {?>
        <div class="partner_container">
            <div class="video_box">
                <div class="video">
                    <figure>
                        <img src="<?php echo esc_url(ale_get_meta('video_photo'));?>" alt="">
                        <figcaption>
                            <a class="venobox_video_link" data-autoplay="true" data-vbtype="video" href="<?php echo esc_url(ale_get_meta('video_link'));?>">
                                <span class="icon_player">
                                    <i class="fa fa-play"></i>
                                </span>
                            </a>
                        </figcaption>
                    </figure>
                </div>
                <div class="info_description">
                    <?php if (esc_attr(ale_get_meta('video_title'))) {?>
                        <h3 class="font_two"><?php echo ale_wp_kses(ale_get_meta('video_title'));?></h3>
                    <?php }?>
                    <?php if (esc_attr(ale_get_meta('video_description'))) {?>
                        <p class="description">
                            <?php echo esc_attr(ale_get_meta('video_description'));?>
                        </p>
                    <?php }?>
                </div>
            </div>
            <div class="partner_box">
                    <?php
                    $args = array(
                        'post_type'   => 'partners',
                        'posts_per_page' => 5
                    );

                    $partners = new WP_Query($args);

                    if ($partners->have_posts()) : while ($partners->have_posts()) : $partners->the_post();?>
                        <span class="partners font_two">
                            <?php if (esc_url(ale_get_meta('partners_link_site'))) {?>
                                <a href="<?php esc_url(ale_get_meta('partners_link_site'))?>">
                                    <?php the_title();?>
                                </a>
                            <?php }?>
                        </span>
                    <?php endwhile; endif; wp_reset_query();?>
            </div>
        </div>
    <?php }?>

    <?php endwhile; else: ?>
        <?php get_template_part('partials/notfound')?>
    <?php endif; ?>

    <?php if (comments_open()) : ?>
        <?php comments_template(); ?>
    <?php endif; ?>
</section>
<?php get_footer(); ?>