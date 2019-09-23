<?php

/**
 * Categories and Custom Taxonomies
 */

//Categories for Posts
$preview_post_cat_1_id = ale_demo_category::add_category(array(
    'category_name' => 'Company',
    'parent_id' => 0,
    'description' => '',
));
$preview_post_cat_2_id = ale_demo_category::add_category(array(
    'category_name' => 'For gardeners',
    'parent_id' => 0,
    'description' => '',
));
$preview_post_cat_3_id = ale_demo_category::add_category(array(
    'category_name' => 'gardening',
    'parent_id' => 0,
    'description' => '',
));
$preview_post_cat_4_id = ale_demo_category::add_category(array(
    'category_name' => 'News',
    'parent_id' => 0,
    'description' => '',
));
$preview_post_cat_5_id = ale_demo_category::add_category(array(
    'category_name' => 'other',
    'parent_id' => 0,
    'description' => '',
));
$preview_post_cat_6_id = ale_demo_category::add_category(array(
    'category_name' => 'site',
    'parent_id' => 0,
    'description' => '',
));
$preview_post_cat_7_id = ale_demo_category::add_category(array(
    'category_name' => 'Specials',
    'parent_id' => 0,
    'description' => '',
));


//Categories for Projects
$preview_projects_cat_1_id = ale_demo_category::add_term(array(
    'term_name' => 'For event',
    'taxonomy'=>'projects-category',
    'parent_id' => 0,
    'description' => '',
));
$preview_projects_cat_2_id = ale_demo_category::add_term(array(
    'term_name' => 'For home',
    'taxonomy'=>'projects-category',
    'parent_id' => 0,
    'description' => '',
));
$preview_projects_cat_3_id = ale_demo_category::add_term(array(
    'term_name' => 'Gardener Suply',
    'taxonomy'=>'projects-category',
    'parent_id' => 0,
    'description' => '',
));
$preview_projects_cat_4_id = ale_demo_category::add_term(array(
    'term_name' => 'Industrial',
    'taxonomy'=>'projects-category',
    'parent_id' => 0,
    'description' => '',
));
$preview_projects_cat_5_id = ale_demo_category::add_term(array(
    'term_name' => 'Other',
    'taxonomy'=>'projects-category',
    'parent_id' => 0,
    'description' => '',
));


/**
 * Posts Settings
 */

// Blog posts
ale_demo_content::add_post(array(
    'title' => "Test Test",
    'file' => get_template_directory() . '/aletheme/demos/gardener/data/post_default.dat',
    'post_excerpt' => '',
    'categories_id_array' => array(),
    'featured_image_ale_id' => 'ale_img1',
    'post_type' => 'post',

    'ale_post_sub_title' => 'Test Test',
    'ale_post_to_slider' => '',
    'ale_main_image' => '',
    'ale_background_image' => '',
    'ale_discount_service' => '',
));

ale_demo_content::add_post(array(
    'title' => "Proin porta, odio at sagittis vehicula",
    'file' => get_template_directory() . '/aletheme/demos/gardener/data/post_default.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_3_id),
    'featured_image_ale_id' => 'ale_img2',
    'post_type' => 'post',

    'ale_post_sub_title' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some',
    'ale_post_to_slider' => '',
    'ale_main_image' => '',
    'ale_background_image' => '',
    'ale_discount_service' => '',
));

ale_demo_content::add_post(array(
    'title' => "egesg",
    'file' => get_template_directory() . '/aletheme/demos/gardener/data/post_default.dat',
    'post_excerpt' => '',
    'categories_id_array' => array(),
    'featured_image_ale_id' => 'ale_img3',
    'post_type' => 'post',

    'ale_post_sub_title' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some',
    'ale_post_to_slider' => '',
    'ale_main_image' => '',
    'ale_background_image' => '',
    'ale_discount_service' => '',
));

ale_demo_content::add_post(array(
    'title' => "dsavdv",
    'file' => get_template_directory() . '/aletheme/demos/gardener/data/post_default.dat',
    'post_excerpt' => '',
    'categories_id_array' => array(),
    'featured_image_ale_id' => '',
    'post_type' => 'post',

    'ale_post_sub_title' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some',
    'ale_post_to_slider' => '',
    'ale_main_image' => '',
    'ale_background_image' => '',
    'ale_discount_service' => '',
));

