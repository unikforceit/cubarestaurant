<?php
/**
 * Sample implementation of the Custom Header feature
 *
 * You can add an optional custom header image to header.php like so ...
 *
 * <?php the_header_image_tag(); ?>
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package Cubarestaurant
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses cubarestaurant_header_style()
 */
function cubarestaurant_custom_header_setup()
{
    add_theme_support(
        'custom-header',
        apply_filters(
            'cubarestaurant_custom_header_args',
            array(
                'default-image' => get_template_directory_uri() . '/images/header.jpg',
                'default-text-color' => '090C9B',
                'width' => 1800,
                'height' => 500,
                'flex-height' => true,
                'wp-head-callback' => 'cubarestaurant_header_style',
            )
        )
    );

    register_default_headers(
        array(
            'arispa' => array(
                'url' => '%s/images/header.jpg',
                'thumbnail_url' => '%s/images/header.jpg',
                'description' => __('AriSpa', 'cubarestaurant'),
            ),
        )
    );
}

add_action('after_setup_theme', 'cubarestaurant_custom_header_setup');

if (!function_exists('cubarestaurant_header_style')) :
    /**
     * Styles the header image and text displayed on the blog.
     *
     * @see cubarestaurant_custom_header_setup().
     */
    function cubarestaurant_header_style()
    {
        $header_image = get_header_image();
        $header_text_color = get_header_textcolor();

        // If we get this far, we have custom styles. Let's do this.
        ?>
        <style type="text/css">
            <?php
            // Has the text been hidden?
            if ( ! display_header_text() ) :
                ?>
            .site-title,
            .site-description {
                position: absolute;
                clip: rect(1px, 1px, 1px, 1px);
            }

            <?php
            // If the user has set a custom color for the text use that.
        else :
            ?>
            .site-title a,
            .site-description {
                color: #<?php echo esc_attr( $header_text_color ); ?>;
            }

            <?php endif; ?>

            <?php
            if ( ! empty( $header_image ) ) {
                ?>
            .bannerSection {
                background: url(<?php header_image(); ?>) no-repeat center center;
                background-size: cover;
                background-position: 20% 90%;
            }

            <?php
        }
        ?>
        </style>
        <?php
    }
endif;
