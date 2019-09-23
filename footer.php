<footer class="theme_footer <?php if (is_page_template('template-about.php')) {echo 'footer_for_about'; }?> ">
    <div class="footer">
        <div class="top_footer">
            <div class="social_container wrapper">
                <div class="social_profiles font_two">
                    <?php get_template_part('partials/social_profiles' );?>
                </div>
                <div class="social_share">
                    <div class="fb-like" data-href="<?php echo esc_url( home_url( '/' ) ); ?>" data-width="" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
                </div>
            </div>
        </div>
        <div class="bottom_footer">
            <div class="line_footer wrapper">
                <div class="footer_logo">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
                        <?php if(ale_get_option('footerlogo')) {?>
                            <img src="<?php echo esc_url (ale_get_option('footerlogo')); ?>" alt="logo" class="logo" title="<?php esc_attr(bloginfo('title')); ?>"/>
                        <?php } else { ?>
                            <h1><?php esc_attr(bloginfo('title')); ?></h1>
                        <?php }?>
                    </a>
                </div>
                <div class="footer_info">
                    <div class="item_contacts font_two">
                        <span class="contacts_label">
                            <?php esc_html_e('Contacts', 'gardener');?>
                        </span>
                        <?php if(ale_get_option('footer_callnumber')){ ?>
                            <span class="footer_phone font_one">
                                <?php echo ale_get_option('footer_callnumber');?>
                            </span>
                        <?php }?>
                        <?php if(ale_get_option('footer_email_address')){ ?>
                            <span class="footer_email font_one">
                                <a href="mailto:<?php echo ale_get_option('footer_email_address');?>"><?php echo ale_get_option('footer_email_address');?></a>
                            </span>
                        <?php }?>
                    </div>
                    <div class="item_address font_two">
                        <span class="address_label">
                            <?php esc_html_e('Address', 'gardener');?>
                        </span>
                        <?php if(ale_get_option('footer_address')){ ?>
                            <span class="footer_address font_one">
                                <?php echo ale_get_option('footer_address');?>
                            </span>
                        <?php }?>
                    </div>
                    <div class="item_copyrights">
                        <?php if(ale_get_option('footer_copyrights')){
                             echo ale_get_option('footer_copyrights');
                        }
                        else {
                            echo "© Copyrights Reserved";
                        }; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v3.3"></script>

</body>
</html>