ale_demo_content::add_post(array(
    'title' => "Vestibulum interdum hendrerit elit",
    'file' => get_template_directory() . '/aletheme/demos/gardener/data/post_default.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_7_id),
    'featured_image_ale_id' => '',
    'post_type' => 'post',

    'ale_post_sub_title' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some',
    'ale_post_to_slider' => '',
    'ale_main_image' => '',
    'ale_background_image' => '',
    'ale_discount_service' => '-35%',
));

ale_demo_content::add_post(array(
    'title' => "Lorem ipsum dolor sit amet, consectetur",
    'file' => get_template_directory() . '/aletheme/demos/gardener/data/post_default.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_3_id),
    'featured_image_ale_id' => 'ale_img2',
    'post_type' => 'post',

    'ale_post_sub_title' => ' Mauris massa urna, elementum a augue ac, viverra faucibus ante  Mauris massa urna, elementum a augue ac, viverra faucibus ante  Mauris massa urna, elementum a augue ac, viverra faucibus ante. viverra faucibus ante.',
    'ale_post_to_slider' => '',
    'ale_main_image' => '',
    'ale_background_image' => '',
    'ale_discount_service' => '',
));

ale_demo_content::add_post(array(
    'title' => "Test",
    'file' => get_template_directory() . '/aletheme/demos/gardener/data/post_default.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_1_id),
    'featured_image_ale_id' => '',
    'post_type' => 'post',

    'ale_post_sub_title' => ' Mauris massa urna, elementum a augue ac, viverra faucibus anteurna, elementum a augue ac, viverra faucibus ante.',
    'ale_post_to_slider' => 'on',
    'ale_main_image' => 'ale_homeslider1',
    'ale_background_image' => 'ale_homeslider1_bg',
    'ale_discount_service' => '',
));

ale_demo_content::add_post(array(
    'title' => "The generated Lorem Ipsum is therefore",
    'file' => get_template_directory() . '/aletheme/demos/gardener/data/post_default.dat',
    'post_excerpt' => '',
    'categories_id_array' => array($preview_post_cat_4_id),
    'featured_image_ale_id' => 'ale_img4',
    'post_type' => 'post',

    'ale_post_sub_title' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some',
    'ale_post_to_slider' => 'on',
    'ale_main_image' => 'ale_homeslider2',
    'ale_background_image' => 'ale_homeslider2_bg',
    'ale_discount_service' => '',
));

ale_demo_content::add_post(array(
    'title' => "Post",
    'file' => get_template_directory() . '/aletheme/demos/gardener/data/post_default.dat',
    'post_excerpt' => '',
    'categories_id_array' => array(),
    'featured_image_ale_id' => '',
    'post_type' => 'post',

    'ale_post_sub_title' => 'adgsadghdh',
    'ale_post_to_slider' => '',
    'ale_main_image' => '',
    'ale_background_image' => '',
    'ale_discount_service' => '',
));

/*
 * Projects Posts
 **/
