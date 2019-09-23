<?php get_header(); ?>
<section class="site_container">
    <div class="page_heading font_two">
        <h2 class="page_title wrapper"><?php esc_html_e('Our Blog', 'gardener');?></h2>
    </div>
    <div class="blog_cats">
        <div class="wrapper">
            <ul class="font_two">
                <li class="current_item"><?php echo esc_html_e('All', 'gardener');?></li>
                <?php
                    $categories = get_categories( array(
                        'orderby' => 'name',
                        'order'   => 'ASC'
                    ) );
                    foreach( $categories as $category ) {
                        $category_link = sprintf(
                            '<li><a href="%1$s" alt="%2$s">%3$s</a></li>',
                            esc_url( get_category_link( $category->term_id ) ),
                            esc_attr( $category->name ),
                            esc_html( $category->name )
                        );
                        echo ale_wp_kses($category_link);
                    }
                ?>
            </ul>
        </div>
    </div>
    <!-- Content -->
    <div class="story posts_list cf">
        <div class="cf wrapper">
            <div class="grid">
                <div class="grid-sizer"></div>
                <div class="gutter-sizer"></div>
        <?php
        $i = 0;
        if (have_posts()) : while(have_posts()) : the_post(); $i++;

            if($i == 1){?>

            <article <?php post_class('grid-item topimg grid-item--width2'); ?> id="post-<?php the_ID()?>" data-post-id="<?php the_ID()?>">
                <figure>
                    <?php echo get_the_post_thumbnail(get_the_ID(),'post-topimg');?>
                    <figcaption>
                        <div class="post_data">
                            <h2 class="post_title font_two">
                                <a href="<?php the_permalink();?>">
                                    <?php if (esc_attr(ale_get_meta('discount_service'))) {?>
                                        <div class="sale">
                                            <?php echo esc_attr(ale_get_meta('discount_service'));?>
                                        </div>
                                    <?php }?>
                                    <?php
                                    $title = get_the_title();
                                    echo wp_trim_words( $title, 3, ' ...' );
                                    ?>
                                </a>
                            </h2>
                            <?php if (esc_attr(ale_get_meta('post_sub_title'))) {?>
                                <span class="subtitle font_one">
                                    <?php $content = esc_attr(ale_get_meta('post_sub_title'));
                                    $trimmed_content = wp_trim_words( $content, 30, ' . . .' );
                                    echo ale_wp_kses($trimmed_content);?>
                                </span>
                            <?php }?>
                            <div class="post_info">
                                <div class="button font_two">
                                    <a href="<?php the_permalink();?>"><span class="icon"><i class="fa fa-arrow-right"></i></span><?php esc_html_e('Read More', 'gardener');?></a>
                                </div>
                                <span class="coments_count">
                                    <i class="fa fa-comment"></i><?php comments_number();?>
                                </span>
                                <span class="date_post">
                                    <i class="fa fa-clock-o"></i><?php the_date();?>
                                </span>
                            </div>
                        </div>
                    </figcaption>
                </figure>
            </article>
            <?php } else {?>
                <article class="grid-item blogimg <?php if (esc_attr(ale_get_meta('discount_service'))) echo 'discount';?>" data-post-id="<?php the_ID()?>">
                    <?php if(get_the_post_thumbnail(get_the_ID(),'post-blogimg')) {?>
                        <div class="post_thumbnail">
                            <?php echo get_the_post_thumbnail(get_the_ID(),'post-blogimg');?>
                        </div>
                    <?php }?>
                    <div class="post_data">
                        <span class="post_categoty font_two">
                            <?php the_category(' '); ?>
                        </span>
                        <h2 class="post_title font_two">
                            <a href="<?php the_permalink();?>">
                                <?php if (esc_attr(ale_get_meta('discount_service'))) {?>
                                    <div class="sale">
                                        <?php echo esc_attr(ale_get_meta('discount_service'));?>
                                    </div>
                                <?php }?>
                                <?php
                                $title = get_the_title();
                                echo wp_trim_words( $title, 3, ' ...' );
                                ?>
                            </a>
                        </h2>
                        <?php if (esc_attr(ale_get_meta('post_sub_title'))) {?>
                            <span class="subtitle font_one">
                                <?php $content = esc_attr(ale_get_meta('post_sub_title'));
                                $trimmed_content = wp_trim_words( $content, 30, ' . . .' );
                                echo ale_wp_kses ($trimmed_content);?>
                            </span>
                        <?php }?>
                        <div class="post_info">
                            <div class="button font_two">
                                <a href="<?php the_permalink();?>"><span class="icon"><i class="fa fa-arrow-right"></i></span><?php esc_html_e('Read More', 'gardener');?></a>
                            </div>
                            <span class="coments_count">
                                    <i class="fa fa-comment"></i><?php comments_number();?>
                                </span>
                            <span class="date_post">
                                    <i class="fa fa-clock-o"></i><?php echo get_the_date();?>
                            </span>
                        </div>
                    </div>
                </article>
            <?php }?>

        <?php endwhile; else: ?>
            <?php get_template_part('partials/notfound')?>
        <?php endif; ?>
    </div>
    </div>

<?php get_template_part('partials/pagination'); ?>
    </div>
    </section>
<?php get_footer(); ?>