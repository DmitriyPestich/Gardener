<?php get_header(); ?>
    <section class="site_container page_gardeners_archive">
        <div class="page_heading font_two">
            <h2 class="page_title wrapper"><?php esc_html_e('Projects', 'gardener');?></h2>
        </div>
        <div class="story gardeners_list cf">
            <div class="staff_members">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php the_title();
                    echo ale_get_meta('partners_sub_title');
                    ?>


                <?php endwhile; else: ?>
                    <?php get_template_part('partials/notfound')?>
                <?php endif; ?>
            </div>


        </div>
    </section>
<?php get_footer(); ?>