ale_demo_content::add_post(array(
    'title' => "Contrary to popular belief, Lorem Ipsum is not simply random tex",
    'file' => get_template_directory() . '/aletheme/demos/gardener/data/post_default.dat',
    'post_excerpt' => '',
    'taxonomy_id_array' => array($preview_projects_cat_1_id),
    'featured_image_ale_id' => 'ale_projects1',
    'post_type' => 'projects',

    'ale_projects_subtitle' => 'Our best projects',
    'ale_projects_name' => 'Company',
    'ale_projects_date' => 'May 16, 2018',
));
ale_demo_content::add_post(array(
    'title' => "There are many variations of passages of Lorem Ipsum",
    'file' => get_template_directory() . '/aletheme/demos/gardener/data/post_default.dat',
    'post_excerpt' => '',
    'taxonomy_id_array' => array($preview_projects_cat_2_id),
    'featured_image_ale_id' => 'ale_projects2',
    'post_type' => 'projects',

    'ale_projects_subtitle' => 'Our best projects',
    'ale_projects_name' => 'Envato',
    'ale_projects_date' => 'March 23, 2018',
));
ale_demo_content::add_post(array(
    'title' => "The generated Lorem Ipsum is therefore always free from",
    'file' => get_template_directory() . '/aletheme/demos/gardener/data/post_default.dat',
    'post_excerpt' => '',
    'taxonomy_id_array' => array($preview_projects_cat_3_id),
    'featured_image_ale_id' => 'ale_projects3',
    'post_type' => 'projects',

    'ale_projects_subtitle' => 'Our best projects',
    'ale_projects_name' => 'Alethems',
    'ale_projects_date' => 'August 10, 2017',
));
ale_demo_content::add_post(array(
    'title' => "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical",
    'file' => get_template_directory() . '/aletheme/demos/gardener/data/post_default.dat',
    'post_excerpt' => '',
    'taxonomy_id_array' => array($preview_projects_cat_4_id),
    'featured_image_ale_id' => 'ale_projects4',
    'post_type' => 'projects',

    'ale_projects_subtitle' => 'Our best projects',
    'ale_projects_name' => 'Alethems',
    'ale_projects_date' => 'August 10, 2017',
));
ale_demo_content::add_post(array(
    'title' => "The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested",
    'file' => get_template_directory() . '/aletheme/demos/gardener/data/post_default.dat',
    'post_excerpt' => '',
    'taxonomy_id_array' => array($preview_projects_cat_5_id),
    'featured_image_ale_id' => 'ale_projects5',
    'post_type' => 'projects',

    'ale_projects_subtitle' => 'Our best projects',
    'ale_projects_name' => 'Alethems',
    'ale_projects_date' => 'August 10, 2017',
));
ale_demo_content::add_post(array(
    'title' => "Nunc eget diam a lorem efficitur vehicula in nec diam",
    'file' => get_template_directory() . '/aletheme/demos/gardener/data/post_default.dat',
    'post_excerpt' => '',
    'taxonomy_id_array' => array($preview_projects_cat_1_id),
    'featured_image_ale_id' => 'ale_projects6',
    'post_type' => 'projects',

    'ale_projects_subtitle' => 'Our best projects',
    'ale_projects_name' => 'Alethems',
    'ale_projects_date' => 'August 10, 2017',
));
ale_demo_content::add_post(array(
    'title' => "Vivamus egestas ipsum et orci tincidunt, ut vehicula massa blandit.",
    'file' => get_template_directory() . '/aletheme/demos/gardener/data/post_default.dat',
    'post_excerpt' => '',
    'taxonomy_id_array' => array($preview_projects_cat_2_id),
    'featured_image_ale_id' => 'ale_projects7',
    'post_type' => 'projects',

    'ale_projects_subtitle' => 'Our best projects',
    'ale_projects_name' => 'Alethems',
    'ale_projects_date' => 'August 10, 2017',
));
ale_demo_content::add_post(array(
    'title' => "Donec eros sapien, finibus sed pretium quis",
    'file' => get_template_directory() . '/aletheme/demos/gardener/data/post_default.dat',
    'post_excerpt' => '',
    'taxonomy_id_array' => array($preview_projects_cat_3_id),
    'featured_image_ale_id' => 'ale_projects8',
    'post_type' => 'projects',

    'ale_projects_subtitle' => 'Our best projects',
    'ale_projects_name' => 'Alethems',
    'ale_projects_date' => 'August 10, 2017',
));
ale_demo_content::add_post(array(
    'title' => "Mauris sollicitudin, leo et sodales hendrerit",
    'file' => get_template_directory() . '/aletheme/demos/gardener/data/post_default.dat',
    'post_excerpt' => '',
    'taxonomy_id_array' => array($preview_projects_cat_4_id),
    'featured_image_ale_id' => 'ale_projects9',
    'post_type' => 'projects',

    'ale_projects_subtitle' => 'Our best projects',
    'ale_projects_name' => 'Alethems',
    'ale_projects_date' => 'August 10, 2017',
));
ale_demo_content::add_post(array(
    'title' => "Suspendisse pharetra mi mollis eleifend dignissim",
    'file' => get_template_directory() . '/aletheme/demos/gardener/data/post_default.dat',
    'post_excerpt' => '',
    'taxonomy_id_array' => array($preview_projects_cat_5_id),
    'featured_image_ale_id' => 'ale_projects10',
    'post_type' => 'projects',

    'ale_projects_subtitle' => 'Our best projects',
    'ale_projects_name' => 'Alethems',
    'ale_projects_date' => 'August 10, 2017',
));
ale_demo_content::add_post(array(
    'title' => "Donec tristique pulvinar leo id tincidunt.",
    'file' => get_template_directory() . '/aletheme/demos/gardener/data/post_default.dat',
    'post_excerpt' => '',
    'taxonomy_id_array' => array($preview_projects_cat_1_id),
    'featured_image_ale_id' => 'ale_projects11',
    'post_type' => 'projects',

    'ale_projects_subtitle' => 'Our best projects',
    'ale_projects_name' => 'Alethems',
    'ale_projects_date' => 'August 10, 2017',
));
ale_demo_content::add_post(array(
    'title' => "Duis elementum quis tortor sed consequat",
    'file' => get_template_directory() . '/aletheme/demos/gardener/data/post_default.dat',
    'post_excerpt' => '',
    'taxonomy_id_array' => array($preview_projects_cat_2_id),
    'featured_image_ale_id' => 'ale_projects12',
    'post_type' => 'projects',

    'ale_projects_subtitle' => 'Our best projects',
    'ale_projects_name' => 'Alethems',
    'ale_projects_date' => 'August 10, 2017',
));
ale_demo_content::add_post(array(
    'title' => "Fusce bibendum porttitor fermentum.",
    'file' => get_template_directory() . '/aletheme/demos/gardener/data/post_default.dat',
    'post_excerpt' => '',
    'taxonomy_id_array' => array($preview_projects_cat_3_id),
    'featured_image_ale_id' => 'ale_projects13',
    'post_type' => 'projects',

    'ale_projects_subtitle' => 'Our best projects',
    'ale_projects_name' => 'Alethems',
    'ale_projects_date' => 'August 10, 2017',
));


