<?php

if(in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option ('active_plugins')))){
    //WooCommerce theme Declarations
    add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );
    function mytheme_add_woocommerce_support() {
        add_theme_support( 'woocommerce' );
    }

    //Pagination Function
    function ale_woocommerce_custom_pagination(){
        get_template_part('partials/pagination');
    }

    //Get product category
    function ale_woocommmerce_categoty(){
        global $product;

        echo $product->get_categories();
    }

    //Get the counter meta
    function ale_get_counter_meta(){
        if(ale_get_meta('product_counter')){
            echo ' ('.ale_get_meta('product_counter'). ' items' .')';
        }
    }

    //Get the counter meta
    function ale_woocommerce_product_descr(){
        if(ale_get_meta('product_description')){
            $ale_product_descr = wp_trim_words(ale_get_meta('product_description'), 40, ' . . .' );
            echo $ale_product_descr;
        }
    }

    //Container for thumbnail
    function ale_container_for_thumbnail_before(){
        echo '<div class="container_for_thumbnail">';
    }

    function ale_close_div(){
        echo '</div>';
    }

    //Accordion Products Hooks
    function ale_woocommerce_product_accordion(){
        wp_enqueue_script('ale-woo-accordion');

        $tabs = apply_filters('woocommerce_product_tabs', array() );

        if ( ! empty( $tabs ) ) : ?>
            <div id="accordion-container" class="woocommerce-tabs wc-tabs-wrapper minimal-accordion-container">
                <?php foreach ( $tabs as $key => $tab ) : ?>
                    <h1 class="<?php echo esc_attr( $key ); ?>_tab">
                        <?php echo apply_filters( 'woocommerce_product_' .$key. '_tab_title', esc_html( $tab['title'] ), $key ); ?>
                    </h1>
                    <div id="tab-<?php echo esc_attr( $key ); ?>">
                        <?php call_user_func( $tab['callback'], $key, $tab ); ?>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif;
    }

    /*
     * Archive Products Hooks
     */

    //Disable Breadcrumb

    remove_action('woocommerce_before_main_content','woocommerce_breadcrumb', 20);

    //Remove default pagination

    remove_action('woocommerce_after_shop_loop','woocommerce_pagination', 10);
    add_action('woocommerce_after_shop_loop','ale_woocommerce_custom_pagination', 20);

    //Remove notices from Top Line
    remove_action( 'woocommerce_before_shop_loop','woocommerce_output_all_notices', 10);

    //Add notices before main content
    add_action('woocommerce_before_main_content','woocommerce_output_all_notices', 20);

    //Output 4 products on the page
    add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 4;' ), 20 );

    //Remove link manager
    remove_action( 'woocommerce_after_shop_loop_item','woocommerce_template_loop_product_link_close', 5);
    add_action('woocommerce_before_shop_loop_item_title','woocommerce_template_loop_product_link_close', 20);

    //Add categories after title
    add_action( 'woocommerce_shop_loop_item_title',create_function('', 'echo "<div class=\"category_top_line\">";'), 15,2);
    add_action( 'woocommerce_shop_loop_item_title','ale_woocommmerce_categoty', 15);
    add_action( 'woocommerce_shop_loop_item_title','ale_get_counter_meta', 15);
    add_action( 'woocommerce_shop_loop_item_title',create_function('', 'echo "</div>";'), 15,2);

    //Remove Cart from product item
    remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10);

    //Remove sale flash from default position
    remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10);

    //Add sale flash before title
    add_action( 'woocommerce_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 5);

    //Hover div data
    add_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_open', 5);
    add_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_title', 5);
    add_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5);
    add_action( 'woocommerce_after_shop_loop_item',create_function('', 'echo "<div class=\"category_top_line\">";'), 10,2);
    add_action( 'woocommerce_after_shop_loop_item','ale_woocommmerce_categoty', 10);
    add_action( 'woocommerce_after_shop_loop_item','ale_get_counter_meta', 15);
    add_action( 'woocommerce_after_shop_loop_item',create_function('', 'echo "</div>";'), 15,2);
    add_action( 'woocommerce_after_shop_loop_item','woocommerce_template_loop_price', 20);
    add_action( 'woocommerce_after_shop_loop_item',create_function('', 'echo "<div class=\"hover_description\">";'), 25,2);
    add_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_open', 25);
    add_action( 'woocommerce_after_shop_loop_item','ale_woocommerce_product_descr', 25);
    add_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 25);
    add_action( 'woocommerce_after_shop_loop_item',create_function('', 'echo "</div>";'), 25,2);
    add_action( 'woocommerce_after_shop_loop_item','woocommerce_template_loop_add_to_cart', 30);


    //Remove rating from archive page
    remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5);

    //Add container for thumbnail
    add_action('woocommerce_before_shop_loop_item_title', 'ale_container_for_thumbnail_before', 5);
    add_action('woocommerce_before_shop_loop_item_title', 'ale_close_div', 15);



    /*
     * Single Product Page Hooks
     */

    //Remove image and sales from first position
    remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10 );
    remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20 );

    //Add sale to second position
    add_action( 'woocommerce_single_product_summary', 'woocommerce_show_product_images', 15 );

    //Remove rating from first place
    remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );

    //Add rating on second place
    add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 11 );

    //Remove tabs
    remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );
    add_action( 'woocommerce_after_single_product_summary', 'ale_woocommerce_product_accordion', 10 );

    //Up sells Products columns based on options columns
    remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );
    add_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_upsells', 15 );

    //Add container for title, prise and rating
    add_action( 'woocommerce_single_product_summary', create_function('', 'echo "<div class=\"wrap_for_top_info\">";'), 4,2 );
    add_action( 'woocommerce_single_product_summary', create_function('', 'echo "</div>";'), 13,2 );

    //Add container for prise and rating
    add_action( 'woocommerce_single_product_summary', create_function('', 'echo "<div class=\"wrap_for_rating_and_price\">";'), 6,2 );
    add_action( 'woocommerce_single_product_summary', create_function('', 'echo "</div>";'), 12,2 );

    //Add container for cart and single meta
    add_action( 'woocommerce_single_product_summary', create_function('', 'echo "<div class=\"wrap_for_cart_and_meta\">";'), 29,2 );
    add_action( 'woocommerce_single_product_summary', create_function('', 'echo "</div>";'), 41,2 );

    //Disable single sharing
    remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_sharing', 50 );

    if ( ! function_exists( 'woocommerce_output_upsells' ) ) {
        function woocommerce_output_upsells() {
            woocommerce_upsell_display( 4, 3 );
        }
    }

    //Related products count based on columns option settings
    add_filter( 'woocommerce_output_related_products_args', 'ale_related_products_args' );
    function ale_related_products_args( $args ) {

        $args['posts_per_page'] = 6;
        $args['columns']        = 3;

        return $args;

    }

    //add container for thumbnail in mini-cart

   /* add_filter( 'woocommerce_cart_item_thumbnail', 'add_wrapp_for_mini_cart_img' );

    function add_wrapp_for_mini_cart_img( $product_image, $cart_item ) {

        if( is_cart() ) {
            $product = $cart_item['data'];

            $product_image = $product->get_image();
        }
        return '<div class="wrap_img">'.$product_image.'</div>';
    }

    //add container for title product in mini-cart

    add_filter( 'woocommerce_cart_item_name', 'add_wrapp_for_title_product_minicart' );

    function add_wrapp_for_title_product_minicart( $product_name, $cart_item ) {

        if( is_cart() ) {
            $product_title = $cart_item['data'];

            $product_name = $product_title->get_name();
        }
        return '<div class="wrap_title">'.$product_name.'</div>';
    }*/

    function iconic_modify_theme_support() {
        update_option( 'woocommerce_thumbnail_cropping', '1:1' );

        update_option( 'woocommerce_thumbnail_cropping', 'uncropped' );
        update_option( 'woocommerce_thumbnail_cropping_custom_width', '4' );
        update_option( 'woocommerce_thumbnail_cropping_custom_height', '3' );
        update_option( 'woocommerce_thumbnail_image_width', '900' );


    }

    add_action( 'after_switch_theme', 'iconic_modify_theme_support', 1 );





    //New Styles
    function ale_woocommerce_custom_styles(){
        echo '<style type="text/css">';

        echo "
        
        
        
        ";
        echo '</style>';

    }

}
