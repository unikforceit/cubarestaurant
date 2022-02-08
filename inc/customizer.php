<?php
/**
 * Cubarestaurant Theme Customizer
 *
 * @package Cubarestaurant
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function cubarestaurant_customize_register($wp_customize)
{
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport = 'postMessage';
    $wp_customize->get_setting('header_textcolor')->transport = 'postMessage';


    if (isset($wp_customize->selective_refresh)) {
        $wp_customize->selective_refresh->add_partial(
            'blogname',
            array(
                'selector' => '.site-title a',
                'render_callback' => 'cubarestaurant_customize_partial_blogname',
            )
        );
        $wp_customize->selective_refresh->add_partial(
            'blogdescription',
            array(
                'selector' => '.site-description',
                'render_callback' => 'cubarestaurant_customize_partial_blogdescription',
            )
        );
    }

    $wp_customize->add_section(
        'layout_section',
        array(
            'title' => __('Layout (site width) ', 'cubarestaurant'),
            'priority' => 30,
        )
    );

    $wp_customize->add_section(
        'banner_content',
        array(
            'title' => __('Banner Settings', 'cubarestaurant'),
            'priority' => 40,
        )
    );


    $wp_customize->add_section(
        'serve_section',
        array(
            'title' => __('Serve Section', 'cubarestaurant'),
        )
    );

    $wp_customize->add_section(
        'footer_section',
        array(
            'title' => __('Footer', 'cubarestaurant'),
        )
    );


    $wp_customize->add_setting(
        'show_breadcrumbs',
        array(
            'default' => true,
            'sanitize_callback' => 'cubarestaurant_sanitize_checkbox',
        )
    );

    $wp_customize->add_control(
        'show_breadcrumbs',
        array(
            'type' => 'checkbox',
            'label' => __('Enable breadcrumbs', 'cubarestaurant'),
            'section' => 'banner_content',
        )
    );


    $wp_customize->add_setting(
        'header_heading',
        array(
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'header_heading',
        array(
            'type' => 'text',
            'label' => __('Enter Main Heading:', 'cubarestaurant'),
            'description' => __('Leave this setting blank to disable it.', 'cubarestaurant'),
            'section' => 'banner_content',
        )
    );

    $wp_customize->add_setting(
        'header_sub_heading',
        array(
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'header_sub_heading',
        array(
            'type' => 'text',
            'label' => __('Enter Sub Heading:', 'cubarestaurant'),
            'description' => __('Leave this setting blank to disable it.', 'cubarestaurant'),
            'section' => 'banner_content',
        )
    );

    $wp_customize->add_setting(
        'header_btn_one',
        array(
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'header_btn_one',
        array(
            'type' => 'text',
            'label' => __('Button One', 'cubarestaurant'),
            'description' => __('Leave this setting blank to disable it.', 'cubarestaurant'),
            'section' => 'banner_content',
        )
    );
    $wp_customize->add_setting(
        'header_btn_one_link',
        array(
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'header_btn_one_link',
        array(
            'type' => 'text',
            'label' => __('Button One Link', 'cubarestaurant'),
            'description' => __('Leave this setting blank to disable it.', 'cubarestaurant'),
            'section' => 'banner_content',
        )
    );

    $wp_customize->add_setting(
        'header_btn_two',
        array(
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'header_btn_two',
        array(
            'type' => 'text',
            'label' => __('Button Two', 'cubarestaurant'),
            'description' => __('Leave this setting blank to disable it.', 'cubarestaurant'),
            'section' => 'banner_content',
        )
    );
    $wp_customize->add_setting(
        'header_btn_two_link',
        array(
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'header_btn_two_link',
        array(
            'type' => 'text',
            'label' => __('Button Two Link', 'cubarestaurant'),
            'description' => __('Leave this setting blank to disable it.', 'cubarestaurant'),
            'section' => 'banner_content',
        )
    );


    $wp_customize->add_setting(
        'serve_t_one',
        array(
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'serve_t_one',
        array(
            'type' => 'text',
            'label' => __('Enter Serve Title One:', 'cubarestaurant'),
            'description' => __('Leave this setting blank to disable it.', 'cubarestaurant'),
            'section' => 'serve_section',
        )
    );
    $wp_customize->add_setting(
        'serve_img_one',
        array(
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(new \WP_Customize_Image_Control( $wp_customize, 'serve_img_one', array(
            'label' => __('Enter Serve Image One:', 'cubarestaurant'),
            'description' => __('Leave this setting blank to disable it.', 'cubarestaurant'),
            'section' => 'serve_section',
    )));


    $wp_customize->add_setting(
        'serve_t_two',
        array(
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'serve_t_two',
        array(
            'type' => 'text',
            'label' => __('Enter Serve Title Two:', 'cubarestaurant'),
            'description' => __('Leave this setting blank to disable it.', 'cubarestaurant'),
            'section' => 'serve_section',
        )
    );
    $wp_customize->add_setting(
        'serve_img_two',
        array(
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(new \WP_Customize_Image_Control( $wp_customize, 'serve_img_two', array(
        'label' => __('Enter Serve Image Two:', 'cubarestaurant'),
        'description' => __('Leave this setting blank to disable it.', 'cubarestaurant'),
        'section' => 'serve_section',
    )));

    $wp_customize->add_setting(
        'serve_t_three',
        array(
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'serve_t_three',
        array(
            'type' => 'text',
            'label' => __('Enter Serve Title Three:', 'cubarestaurant'),
            'description' => __('Leave this setting blank to disable it.', 'cubarestaurant'),
            'section' => 'serve_section',
        )
    );

    $wp_customize->add_setting(
        'serve_img_three',
        array(
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(new \WP_Customize_Image_Control( $wp_customize, 'serve_img_three', array(
        'label' => __('Enter Serve Image Three:', 'cubarestaurant'),
        'description' => __('Leave this setting blank to disable it.', 'cubarestaurant'),
        'section' => 'serve_section',
    )));

    $wp_customize->add_setting(
        'serve_t_four',
        array(
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'serve_t_four',
        array(
            'type' => 'text',
            'label' => __('Enter Serve Title Four:', 'cubarestaurant'),
            'description' => __('Leave this setting blank to disable it.', 'cubarestaurant'),
            'section' => 'serve_section',
        )
    );

    $wp_customize->add_setting(
        'serve_img_four',
        array(
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(new \WP_Customize_Image_Control( $wp_customize, 'serve_img_four', array(
        'label' => __('Enter Serve Image Four:', 'cubarestaurant'),
        'description' => __('Leave this setting blank to disable it.', 'cubarestaurant'),
        'section' => 'serve_section',
    )));

    $wp_customize->add_setting(
        'copyright_text',
        array(
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'copyright_text',
        array(
            'type' => 'text',
            'label' => __('Enter a copyright text:', 'cubarestaurant'),
            'input_attrs' => array(
                'placeholder' => __('Copyright: ', 'cubarestaurant') . gmdate('Y'),
            ),
            'section' => 'footer_section',
        )
    );


}

add_action('customize_register', 'cubarestaurant_customize_register');

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function cubarestaurant_customize_partial_blogname()
{
    bloginfo('name');
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function cubarestaurant_customize_partial_blogdescription()
{
    bloginfo('description');
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function cubarestaurant_customize_preview_js()
{
    wp_enqueue_script('cubarestaurant-customizer', get_template_directory_uri() . '/js/customizer.js', array('customize-preview'), null, true);
}

add_action('customize_preview_init', 'cubarestaurant_customize_preview_js');

/**
 * Checkbox sanitization callback, from
 * https://github.com/WPTRT/code-examples/blob/master/customizer/sanitization-callbacks.php
 *
 * Sanitization callback for 'checkbox' type controls. This callback sanitizes `$checked`
 * as a boolean value, either TRUE or FALSE.
 *
 * @param bool $checked Whether the checkbox is checked.
 * @return bool Whether the checkbox is checked.
 */
function cubarestaurant_sanitize_checkbox($checked)
{
    // Boolean check.
    return ((isset($checked) && true == $checked) ? true : false);
}


/**
 * Select sanitization callback example.
 *
 * - Sanitization: select
 * - Control: select, radio
 * Sanitization callback for 'select' and 'radio' type controls. This callback sanitizes `$input`
 * as a slug, and then validates `$input` against the choices defined for the control.
 *
 * @see sanitize_text_field()               https://developer.wordpress.org/reference/functions/sanitize_text_field/
 * @see $wp_customize->get_control() https://developer.wordpress.org/reference/classes/wp_customize_manager/get_control/
 *
 * @param string $input Slug to sanitize.
 * @param WP_Customize_Setting $setting Setting instance.
 * @return string Sanitized slug if it is a valid choice; otherwise, the setting default.
 */
function cubarestaurant_sanitize_select($input, $setting)
{
    // Ensure input is a slug.
    $input = sanitize_text_field($input);

    // Get list of choices from the control associated with the setting.
    $choices = $setting->manager->get_control($setting->id)->choices;

    // If the input is a valid key, return it; otherwise, return the default.
    return (array_key_exists($input, $choices) ? $input : $setting->default);
}