/*
 * Projects Gardeners
 **/
ale_demo_content::add_post(array(
    'title' => "Mike Devis",
    'file' => get_template_directory() . '/aletheme/demos/gardener/data/gardener.dat',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_g1',
    'post_type' => 'gardeners',

    'ale_gardener_post' => 'wsfasaesa',
    'ale_gardener_title' => 'asf a hdihasiodh ioahdioahsiodh d aaishduioahsoidh ao wandas hd ah sdo hdasohdaosd oasd a whioah   jawdh azjd i',
    'ale_gardener_staff' => '',
    'ale_gardener_fb' => '',
    'ale_gardener_twi' => '#',
    'ale_gardener_email' => '#',
));

ale_demo_content::add_post(array(
    'title' => "Mary Medison",
    'file' => get_template_directory() . '/aletheme/demos/gardener/data/gardener.dat',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_g2',
    'post_type' => 'gardeners',

    'ale_gardener_post' => 'ASFSAGFWE',
    'ale_gardener_title' => 'asfasfws wefiws afweijsafi sai fjisaf ',
    'ale_gardener_staff' => '',
    'ale_gardener_fb' => '#',
    'ale_gardener_twi' => '',
    'ale_gardener_email' => '#',
));

ale_demo_content::add_post(array(
    'title' => "Jeck Jonson",
    'file' => get_template_directory() . '/aletheme/demos/gardener/data/gardener.dat',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_g3',
    'post_type' => 'gardeners',

    'ale_gardener_post' => 'asdgsdg',
    'ale_gardener_title' => 'Cursus in hac habitasse platea dictumst quisque sagittis.',
    'ale_gardener_staff' => '',
    'ale_gardener_fb' => '#',
    'ale_gardener_twi' => '#',
    'ale_gardener_email' => '#',
));

