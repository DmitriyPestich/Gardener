<?php
/**
 * Get current theme options
 *
 * @return array
 */
function ale_get_options() {

    $headerfont = array_merge(ale_get_safe_webfonts(), ale_get_google_webfonts());

    $background_defaults = array(
        'color' => '',
        'image' => '',
        'repeat' => 'repeat',
        'position' => 'top center',
        'attachment'=>'scroll',
        'background-size'=>'cover'
    );



	$options = array();

    $options[] = array("name" => esc_html__("Brand","gardener"),
                        "type" => "heading",
                        "icon" => "fa-desktop");


    $options[] = array( "name" => esc_html__("Site Logo","gardener"),
                        "desc" => esc_html__("Upload or put the site logo link.","gardener"),
                        "id" => "ale_sitelogo",
                        "std" => "",
                        "type" => "upload");

    $options[] = array( "name" => esc_html__("Footer Logo","gardener"),
                        "desc" => esc_html__("Upload or put the footer logo link.","gardener"),
                        "id" => "ale_footerlogo",
                        "std" => "",
                        "type" => "upload");

    $options[] = array( 'name' => esc_html__("Manage Background","gardener"),
                        'desc' => esc_html__("Select the background color, or upload a custom background image. Default background is the #f5f5f5 color","gardener"),
                        'id' => 'ale_background',
                        'std' => $background_defaults,
                        'type' => 'background');

    $options[] = array( "name" => esc_html__("Uplaod a favicon icon","gardener"),
                        "desc" => esc_html__("Upload or put the link of your favicon icon","gardener"),
                        "id" => "ale_favicon",
                        "std" => "",
                        "type" => "upload");

    $options[] = array("name" => esc_html__("Header Options","gardener"),
                        "type" => "heading",
                        "icon" => "fa-header");

    $options[] = array( "name" => esc_html__("Header Call us Label","gardener"),
                        "desc" => esc_html__("Insert the call us label","gardener"),
                        "id" => "ale_header_phone_label",
                        "std" => "Call us",
                        "type" => "text");

    $options[] = array( "name" => esc_html__("Header Phone Number","gardener"),
                        "desc" => esc_html__("Insert the call number","gardener"),
                        "id" => "ale_header_phone",
                        "std" => "",
                        "type" => "text");

    $options[] = array("name" => esc_html__("Footer Options","gardener"),
                        "type" => "heading",
                        "icon" => "fa-copyright");

    $options[] = array( "name" => esc_html__("Footer Call Number","gardener"),
                        "desc" => esc_html__("Insert the call number","gardener"),
                        "id" => "ale_footer_callnumber",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => esc_html__("Footer Email Address","gardener"),
                        "desc" => esc_html__("Insert the Email Address.","gardener"),
                        "id" => "ale_footer_email_address",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => esc_html__("Your Address","gardener"),
                        "desc" => esc_html__("Insert the Address.","gardener"),
                        "id" => "ale_footer_address",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => esc_html__("Copyrights","gardener"),
                        "desc" => esc_html__("Insert the Copyrights text","gardener"),
                        "id" => "ale_footer_copyrights",
                        "std" => "",
                        "type" => "textarea");


    $options[] = array( "name" => esc_html__("Typography","gardener"),
                        "type" => "heading",
                        "icon" => "fa-font");

    $options[] = array( "name" => esc_html__("Select the First Font from Google Library","gardener"),
                        "desc" => esc_html__("The default Font is - Arial","gardener"),
                        "id" => "ale_font_one",
                        "std" => "Arial",
                        "type" => "select",
                        "options" => $headerfont);

    $options[] = array( "name" => esc_html__("Select the First Font Properties from Google Library","gardener"),
                        "desc" => esc_html__("The default Font (extended) is - 400,400i,600,800,800i,900","gardener"),
                        "id" => "ale_font_one_ex",
                        "std" => "600,700",
                        "type" => "text",
                        );

    $options[] = array( "name" => esc_html__("Select the Second Font from Google Library","gardener"),
                        "desc" => esc_html__("The default Font is - Dosis","gardener"),
                        "id" => "ale_font_two",
                        "std" => "Dosis",
                        "type" => "select",
                        "options" => $headerfont);

    $options[] = array( "name" => esc_html__("Select the Second Font Properties from Google Library","gardener"),
                        "desc" => esc_html__("The default Font (extended) is - 400i","gardener"),
                        "id" => "ale_font_two_ex",
                        "std" => "300,500,600,700,800",
                        "type" => "text",
                        );

    $options[] = array( 'name' => esc_html__("H1 Style","gardener"),
                        'desc' => esc_html__("Change the h1 style","gardener"),
                        'id' => 'ale_h1sty',
                        'std' => array('size' => '32px','face' => 'Dosis','style' => 'normal','transform'=>'none', 'weight'=>'700','lineheight'=>'normal','color' => '#000000'),
                        'type' => 'typography');

    $options[] = array( 'name' => esc_html__("H2 Style","gardener"),
                        'desc' => esc_html__("Change the h2 style","gardener"),
                        'id' => 'ale_h2sty',
                        'std' => array('size' => '28px','face' => 'Dosis','style' => 'normal','transform'=>'none', 'weight'=>'700','lineheight'=>'normal','color' => '#000000'),
                        'type' => 'typography');

    $options[] = array( 'name' => esc_html__("H3 Style","gardener"),
                        'desc' => esc_html__("Change the h3 style","gardener"),
                        'id' => 'ale_h3sty',
                        'std' => array('size' => '24px','face' => 'Dosis','style' => 'normal','transform'=>'none', 'weight'=>'700','lineheight'=>'normal','color' => '#000000'),
                        'type' => 'typography');

    $options[] = array( 'name' => esc_html__("H4 Style","gardener"),
                        'desc' => esc_html__("Change the h4 style","gardener"),
                        'id' => 'ale_h4sty',
                        'std' => array('size' => '20px','face' => 'Dosis','style' => 'normal','transform'=>'none', 'weight'=>'700','lineheight'=>'normal','color' => '#000000'),
                        'type' => 'typography');

    $options[] = array( 'name' => esc_html__("H5 Style","gardener"),
                        'desc' => esc_html__("Change the h5 style","gardener"),
                        'id' => 'ale_h5sty',
                        'std' => array('size' => '16px','face' => 'Dosis','style' => 'normal','transform'=>'none', 'weight'=>'700','lineheight'=>'normal','color' => '#000000'),
                        'type' => 'typography');

    $options[] = array( 'name' => esc_html__("H6 Style","gardener"),
                        'desc' => esc_html__("Change the h6 style","gardener"),
                        'id' => 'ale_h6sty',
                        'std' => array('size' => '14px','face' => 'Dosis','style' => 'normal','transform'=>'none', 'weight'=>'700','lineheight'=>'normal','color' => '#000000'),
                        'type' => 'typography');

    $options[] = array( 'name' => esc_html__("Body Style","gardener"),
                        'desc' => esc_html__("Change the body font style","gardener"),
                        'id' => 'ale_bodystyle',
                        'std' => array('size' => '14px','face' => 'Arial','style' => 'normal','transform'=>'none', 'weight'=>'400','lineheight'=>'24px','color' => '#434343'),
                        'type' => 'typography');

	$options[] = array( "name" => esc_html__("Social Profiles & Share","gardener"),
						"type" => "heading",
                        "icon" => "fa-address-book");

    $options[] = array( "name" => esc_html__("Twitter","gardener"),
                        "desc" => esc_html__("Your twitter profile URL.","gardener"),
                        "id" => "ale_twi",
                        "std" => "",
                        "type" => "text");

	$options[] = array( "name" => esc_html__("Facebook","gardener"),
						"desc" => esc_html__("Your facebook profile URL.","gardener"),
						"id" => "ale_fb",
						"std" => "",
						"type" => "text");

    $options[] = array( "name" => esc_html__("Youtube","gardener"),
                        "desc" => esc_html__("Your youtube profile URL.","gardener"),
                        "id" => "ale_you",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => esc_html__("LinkedIn","gardener"),
                        "desc" => esc_html__("Your LinkedIn profile URL.","gardener"),
                        "id" => "ale_lin",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => esc_html__("Pinterest","gardener"),
                        "desc" => esc_html__("Your Pinterest profile URL.","gardener"),
                        "id" => "ale_pin",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => esc_html__("Google Plus+","gardener"),
                        "desc" => esc_html__("Your Google Plus+ profile URL.","gardener"),
                        "id" => "ale_gpl",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => esc_html__("Tumblr","gardener"),
                        "desc" => esc_html__("Your Tumblr profile URL.","gardener"),
                        "id" => "ale_tum",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => esc_html__("Instagram","gardener"),
                        "desc" => esc_html__("Your Instagram profile URL.","gardener"),
                        "id" => "ale_insta",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => esc_html__("Reddit","gardener"),
                        "desc" => esc_html__("Your Reddit profile URL.","gardener"),
                        "id" => "ale_red",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => esc_html__("VK","gardener"),
                        "desc" => esc_html__("Your VK profile URL.","gardener"),
                        "id" => "ale_vk",
                        "std" => "",
                        "type" => "text");

	$options[] = array( "name" => esc_html__("Facebook Application ID","gardener"),
						"desc" => esc_html__("If you have Application ID you can connect the blog to your Facebook Profile and monitor statistics there.","gardener"),
						"id" => "ale_fb_id",
						"std" => "",
						"type" => "text");

	$options[] = array( "name" => esc_html__("Enable Open Graph","gardener"),
						"desc" => esc_html__("The Open Graph protocol enables any web page to become a rich object in a social graph.","gardener"),
						"id" => "ale_og_enabled",
						"std" => "",
						"type" => "checkbox");



	$options[] = array( "name" => esc_html__("Advanced Settings","gardener"),
						"type" => "heading",
                         "icon" => "fa-cogs");

	$options[] = array( "name" => esc_html__("Footer Code","gardener"),
						"desc" => esc_html__("If you have anything else to add in the footer - please add it here.","gardener"),
						"id" => "ale_footer_info",
						"std" => "",
						"type" => "textarea");


    $options[] = array("name" => esc_html__("Google Maps","gardener"),
                       "type" => "heading",
                       "icon" => "fa-map-marker");

    $options[] = array( "name" => esc_html__("Google Maps API Key","gardener"),
                        "desc" => ale_wp_kses(__("Paste a Google Maps API Key. You can generate a key on the  <a href=\"https://console.developers.google.com/apis/\" target=\"_blank\">Google console.</a>","gardener")),
                        "id" => "ale_maps_api_key",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => esc_html__("Custom Pin Icon","gardener"),
                        "desc" => esc_html__("Upload a Custom Pin Icon. Let it empty to use the default icon.","gardener"),
                        "id" => "ale_map_icon",
                        "std" => get_template_directory_uri()."/css/images/map.png",
                        "type" => "upload");

    $options[] = array( "name" => esc_html__("Map Custom Style","gardener"),
                        "desc" => esc_html__("Paste here a custom style for your google map. You can use the snazzymaps.com to take a ready style. ","gardener"),
                        "id" => "ale_maps_style",
                        "std" => "",
                        "type" => "text");

	return $options;
}


