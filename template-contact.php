<?php
/* *
 * Template Name: Contact Template
 * */
get_header(); ?>
<section class="site_container">
    <div class="page_heading font_two">
        <h2 class="page_title wrapper"><?php the_title();?></h2>
    </div>
    <div class="story contact_template cf">
        <div class="wrapper contact_blocks">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="text_info">
                    <div class="content">
                        <?php the_content();?>
                    </div>
                    <?php if (esc_attr(ale_get_meta('phone_number'))) {?>
                        <div class="phone_box">
                            <div class="box_container">
                                <i class="fa fa-phone"></i>
                                <?php if (esc_attr(ale_get_meta('phone_label'))) {?>
                                    <span class="phone_label">
                                        <?php echo esc_attr(ale_get_meta('phone_label'));?>
                                    </span>
                                <?php }?>
                                <span class="phone_number">
                                <?php echo esc_attr(ale_get_meta('phone_number'));?>
                            </span>
                            </div>
                        </div>
                    <?php }?>

                    <?php if (esc_attr(ale_get_meta('your_email'))) {?>
                        <div class="email_box">
                            <div class="box_container">
                                <i class="fa fa-envelope"></i>
                                <?php if (esc_attr(ale_get_meta('email_label'))) {?>
                                    <span class="email_label">
                                        <?php echo esc_attr(ale_get_meta('email_label'));?>
                                    </span>
                                <?php }?>
                                <span class="email">
                                    <?php echo esc_attr(ale_get_meta('your_email'));?>
                                </span>
                            </div>
                        </div>
                    <?php }?>

                    <?php if (ale_wp_kses(ale_get_meta('your_address'))) {?>
                        <div class="address_box">
                            <div class="box_container">
                                <i class="fa fa-map"></i>
                                <?php if (esc_attr(ale_get_meta('address_label'))) {?>
                                    <span class="address_label">
                                        <?php echo esc_attr(ale_get_meta('address_label'));?>
                                    </span>
                                <?php }?>
                                <span class="address">
                                    <?php echo ale_wp_kses(ale_get_meta('your_address'));?>
                                </span>
                            </div>
                        </div>
                    <?php }?>
                </div>
                <div class="contact_form">
                    <div class="content_box">
                        <?php if (esc_attr(ale_get_meta('contact_title'))) {?>
                            <h3 class="title font_two">
                                <?php echo esc_attr(ale_get_meta('contact_title'));?>
                            </h3>
                        <?php }?>
                        <?php if (esc_attr(ale_get_meta('contact_description'))) {?>
                            <span class="description">
                            <?php echo esc_attr(ale_get_meta('contact_description'));?>
                        </span>
                        <?php }?>
                        <form method="post" action="<?php the_permalink();?>" class="contact_page_form">
                            <div class="field">
                                <input name="contact[name]" type="text" placeholder="<?php esc_html_e('Name','gardener');?>" value="<?php echo isset($_POST['contact']['name']) ? $_POST['contact']['name'] : ''?>" required="required" id="contact-form-name" />
                            </div>
                            <div class="field">
                                <input name="contact[email]" type="email" placeholder="<?php esc_html_e('E-mail','gardener');?>" value="<?php echo isset($_POST['contact']['email']) ? $_POST['contact']['email'] : ''?>" required="required" id="contact-form-email" />
                            </div>
                            <div class="field">
                                <textarea name="contact[massage]" placeholder="<?php esc_html_e('Message...','gardener');?>" id="contact-form-massage" required="required"><?php echo isset($_POST['contact']['massege']) ? $_POST['contact']['message'] : ''?></textarea>
                            </div>

                            <input type="submit" class="submit" value="<?php esc_html_e('Contact', 'gardener')?>">
                            <?php wp_nonce_field() ?>
                        </form>
                    </div>
                </div>
                <div class="map_container">
                    <div class="map">
                         <?php echo do_shortcode('[ale_map address="'.strip_tags(ale_get_meta('your_address')).'" width="100%" height="745px"]');?>
                    </div>
                </div>
            <?php endwhile; else: ?>
                <?php get_template_part('partials/notfound')?>
            <?php endif; ?>


            <?php if (comments_open() || get_comments_number()) : ?>
                <?php comments_template(); ?>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>