ale_demo_content::add_post(array(
    'title' => "Jon Bold",
    'file' => get_template_directory() . '/aletheme/demos/gardener/data/gardener.dat',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_g4',
    'post_type' => 'gardeners',

    'ale_gardener_post' => 'CEO',
    'ale_gardener_title' => '',
    'ale_gardener_staff' => '',
    'ale_gardener_fb' => '',
    'ale_gardener_twi' => '',
    'ale_gardener_email' => '#',
));

ale_demo_content::add_post(array(
    'title' => "Stella Nilson",
    'file' => get_template_directory() . '/aletheme/demos/gardener/data/gardener.dat',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_g5',
    'post_type' => 'gardeners',

    'ale_gardener_post' => 'Gardener',
    'ale_gardener_title' => 'Cursus in hac habitasse platea dictumst quisque sagittis.',
    'ale_gardener_staff' => 'on',
    'ale_gardener_fb' => '#',
    'ale_gardener_twi' => '',
    'ale_gardener_email' => '#',
));

ale_demo_content::add_post(array(
    'title' => "Brayden Blackfield",
    'file' => get_template_directory() . '/aletheme/demos/gardener/data/gardener.dat',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_g6',
    'post_type' => 'gardeners',

    'ale_gardener_post' => 'Project leader',
    'ale_gardener_title' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form',
    'ale_gardener_staff' => '',
    'ale_gardener_fb' => '',
    'ale_gardener_twi' => '',
    'ale_gardener_email' => '',
));

/*
 * Services Posts
 **/
ale_demo_content::add_post(array(
    'title' => "For Home",
    'file' => get_template_directory() . '/aletheme/demos/gardener/data/gardener.dat',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_s1',
    'post_type' => 'services',

    'ale_service_icon' => 'ale_icon1',
    'ale_service_icon_hover' => 'ale_icon1_hover',
    'ale_service_bigicon' => 'ale_bigicon1',
    'ale_service_bigicon_hover' => 'ale_bigicon1_hover',
    'ale_service_description_image' => 'ale_description_1',
    'ale_gardener_title' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form',
    'ale_service_link_one' => '#',
    'ale_service_lebel_one' => 'See project',
    'ale_service_link_two' => '#',
    'ale_service_lebel_two' => 'Read testimonials',
    'ale_service_link_three' => '#',
    'ale_service_lebel_three' => 'More about gardener`s suply',
    'ale_service_price' => '100',
    'ale_service_currency' => '$',
    'ale_service_price_type' => '/ per hour',
));

ale_demo_content::add_post(array(
    'title' => "For Event",
    'file' => get_template_directory() . '/aletheme/demos/gardener/data/gardener.dat',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_s2',
    'post_type' => 'services',

    'ale_service_icon' => 'ale_icon2',
    'ale_service_icon_hover' => 'ale_icon2_hover',
    'ale_service_bigicon' => 'ale_bigicon2',
    'ale_service_bigicon_hover' => 'ale_bigicon2_hover',
    'ale_service_description_image' => 'ale_description_1',
    'ale_gardener_title' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form',
    'ale_service_link_one' => '#',
    'ale_service_lebel_one' => 'See project',
    'ale_service_link_two' => '#',
    'ale_service_lebel_two' => 'Read testimonials',
    'ale_service_link_three' => '#',
    'ale_service_lebel_three' => 'More about for Event',
    'ale_service_price' => '200',
    'ale_service_currency' => '$',
    'ale_service_price_type' => '/ per square',
));

ale_demo_content::add_post(array(
    'title' => "Industrial",
    'file' => get_template_directory() . '/aletheme/demos/gardener/data/gardener.dat',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_s3',
    'post_type' => 'services',

    'ale_service_icon' => 'ale_icon3',
    'ale_service_icon_hover' => 'ale_icon3_hover',
    'ale_service_bigicon' => 'ale_bigicon3',
    'ale_service_bigicon_hover' => 'ale_bigicon3_hover',
    'ale_service_description_image' => 'ale_description_1',
    'ale_gardener_title' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form',
    'ale_service_link_one' => '#',
    'ale_service_lebel_one' => 'See project',
    'ale_service_link_two' => '#',
    'ale_service_lebel_two' => 'Read testimonials',
    'ale_service_link_three' => '#',
    'ale_service_lebel_three' => 'More about Industrial',
    'ale_service_price' => '300',
    'ale_service_currency' => '$',
    'ale_service_price_type' => '',
));