/**
 * Add Metaboxes
 * @param array $meta_boxes
 * @return array
 */
function ale_metaboxes($meta_boxes) {

	$meta_boxes = array();

    wp_reset_postdata();

    $prefix = "ale_";


    $meta_boxes[] = array(
        'id'         => 'home_settings_metabox',
        'title'      => esc_html__('Home Page Settings', 'gardener'),
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true,
        'show_on'    => array( 'key' => 'page-template', 'value' => array('template-home.php'), ), // Specific post templates to display this metabox
        'fields' => array(
            array(
                'name' => esc_html__('Enable Order Form Box','gardener'),
                'desc' => esc_html__('Enable or disable the order form on Homepage','gardener'),
                'id'   => $prefix . 'order_form',
                'std'  => 'enable',
                'type'    => 'select',
                'options' => array(
                    array( 'name' => esc_html__('Enable','gardener'), 'value' => 'enable', ),
                    array( 'name' => esc_html__('Disable','gardener'), 'value' => 'disable', ),
                ),
            ),

            array(
                'name' => esc_html__('Enable Services Box','gardener'),
                'desc' => esc_html__('Enable or disable the services on Homepage','gardener'),
                'id'   => $prefix . 'services_box',
                'std'  => 'enable',
                'type'    => 'select',
                'options' => array(
                    array( 'name' => esc_html__('Enable','gardener'), 'value' => 'enable', ),
                    array( 'name' => esc_html__('Disable','gardener'), 'value' => 'disable', ),
                ),
            ),

            array(
                'name' => esc_html__('Enable Partners Box','gardener'),
                'desc' => esc_html__('Enable or disable the partners on Homepage','gardener'),
                'id'   => $prefix . 'partners_box',
                'std'  => 'enable',
                'type'    => 'select',
                'options' => array(
                    array( 'name' => esc_html__('Enable','gardener'), 'value' => 'enable', ),
                    array( 'name' => esc_html__('Disable','gardener'), 'value' => 'disable', ),
                ),
            ),

            array(
                'name' => esc_html__('Enable Testimonials Box','gardener'),
                'desc' => esc_html__('Enable or disable the testimonials on Homepage','gardener'),
                'id'   => $prefix . 'testimonials_box',
                'std'  => 'enable',
                'type'    => 'select',
                'options' => array(
                    array( 'name' => esc_html__('Enable','gardener'), 'value' => 'enable', ),
                    array( 'name' => esc_html__('Disable','gardener'), 'value' => 'disable', ),
                ),
            ),

            array(
                'name' => esc_html__('Enable Portfolio Box','gardener'),
                'desc' => esc_html__('Enable or disable the portfolio on Homepage','gardener'),
                'id'   => $prefix . 'portfolio_box',
                'std'  => 'enable',
                'type'    => 'select',
                'options' => array(
                    array( 'name' => esc_html__('Enable','gardener'), 'value' => 'enable', ),
                    array( 'name' => esc_html__('Disable','gardener'), 'value' => 'disable', ),
                ),
            ),

            array(
                'name' => esc_html__('Order Box Custom Title','gardener'),
                'desc' => esc_html__('Type here the custom title for your order box','gardener'),
                'id'   => $prefix . 'order_box_title',
                'std'  =>'Order gardener',
                'type' => 'text',
            ),
            array(
                'name' => esc_html__('Gardeners Section Title','gardener'),
                'desc' => esc_html__('Type here the custom title for your gardeners section','gardener'),
                'id'   => $prefix . 'gardeners_title',
                'std'  => 'Gardeners',
                'type' => 'text',
            ),
            array(
                'name' => esc_html__('Order Box Gardener Sub Title','gardener'),
                'desc' => esc_html__('Type here the custom sub title','gardener'),
                'id'   => $prefix . 'order_box_gardener_subtitle',
                'std'  =>'Our best specialist',
                'type' => 'text',
            ),
            array(
                'name' => esc_html__('Projects Section Title','gardener'),
                'desc' => esc_html__('Type here the custom title for your projects section','gardener'),
                'id'   => $prefix . 'l_projects_title',
                'std'  => 'Latest projects',
                'type' => 'text',
            ),
            array(
                'name' => esc_html__('Projects Section Link Title','gardener'),
                'desc' => esc_html__('Type here the custom title for your projects section link title','gardener'),
                'id'   => $prefix . 'l_projects_link_title',
                'std'  => 'All projects',
                'type' => 'text',
            ),
            array(
                'name' => esc_html__('Partners Title','gardener'),
                'desc' => esc_html__('Type here the custom title for your partners title','gardener'),
                'id'   => $prefix . 'services_title',
                'std'  => 'Our partners',
                'type' => 'text',
            ),
            array(
                'name' => esc_html__('Background Partners','gardener'),
                'desc' => esc_html__('Add background for partners','gardener'),
                'id'   => $prefix . 'pertners_bg',
                'std'  => '',
                'type' => 'file',
            ),
            array(
                'name' => esc_html__('Amount of sliders for portfolio section','gardener'),
                'desc' => esc_html__('Put the number of slides','gardener'),
                'id'   => $prefix . 'amount_sliders_portfolio',
                'std'  => '',
                'type' => 'text',
            ),
            array(
                'name' => esc_html__('Help','gardener'),
                'desc' => esc_html__('Help for file','gardener'),
                'id'   => $prefix . 'helps_file',
                'std'  => '',
                'type' => 'wysiwyg',
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'about_settings_metabox',
        'title'      => esc_html__('About Page Settings','gardener'),
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_on' => array( 'key' => 'page-template', 'value' => array('template-about.php'), ), // Specific post templates to display this metabox
        'show_names' => true,
        'fields' => array(
            array(
                'name' => esc_html__('Enable Additional Info Box','gardener'),
                'desc' => esc_html__('Enable or disable the additional info box','gardener'),
                'id'   => $prefix . 'additional_info',
                'std'  => 'enable',
                'type'    => 'select',
                'options' => array(
                    array( 'name' => esc_html__('Enable','gardener'), 'value' => 'enable', ),
                    array( 'name' => esc_html__('Disable','gardener'), 'value' => 'disable', ),
                ),
            ),
            array(
                'name' => esc_html__('Enable Skills Box','gardener'),
                'desc' => esc_html__('Enable or disable the skills box','gardener'),
                'id'   => $prefix . 'skills_info',
                'std'  => 'enable',
                'type'    => 'select',
                'options' => array(
                    array( 'name' => esc_html__('Enable','gardener'), 'value' => 'enable', ),
                    array( 'name' => esc_html__('Disable','gardener'), 'value' => 'disable', ),
                ),
            ),
            array(
                'name' => esc_html__('Enable Video Box','gardener'),
                'desc' => esc_html__('Enable or disable the video box','gardener'),
                'id'   => $prefix . 'video_info',
                'std'  => 'enable',
                'type'    => 'select',
                'options' => array(
                    array( 'name' => esc_html__('Enable','gardener'), 'value' => 'enable', ),
                    array( 'name' => esc_html__('Disable','gardener'), 'value' => 'disable', ),
                ),
            ),
            array(
                'name' => esc_html__('Enable Partners Box','gardener'),
                'desc' => esc_html__('Enable or disable the partners box','gardener'),
                'id'   => $prefix . 'partners_info',
                'std'  => 'enable',
                'type'    => 'select',
                'options' => array(
                    array( 'name' => esc_html__('Enable','gardener'), 'value' => 'enable', ),
                    array( 'name' => esc_html__('Disable','gardener'), 'value' => 'disable', ),
                ),
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'about_author_metabox',
        'title'      => esc_html__('Additional Info Settings','gardener'),
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_on' => array( 'key' => 'page-template', 'value' => array('template-about.php'), ), // Specific post templates to display this metabox
        'show_names' => true,
        'fields' => array(
            array(
                'name' => esc_html__('Subtitle','gardener'),
                'desc' => esc_html__('Type here the subtitle','gardener'),
                'id'   => $prefix . 'author_subtitle',
                'std'  => '',
                'type' => 'footer_info',
            ),
            array(
                'name' => esc_html__('Author photo','gardener'),
                'desc' => esc_html__('Upload a photo. Recommended size 371px-416px','gardener'),
                'id'   => $prefix . 'author_photo',
                'std'  => '',
                'type' => 'file',
            ),
            array(
                'name' => esc_html__('Author Name','gardener'),
                'desc' => esc_html__('Type here the author name','gardener'),
                'id'   => $prefix . 'author_name',
                'std'  => '',
                'type' => 'text',
            ),
            array(
                'name' => esc_html__('Author Position','gardener'),
                'desc' => esc_html__('Type here the position','gardener'),
                'id'   => $prefix . 'author_position',
                'std'  => '',
                'type' => 'text',
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'about_add_settings_metabox',
        'title'      => esc_html__('Additional Info Settings','gardener'),
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_on' => array( 'key' => 'page-template', 'value' => array('template-about.php'), ), // Specific post templates to display this metabox
        'show_names' => true,
        'fields' => array(
            array(
                'name' => esc_html__('Container Title','gardener'),
                'desc' => esc_html__('Type here the custom title for your title','gardener'),
                'id'   => $prefix . 'info_title',
                'std'  => '',
                'type' => 'text',
            ),
            array(
                'name' => esc_html__('Photo #1','gardener'),
                'desc' => esc_html__('Upload a photo #1. Recommended size 550-340px','gardener'),
                'id'   => $prefix . 'info_photo_one',
                'std'  => '',
                'type' => 'file',
            ),
            array(
                'name' => esc_html__('Photo #2','gardener'),
                'desc' => esc_html__('Upload a photo #2. Recommended size 429-377px','gardener'),
                'id'   => $prefix . 'info_photo_two',
                'std'  => '',
                'type' => 'file',
            ),
            array(
                'name' => esc_html__('Info_Description','gardener'),
                'desc' => esc_html__('Type here the custom title for your description','gardener'),
                'id'   => $prefix . 'info_description',
                'std'  => '',
                'type' => 'textarea',
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'about_skills_settings_metabox',
        'title'      => esc_html__('Skills Settings','gardener'),
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_on' => array( 'key' => 'page-template', 'value' => array('template-about.php'), ), // Specific post templates to display this metabox
        'show_names' => true,
        'fields' => array(
            array(
                'name' => esc_html__('Icon #1','gardener'),
                'desc' => esc_html__('Upload a photo #1','gardener'),
                'id'   => $prefix . 'info_icon_1',
                'std'  => '',
                'type' => 'file',
            ),
            array(
                'name' => esc_html__('Title #1','gardener'),
                'desc' => esc_html__('Type here the title #1','gardener'),
                'id'   => $prefix . 'skills_title_1',
                'std'  => '',
                'type' => 'text',
            ),
            array(
                'name' => esc_html__('Description #1','gardener'),
                'desc' => esc_html__('Type here the description #1','gardener'),
                'id'   => $prefix . 'skills_description_1',
                'std'  => '',
                'type' => 'textarea',
            ),

            array(
                'name' => esc_html__('Icon #2 ','gardener'),
                'desc' => esc_html__('Upload a photo #2','gardener'),
                'id'   => $prefix . 'info_icon_2',
                'std'  => '',
                'type' => 'file',
            ),
            array(
                'name' => esc_html__('Title #2','gardener'),
                'desc' => esc_html__('Type here the title #2','gardener'),
                'id'   => $prefix . 'skills_title_2',
                'std'  => '',
                'type' => 'text',
            ),
            array(
                'name' => esc_html__('Description #2','gardener'),
                'desc' => esc_html__('Type here the description #2','gardener'),
                'id'   => $prefix . 'skills_description_2',
                'std'  => '',
                'type' => 'textarea',
            ),

            array(
                'name' => esc_html__('Icon #3 ','gardener'),
                'desc' => esc_html__('Upload a photo #3','gardener'),
                'id'   => $prefix . 'info_icon_3',
                'std'  => '',
                'type' => 'file',
            ),
            array(
                'name' => esc_html__('Title #3','gardener'),
                'desc' => esc_html__('Type here the title #3','gardener'),
                'id'   => $prefix . 'skills_title_3',
                'std'  => '',
                'type' => 'text',
            ),
            array(
                'name' => esc_html__('Description #3','gardener'),
                'desc' => esc_html__('Type here the description #3','gardener'),
                'id'   => $prefix . 'skills_description_3',
                'std'  => '',
                'type' => 'textarea',
            ),
            array(
                'name' => esc_html__('Help','gardener'),
                'desc' => esc_html__('Help for file','gardener'),
                'id'   => $prefix . 'help_file',
                'std'  => '',
                'type' => 'wysiwyg',
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'about_video_settings_metabox',
        'title'      => esc_html__('Video Settings','gardener'),
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_on' => array( 'key' => 'page-template', 'value' => array('template-about.php'), ), // Specific post templates to display this metabox
        'show_names' => true,
        'fields' => array(
            array(
                'name' => esc_html__('Video Photo','gardener'),
                'desc' => esc_html__('Upload a photo','gardener'),
                'id'   => $prefix . 'video_photo',
                'std'  => '',
                'type' => 'file',
            ),
            array(
                'name' => esc_html__('Video Link','gardener'),
                'desc' => esc_html__('Type here the Link','gardener'),
                'id'   => $prefix . 'video_link',
                'std'  => '',
                'type' => 'text',
            ),
            array(
                'name' => esc_html__('Title','gardener'),
                'desc' => esc_html__('Type here the title','gardener'),
                'id'   => $prefix . 'video_title',
                'std'  => '',
                'type' => 'text',
            ),
            array(
                'name' => esc_html__('Description','gardener'),
                'desc' => esc_html__('Type here the description','gardener'),
                'id'   => $prefix . 'video_description',
                'std'  => '',
                'type' => 'textarea',
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'contact_settings_metabox',
        'title'      => esc_html__('Contact Settings','gardener'),
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_on' => array( 'key' => 'page-template', 'value' => array('template-contact.php'), ), // Specific post templates to display this metabox
        'show_names' => true,
        'fields' => array(
            array(
                'name' => esc_html__('Phone Label','gardener'),
                'desc' => esc_html__('Insert here the phone label','gardener'),
                'id'   => $prefix . 'phone_label',
                'std'  => 'Phone',
                'type' => 'text',
            ),
            array(
                'name' => esc_html__('Phone Number','gardener'),
                'desc' => esc_html__('Insert here the phone number','gardener'),
                'id'   => $prefix . 'phone_number',
                'std'  => '',
                'type' => 'text',
            ),
            array(
                'name' => esc_html__('Email Label','gardener'),
                'desc' => esc_html__('Insert here the email label','gardener'),
                'id'   => $prefix . 'email_label',
                'std'  => '',
                'type' => 'text',
            ),
            array(
                'name' => esc_html__('Your Email','gardener'),
                'desc' => esc_html__('Insert here the email','gardener'),
                'id'   => $prefix . 'your_email',
                'std'  => '',
                'type' => 'text',
            ),
            array(
                'name' => esc_html__('Address Label','gardener'),
                'desc' => esc_html__('Insert here the address label','gardener'),
                'id'   => $prefix . 'address_label',
                'std'  => '',
                'type' => 'text',
            ),
            array(
                'name' => esc_html__('Your Address','gardener'),
                'desc' => esc_html__('Insert here the address','gardener'),
                'id'   => $prefix . 'your_address',
                'std'  => '',
                'type' => 'text',
            ),
            array(
                'name' => esc_html__('Contact form title','gardener'),
                'desc' => esc_html__('Insert here the title','gardener'),
                'id'   => $prefix . 'contact_title',
                'std'  => 'Contact form',
                'type' => 'text',
            ),
            array(
                'name' => esc_html__('Contact the Description','gardener'),
                'desc' => esc_html__('Insert here the description','gardener'),
                'id'   => $prefix . 'contact_description',
                'std'  => '',
                'type' => 'text',
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'posts_pages_metabox',
        'title'      => esc_html__('Post Settings','gardener'),
        'pages'      => array( 'post', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true,
        'fields' => array(
            array(
                'name' => esc_html__('Sub Title','gardener'),
                'desc' => esc_html__('Type here the sub title','gardener'),
                'id'   => $prefix . 'post_sub_title',
                'std'  => '',
                'type' => 'text',
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'slider_settings_metabox',
        'title'      => esc_html__('Slider Options','gardener'),
        'pages'      => array( 'post', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true,
        'fields' => array(
            array(
                'name' => esc_html__('Show this post in Slider','gardener'),
                'desc' => esc_html__('Check this item if you want to show it in the home slider','gardener'),
                'id'   => $prefix . 'post_to_slider',
                'std'  => '',
                'type' => 'checkbox',
            ),
            array(
                'name' => esc_html__('Main Image','gardener'),
                'desc' => esc_html__('Upload the main image. Recommended size: 1100px - 491px','gardener'),
                'id'   => $prefix . 'main_image',
                'std'  => '',
                'type' => 'file',
            ),
            array(
                'name' => esc_html__('Background Image','gardener'),
                'desc' => esc_html__('Upload the background image. Recommended size: 1920px - 890px','gardener'),
                'id'   => $prefix . 'background_image',
                'std'  => '',
                'type' => 'file',
            ),
            array(
                'name' => esc_html__('Sale','gardener'),
                'desc' => esc_html__('service discount','gardener'),
                'id'   => $prefix . 'discount_service',
                'std'  => '',
                'type' => 'text',
            ),
            array(
                'name' => esc_html__('Help','gardener'),
                'desc' => esc_html__('Help for file','gardener'),
                'id'   => $prefix . 'help_file',
                'std'  => '',
                'type' => 'wysiwyg',
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'gardeners_metabox',
        'title'      => esc_html__('Gardeners Options','gardener'),
        'pages'      => array( 'gardeners', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true,
        'fields' => array(
            array(
                'name' => esc_html__('Gardeners Position','gardener'),
                'desc' => esc_html__('Type here the Gardener position','gardener'),
                'id'   => $prefix . 'gardener_post',
                'std'  => '',
                'type' => 'text',
            ),
            array(
                'name' => esc_html__('Descriotion Title','gardener'),
                'desc' => esc_html__('Type here the Gardener description title','gardener'),
                'id'   => $prefix . 'gardener_title',
                'std'  => '',
                'type' => 'text',
            ),
            array(
                'name' => esc_html__('Staf Member?','gardener'),
                'desc' => esc_html__('Check the field if the person is staff','gardener'),
                'id'   => $prefix . 'gardener_staff',
                'std'  => '',
                'type' => 'checkbox',
            ),
            array(
                'name' => esc_html__('Facebook Link Profile','gardener'),
                'desc' => esc_html__('Type here the Gardener profile link','gardener'),
                'id'   => $prefix . 'gardener_fb',
                'std'  => '',
                'type' => 'text',
            ),
            array(
                'name' => esc_html__('Twitter Link Profile','gardener'),
                'desc' => esc_html__('Type here the Gardener profile link','gardener'),
                'id'   => $prefix . 'gardener_twi',
                'std'  => '',
                'type' => 'text',
            ),
            array(
                'name' => esc_html__('Gardener Email','gardener'),
                'desc' => esc_html__('Type here the Gardener email','gardener'),
                'id'   => $prefix . 'gardener_email',
                'std'  => '',
                'type' => 'text',
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'services_metabox',
        'title'      => esc_html__('Services Options','gardener'),
        'pages'      => array( 'services', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true,
        'fields' => array(
            array(
                'name' => esc_html__('Service Small Icon','gardener'),
                'desc' => esc_html__('Type here an icon. Recommended size: 100-100px','gardener'),
                'id'   => $prefix . 'service_icon',
                'std'  => '',
                'type' => 'file',
            ),
            array(
                'name' => esc_html__('Service Small Icon Hover','gardener'),
                'desc' => esc_html__('Type here an icon. Recommended size: 100-100px','gardener'),
                'id'   => $prefix . 'service_icon_hover',
                'std'  => '',
                'type' => 'file',
            ),
            array(
                'name' => esc_html__('Service Big Icon','gardener'),
                'desc' => esc_html__('Type here an icon. Recommended size: 100-100px','gardener'),
                'id'   => $prefix . 'service_bigicon',
                'std'  => '',
                'type' => 'file',
            ),
            array(
                'name' => esc_html__('Service Big Icon Hover','gardener'),
                'desc' => esc_html__('Type here an icon. Recommended size: 100-100px','gardener'),
                'id'   => $prefix . 'service_bigicon_hover',
                'std'  => '',
                'type' => 'file',
            ),
            array(
                'name' => esc_html__('Service Description Image','gardener'),
                'desc' => esc_html__('Upload here an icon. Recommended size: 816px-158px','gardener'),
                'id'   => $prefix . 'service_description_image',
                'std'  => '',
                'type' => 'file',
            ),
            array(
                'name' => esc_html__('Service Sub Title','gardener'),
                'desc' => esc_html__('Type here the sub title','gardener'),
                'id'   => $prefix . 'gardener_title',
                'std'  => '',
                'type' => 'text',
            ),
            array(
                'name' => esc_html__('Link #1','gardener'),
                'desc' => esc_html__('Type here the link','gardener'),
                'id'   => $prefix . 'service_link_one',
                'std'  => '',
                'type' => 'text',
            ),
            array(
                'name' => esc_html__('Label Link #1','gardener'),
                'desc' => esc_html__('Type here the link label','gardener'),
                'id'   => $prefix . 'service_lebel_one',
                'std'  => '',
                'type' => 'text',
            ),
            array(
                'name' => esc_html__('Link #2','gardener'),
                'desc' => esc_html__('Type here the link','gardener'),
                'id'   => $prefix . 'service_link_two',
                'std'  => '',
                'type' => 'text',
            ),
            array(
                'name' => esc_html__('Label Link #2','gardener'),
                'desc' => esc_html__('Type here the link label','gardener'),
                'id'   => $prefix . 'service_lebel_two',
                'std'  => '',
                'type' => 'text',
            ),
            array(
                'name' => esc_html__('Link #3','gardener'),
                'desc' => esc_html__('Type here the link','gardener'),
                'id'   => $prefix . 'service_link_three',
                'std'  => '',
                'type' => 'text',
            ),
            array(
                'name' => esc_html__('Label Link #3','gardener'),
                'desc' => esc_html__('Type here the link label','gardener'),
                'id'   => $prefix . 'service_lebel_three',
                'std'  => '',
                'type' => 'text',
            ),

            array(
                'name' => esc_html__('The Price','gardener'),
                'desc' => esc_html__('Type here the link label','gardener'),
                'id'   => $prefix . 'service_price',
                'std'  => '',
                'type' => 'text',
            ),
            array(
                'name' => esc_html__('The Currency','gardener'),
                'desc' => esc_html__('Type here the currency','gardener'),
                'id'   => $prefix . 'service_currency',
                'std'  => '$',
                'type' => 'text',
            ),
            array(
                'name' => esc_html__('The Price Type','gardener'),
                'desc' => esc_html__('Type here the price type. ex: per hour/per square meter or let it empty.','gardener'),
                'id'   => $prefix . 'service_price_type',
                'std'  => '',
                'type' => 'text',
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'partners_metabox',
        'title'      => esc_html__('Services Options','gardener'),
        'pages'      => array( 'partners', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true,
        'fields' => array(

            array(
                'name' => esc_html__('Partner Sub Title','gardener'),
                'desc' => esc_html__('Type here the sub title','gardener'),
                'id'   => $prefix . 'partners_sub_title',
                'std'  => '',
                'type' => 'text',
            ),
            array(
                'name' => esc_html__('Site','gardener'),
                'desc' => esc_html__('Type here the title site','gardener'),
                'id'   => $prefix . 'partners_title_site',
                'std'  => '',
                'type' => 'text',
            ),
            array(
                'name' => esc_html__('Site Link','gardener'),
                'desc' => esc_html__('Type here the link site','gardener'),
                'id'   => $prefix . 'partners_link_site',
                'std'  => '',
                'type' => 'text',
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'testimonials_metabox',
        'title'      => esc_html__('Testimonials Options','gardener'),
        'pages'      => array( 'testimonials', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true,
        'fields' => array(

            array(
                'name' => esc_html__('Author Position','gardener'),
                'desc' => esc_html__('Type here the author position/profession','gardener'),
                'id'   => $prefix . 'testi_position',
                'std'  => '',
                'type' => 'text',
            ),
            array(
                'name' => esc_html__('Author Rating','gardener'),
                'desc' => esc_html__('Select the star count from 1 to 5','gardener'),
                'id'   => $prefix . 'testi_rating',
                'std'  => '',
                'type' => 'select',
                'options' => array(
                    array('name' => esc_html__('1 Star', 'gardener'), 'value' => '1', ),
                    array('name' => esc_html__('2 Stars', 'gardener'), 'value' => '2', ),
                    array('name' => esc_html__('3 Stars', 'gardener'), 'value' => '3', ),
                    array('name' => esc_html__('4 Stars', 'gardener'), 'value' => '4', ),
                    array('name' => esc_html__('5 Stars', 'gardener'), 'value' => '5', ),
                ),
            ),
            array(
                'name' => esc_html__('Author Subtitle','gardener'),
                'desc' => esc_html__('Type here the subtitle','gardener'),
                'id'   => $prefix . 'testi_subtitle',
                'std'  => '',
                'type' => 'text',
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'projects_metabox',
        'title'      => esc_html__('Projects Options','gardener'),
        'pages'      => array( 'projects', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true,
        'fields' => array(

            array(
                'name' => esc_html__('Projects Subtitle','gardener'),
                'desc' => esc_html__('Type here the subtitle','gardener'),
                'id'   => $prefix . 'projects_subtitle',
                'std'  => '',
                'type' => 'text',
            ),
            array(
                'name' => esc_html__('Projects Name','gardener'),
                'desc' => esc_html__('Type here the projects name','gardener'),
                'id'   => $prefix . 'projects_name',
                'std'  => '',
                'type' => 'text',
            ),
            array(
                'name' => esc_html__('Projects Date','gardener'),
                'desc' => esc_html__('Type here the date','gardener'),
                'id'   => $prefix . 'projects_date',
                'std'  => '',
                'type' => 'text_date',
            ),
        )
    );

	return $meta_boxes;
}

/**
 * Get image sizes for images
 *
 * @return array
 */
function ale_get_images_sizes() {
	return array(

        'post' => array(
            array(
                'name'      => 'post-singleimage',
                'width'     => 1380,
                'height'    => 550,
                'crop'      => true,
            ),
            array(
                'name'      => 'post-topimg',
                'width'     => 960,
                'height'    => 360,
                'crop'      => true,
            ),
            array(
                'name'      => 'post-blogimg',
                'width'     => 470,
                'height'    => 380,
                'crop'      => true,
            ),
        ),
        'gardeners' => array(
            array(
                'name'      => 'gardener-thumb',
                'width'     => 100,
                'height'    => 100,
                'crop'      => true,
            ),
            array(
                'name'      => 'gardener-bigthumb',
                'width'     => 200,
                'height'    => 200,
                'crop'      => true,
            ),
        ),
        'testimonials' => array(
            array(
                'name'      => 'testimonil-thumb',
                'width'     => 100,
                'height'    => 100,
                'crop'      => true,
            ),
        ),
        'projects' => array(
            array(
                'name'      => 'projects-slide',
                'width'     => 1920,
                'height'    => 680,
                'crop'      => true,
            ),

            array(
                'name'      => 'projects-img1',
                'width'     => 480,
                'height'    => 582,
                'crop'      => true,
            ),

            array(
                'name'      => 'projects-img2',
                'width'     => 960,
                'height'    => 451,
                'crop'      => true,
            ),

            array(
                'name'      => 'projects-img3',
                'width'     => 480,
                'height'    => 274,
                'crop'      => true,
            ),

            array(
                'name'      => 'projects-img4',
                'width'     => 480,
                'height'    => 405,
                'crop'      => true,
            ),

            array(
                'name'      => 'projects-img5',
                'width'     => 480,
                'height'    => 574,
                'crop'      => true,
            ),

            array(
                'name'      => 'projects-img6',
                'width'     => 480,
                'height'    => 310,
                'crop'      => true,
            ),

            array(
                'name'      => 'projects-img7',
                'width'     => 480,
                'height'    => 530,
                'crop'      => true,
            ),

            array(
                'name'      => 'projects-img8',
                'width'     => 480,
                'height'    => 335,
                'crop'      => true,
            ),

            array(
                'name'      => 'projects-img9',
                'width'     => 480,
                'height'    => 417,
                'crop'      => true,
            ),

            array(
                'name'      => 'projects-img10',
                'width'     => 960,
                'height'    => 547,
                'crop'      => true,
            ),
        ),
    );
}

/**
 * Add post formats that are used in theme
 *
 * @return array
 */
function ale_get_post_formats() {
	return array('gallery','link','quote','video','audio');
}

/**
 * Get sidebars list
 *
 * @return array
 */
function ale_get_sidebars() {
	$sidebars = array();
	return $sidebars;
}

/**
 * Post types where metaboxes should show
 *
 * @return array
 */
function ale_get_post_types_with_gallery() {
	return array('gallery');
}

/**
 * Add custom fields for media attachments
 * @return array
 */
function ale_media_custom_fields() {
	return array();
}