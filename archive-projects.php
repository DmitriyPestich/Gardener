<?php get_header(); ?>
    <section class="site_container page_projects_archive">
    <div class="page_heading font_two">
        <h2 class="page_title wrapper"><?php esc_html_e('Projects', 'gardener');?></h2>
    </div>
    <div class="blog_cats">
        <div class="wrapper">
            <ul class="font_two">
                <li class="current_item"><?php echo esc_html_e('All', 'gardener');?></li>
                <?php
                $categories = get_terms( array(
                    'taxonomy' => 'projects-category',
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
    <div class="story projects_list cf">
        <div class="projects_grid_container cf">
            <div class="grid_projects">
                <div class="grid-sizer"></div>
                <div class="gutter-sizer"></div>
				<?php $i = 0; if (have_posts()) : while (have_posts()) : the_post(); $i++;

                            if ($i == 1) {?>
                            <div class="grid-projects-item" id="post-<?php the_ID()?>" data-post-id="<?php the_ID()?>">
                                <a href="<?php the_permalink()?>"><?php echo get_the_post_thumbnail(get_the_ID(),'projects-img1');?>
                                    <span class="hover_icon"></span>
                                </a>
                            </div>
                            <?php } else if ($i == 2) { ?>
                                <div class="grid-projects-item grid-projects-item-two" id="post-<?php the_ID()?>" data-post-id="<?php the_ID()?>">
                                    <a href="<?php the_permalink()?>"><?php echo get_the_post_thumbnail(get_the_ID(),'projects-img2');?>
                                        <span class="hover_icon"></span>
                                    </a>
                                </div>
                            <?php } else if ($i == 3) { ?>
                                <div class="grid-projects-item" id="post-<?php the_ID()?>" data-post-id="<?php the_ID()?>">
                                    <a href="<?php the_permalink()?>"><?php echo get_the_post_thumbnail(get_the_ID(),'projects-img3');?>
                                        <span class="hover_icon"></span>
                                    </a>
                                </div>
                            <?php } else if ($i == 4) { ?>
                                <div class="grid-projects-item" id="post-<?php the_ID()?>" data-post-id="<?php the_ID()?>">
                                    <a href="<?php the_permalink()?>"><?php echo get_the_post_thumbnail(get_the_ID(),'projects-img7');?>
                                        <span class="hover_icon"></span>
                                    </a>
                                </div>
                            <?php } else if ($i == 5) { ?>
                                <div class="grid-projects-item" id="post-<?php the_ID()?>" data-post-id="<?php the_ID()?>">
                                    <a href="<?php the_permalink()?>"><?php echo get_the_post_thumbnail(get_the_ID(),'projects-img5');?>
                                        <span class="hover_icon"></span>
                                    </a>
                                </div>
                            <?php } else if ($i == 6) { ?>
                                <div class="grid-projects-item" id="post-<?php the_ID()?>" data-post-id="<?php the_ID()?>">
                                    <a href="<?php the_permalink()?>"><?php echo get_the_post_thumbnail(get_the_ID(),'projects-img6');?>
                                        <span class="hover_icon"></span>
                                    </a>
                                </div>
                            <?php } else if ($i == 7) { ?>
                                <div class="grid-projects-item" id="post-<?php the_ID()?>" data-post-id="<?php the_ID()?>">
                                    <a href="<?php the_permalink()?>"><?php echo get_the_post_thumbnail(get_the_ID(),'projects-img4');?>
                                        <span class="hover_icon"></span>
                                    </a>
                                </div>
                            <?php } else if ($i == 8) { ?>
                                <div class="grid-projects-item grid-projects-item-two" id="post-<?php the_ID()?>" data-post-id="<?php the_ID()?>">
                                    <a href="<?php the_permalink()?>"><?php echo get_the_post_thumbnail(get_the_ID(),'projects-img10');?>
                                        <span class="hover_icon"></span>
                                    </a>
                                </div>
                            <?php } else if ($i == 9) { ?>
                                <div class="grid-projects-item" id="post-<?php the_ID()?>" data-post-id="<?php the_ID()?>">
                                    <a href="<?php the_permalink()?>"><?php echo get_the_post_thumbnail(get_the_ID(),'projects-img9');?>
                                        <span class="hover_icon"></span>
                                    </a>
                                </div>
                            <?php } else if ($i == 10) { ?>
                                <div class="grid-projects-item" id="post-<?php the_ID()?>" data-post-id="<?php the_ID()?>">
                                    <a href="<?php the_permalink()?>"><?php echo get_the_post_thumbnail(get_the_ID(),'projects-img8');?>
                                        <span class="hover_icon"></span>
                                    </a>
                                </div>
                            <?php } ?>


				<?php endwhile; else: ?>
					<?php get_template_part('partials/notfound')?>
                <?php endif; ?>
            </div>
        </div>

        <?php get_template_part('partials/pagination'); ?>
    </div>
    </section>
<?php get_footer(); ?>