ale_demo_content::add_post(array(
    'title' => "Gardener`s suply",
    'file' => get_template_directory() . '/aletheme/demos/gardener/data/gardener.dat',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_s4',
    'post_type' => 'services',

    'ale_service_icon' => 'ale_icon4',
    'ale_service_icon_hover' => 'ale_icon4_hover',
    'ale_service_bigicon' => 'ale_bigicon4',
    'ale_service_bigicon_hover' => 'ale_bigicon4_hover',
    'ale_service_description_image' => 'ale_description_1',
    'ale_gardener_title' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form',
    'ale_service_link_one' => '#',
    'ale_service_lebel_one' => 'See project',
    'ale_service_link_two' => '#',
    'ale_service_lebel_two' => 'Read testimonials',
    'ale_service_link_three' => '#',
    'ale_service_lebel_three' => 'More about Gardener`s suply',
    'ale_service_price' => '400',
    'ale_service_currency' => '$',
    'ale_service_price_type' => '/ per hour',
));

ale_demo_content::add_post(array(
    'title' => "Indoor gardening",
    'file' => get_template_directory() . '/aletheme/demos/gardener/data/gardener.dat',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_s5',
    'post_type' => 'services',

    'ale_service_icon' => 'ale_icon5',
    'ale_service_icon_hover' => 'ale_icon5_hover',
    'ale_service_bigicon' => 'ale_bigicon5',
    'ale_service_bigicon_hover' => 'ale_bigicon5_hover',
    'ale_service_description_image' => 'ale_description_1',
    'ale_gardener_title' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form',
    'ale_service_link_one' => '#',
    'ale_service_lebel_one' => 'See project',
    'ale_service_link_two' => '#',
    'ale_service_lebel_two' => 'Read testimonials',
    'ale_service_link_three' => '#',
    'ale_service_lebel_three' => 'More about Indoor',
    'ale_service_price' => '500',
    'ale_service_currency' => '$',
    'ale_service_price_type' => '',
));

ale_demo_content::add_post(array(
    'title' => "Other",
    'file' => get_template_directory() . '/aletheme/demos/gardener/data/gardener.dat',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_s6',
    'post_type' => 'services',

    'ale_service_icon' => 'ale_icon6',
    'ale_service_icon_hover' => 'ale_icon6_hover',
    'ale_service_bigicon' => 'ale_bigicon6',
    'ale_service_bigicon_hover' => 'ale_bigicon6_hover',
    'ale_service_description_image' => 'ale_description_1',
    'ale_gardener_title' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form',
    'ale_service_link_one' => '#',
    'ale_service_lebel_one' => 'See project',
    'ale_service_link_two' => '#',
    'ale_service_lebel_two' => 'Read testimonials',
    'ale_service_link_three' => '#',
    'ale_service_lebel_three' => 'More about Other',
    'ale_service_price' => '600',
    'ale_service_currency' => '$',
    'ale_service_price_type' => '',
));

/*
 * Partners Posts
 **/
ale_demo_content::add_post(array(
    'title' => "Lg",
    'file' => get_template_directory() . '/aletheme/demos/gardener/data/gardener.dat',
    'post_excerpt' => '',
    'featured_image_ale_id' => '',
    'post_type' => 'partners',

    'ale_partners_sub_title' => 'Business company',
    'ale_partners_title_site' => 'lg.com',
    'ale_partners_link_site' => '#',
));

ale_demo_content::add_post(array(
    'title' => "Nawbo",
    'file' => get_template_directory() . '/aletheme/demos/gardener/data/gardener.dat',
    'post_excerpt' => '',
    'featured_image_ale_id' => '',
    'post_type' => 'partners',

    'ale_partners_sub_title' => 'Business company',
    'ale_partners_title_site' => 'nawbo.com',
    'ale_partners_link_site' => '#',
));

ale_demo_content::add_post(array(
    'title' => "Eventbrite",
    'file' => get_template_directory() . '/aletheme/demos/gardener/data/gardener.dat',
    'post_excerpt' => '',
    'featured_image_ale_id' => '',
    'post_type' => 'partners',

    'ale_partners_sub_title' => 'Business company',
    'ale_partners_title_site' => 'eventbrite.com',
    'ale_partners_link_site' => '#',
));

ale_demo_content::add_post(array(
    'title' => "Apple",
    'file' => get_template_directory() . '/aletheme/demos/gardener/data/gardener.dat',
    'post_excerpt' => '',
    'featured_image_ale_id' => '',
    'post_type' => 'partners',

    'ale_partners_sub_title' => 'Business company',
    'ale_partners_title_site' => 'apple.com',
    'ale_partners_link_site' => '#',
));

ale_demo_content::add_post(array(
    'title' => "Samsung",
    'file' => get_template_directory() . '/aletheme/demos/gardener/data/gardener.dat',
    'post_excerpt' => '',
    'featured_image_ale_id' => '',
    'post_type' => 'partners',

    'ale_partners_sub_title' => 'Business company',
    'ale_partners_title_site' => 'samsung.com',
    'ale_partners_link_site' => '#',
));

ale_demo_content::add_post(array(
    'title' => "Envato",
    'file' => get_template_directory() . '/aletheme/demos/gardener/data/gardener.dat',
    'post_excerpt' => '',
    'featured_image_ale_id' => '',
    'post_type' => 'partners',

    'ale_partners_sub_title' => 'Business company',
    'ale_partners_title_site' => 'envato.com',
    'ale_partners_link_site' => '#',
));

/*
 * Testimonials
 **/
ale_demo_content::add_post(array(
    'title' => "Mike Bost",
    'file' => get_template_directory() . '/aletheme/demos/gardener/data/gardener.dat',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_t1',
    'post_type' => 'testimonials',

    'ale_testi_position' => 'CEO',
    'ale_testi_rating' => '5',
    'ale_testi_subtitle' => 'There are many variations of passages of ',
));

ale_demo_content::add_post(array(
    'title' => "Jon Dier",
    'file' => get_template_directory() . '/aletheme/demos/gardener/data/gardener.dat',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_t2',
    'post_type' => 'testimonials',

    'ale_testi_position' => 'bussinesman',
    'ale_testi_rating' => '4',
    'ale_testi_subtitle' => 'There are many variations of passages of Lorem Ipsum dsghidj ',
));

ale_demo_content::add_post(array(
    'title' => "Brayden Black",
    'file' => get_template_directory() . '/aletheme/demos/gardener/data/gardener.dat',
    'post_excerpt' => '',
    'featured_image_ale_id' => 'ale_t3',
    'post_type' => 'testimonials',

    'ale_testi_position' => 'bussinesman',
    'ale_testi_rating' => '5',
    'ale_testi_subtitle' => 'There are many Lorem Ipsum dsghidj gfsdg sdjg gsd',
));

/**
 * Pages
 */

//Blog page
$ale_blog_id = ale_demo_content::add_page(array(
    'title' => 'Blog',
    'template' => 'index.php',
    'postspage'=>true,
));

//Contact page
$ale_contact_id = ale_demo_content::add_page(array(
    'title' => 'Contact',
    'file' => get_template_directory() . '/aletheme/demos/gardener/data/contact.dat',
    'template' => 'template-contact.php',
    'ale_phone_label' => 'Phone:',
    'ale_phone_number' => '8 800 346 10 79',
    'ale_email_label' => 'Email:',
    'ale_your_email' => 'info@website.com',
    'ale_address_label' => 'Address:',
    'ale_your_address' => 'Ukraine',
    'ale_contact_title' => 'Contact form',
    'ale_contact_description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
));

//About Us page
$ale_about_id = ale_demo_content::add_page(array(
    'title' => 'About us',
    'file' => get_template_directory() . '/aletheme/demos/gardener/data/about.dat',
    'template' => 'template-about.php',
    'ale_additional_info' => 'enable',
    'ale_skills_info' => 'enable',
    'ale_video_info' => 'enable',
    'ale_partners_info' => 'enable',
    'ale_author_subtitle' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form',
    'ale_author_photo' => 'ale_about_author',
    'ale_author_name' => 'Brayden Blackfield',
    'ale_author_position' => 'Director / CEO',
    'ale_info_title' => 'Lorem Ipsum is simply dummy text ',
    'ale_info_photo_one' => 'ale_about_info1',
    'ale_info_photo_two' => 'ale_about_info2',
    'ale_info_description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages',
    'ale_info_icon_1' => 'ale_about_icon1',
    'ale_skills_title_1' => 'Innovations',
    'ale_skills_description_1' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable',
    'ale_info_icon_2' => 'ale_about_icon2',
    'ale_skills_title_2' => 'Experience',
    'ale_skills_description_2' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock',
    'ale_info_icon_3' => 'ale_about_icon3',
    'ale_skills_title_3' => 'Technologies',
    'ale_skills_description_3' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make',
    'ale_video_photo' => 'ale_about_video',
    'ale_video_link' => 'https://youtu.be/G0BI1E9owyg',
    'ale_video_title' => 'Want to be our </br><strong>partner?</strong>',
    'ale_video_description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make',
));

//Order page
$ale_order_id = ale_demo_content::add_page(array(
    'title' => 'Order',
    'template' => 'template-order.php',
    'file' => get_template_directory() . '/aletheme/demos/gardener/data/contact.dat',
));

//Home page
$ale_home_id = ale_demo_content::add_page(array(
    'title' => 'Home',
    'template' => 'template-home.php',
    'homepage' => true,
    'file' => get_template_directory() . '/aletheme/demos/gardener/data/home.dat',

    'ale_order_form'  =>  'enable',
    'ale_services_box'  =>  'enable',
    'ale_partners_box'  =>  'enable',
    'ale_testimonials_box'  =>  'enable',
    'ale_portfolio_box'  =>  'enable',
    'ale_order_box_title'  =>  'Order gardener',
    'ale_gardeners_title'  =>  'Gardeners',
    'ale_order_box_gardener_subtitle'  =>  'Our best specialist',
    'ale_l_projects_title'  =>  'Latest projects',
    'ale_l_projects_link_title'  =>  'All projects',
    'ale_services_title'  =>  'Our partners',
    'ale_pertners_bg'  =>  'ale_home_partners',
    'ale_amount_sliders_portfolio' => '3'
));

/**
 * Navigation Settings
 */
$ale_demo_header_menu = ale_demo_menus::create_menu('Header Menu', 'header_menu');

//Header Menu
ale_demo_menus::add_page(array(
    'title' => 'Home',
    'add_to_menu_id' => $ale_demo_header_menu,
    'page_id' => $ale_home_id,
    'parent_id' => ''
));
ale_demo_menus::add_post_type(array(
    'title' => 'Services',
    'add_to_menu_id' => $ale_demo_header_menu,
    'post_type' => 'services',
    'parent_id' => ''
));
ale_demo_menus::add_page(array(
    'title' => 'Order',
    'add_to_menu_id' => $ale_demo_header_menu,
    'page_id' => $ale_order_id,
    'parent_id' => ''
));
ale_demo_menus::add_page(array(
    'title' => 'About Us',
    'add_to_menu_id' => $ale_demo_header_menu,
    'page_id' => $ale_about_id,
    'parent_id' => ''
));
ale_demo_menus::add_post_type(array(
    'title' => 'Team',
    'add_to_menu_id' => $ale_demo_header_menu,
    'post_type' => 'gardeners',
    'parent_id' => ''
));
ale_demo_menus::add_page(array(
    'title' => 'Blog',
    'add_to_menu_id' => $ale_demo_header_menu,
    'page_id' => $ale_blog_id,
    'parent_id' => ''
));
ale_demo_menus::add_post_type(array(
    'title' => 'Gallery',
    'add_to_menu_id' => $ale_demo_header_menu,
    'post_type' => 'projects',
    'parent_id' => ''
));
ale_demo_menus::add_page(array(
    'title' => 'Contacts',
    'add_to_menu_id' => $ale_demo_header_menu,
    'page_id' => $ale_contact_id,
    'parent_id' => ''
));


//WP Options Settings

ale_demo_options::update_tagline('Gardeners Theme');
ale_demo_options::update_posts_per_page(10);
