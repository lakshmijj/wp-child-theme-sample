<?php

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function popularis_pingback_header() {
    if (is_singular() && pings_open()) {
        printf('<link rel="pingback" href="%s">' . "\n", esc_url(get_bloginfo('pingback_url')));
    }
}

add_action('wp_head', 'popularis_pingback_header');


if (!function_exists('popularis_main_content_width_columns')) :

    function popularis_main_content_width_columns() {

        $columns = '12';

        if (is_active_sidebar('sidebar-1')) {
            $columns = $columns - 3;
        }

        echo absint($columns);
    }

endif;

if (!function_exists('popularis_entry_footer')) :

    /**
     * Prints HTML with meta information for the categories, tags and comments.
     */
    function popularis_entry_footer($list_type = '') {

        // Get Categories for posts.
        $categories_list = get_the_category_list(' ');

        // Get Tags for posts.
        $tags_list = get_the_tag_list('', ' ');

        if ($categories_list || $tags_list) {

            echo '<div class="cats-tags">';

            if ('post' === get_post_type()) {
                if ($categories_list || $tags_list) {

                    // Make sure there's more than one category before displaying.
                    if ($categories_list && $list_type == 'cats') {
                        echo '<div class="cat-links">' . wp_kses_data($categories_list) . '</div>';
                    }

                    if ($tags_list && $list_type == 'tags') {
                        echo '<div class="tags-links"><span class="space-right">' . esc_html__('Tags', 'popularis') . '</span>' . wp_kses_data($tags_list) . '</div>';
                    }
                }
            }

            echo '</div>';
        }
    }

endif;

if (!function_exists('popularis_generate_construct_footer')) :
    /**
     * Build footer
     */
    add_action('popularis_generate_footer', 'popularis_generate_construct_footer');

    function popularis_generate_construct_footer() {
        $my_theme = wp_get_theme();
        ?>
        <footer id="colophon" class="footer-credits container-fluid">
            <div class="container">
                <div class="footer-credits-text text-center">
                    <?php
                    /* translators: %s: WordPress string with wordpress.org URL */
                    printf(esc_html__('Developed by %s', 'google'), '<a href="' . esc_url(__('#', 'google')) . '">Site Owner</a>');
                    ?>
                </div>
            </div>	
        </footer>
        <?php
    }

endif;

if (!function_exists('popularis_generate_construct_header')) :
    /**
     * Build header
     */
    add_action('popularis_generate_header', 'popularis_generate_construct_header');

    function popularis_generate_construct_header() {   
        get_template_part('template-parts/header/template-part', 'header');
        get_template_part( 'template-parts/header/template-part', 'head' );
    }

endif;

if (!function_exists('popularis_generate_construct_header_builders')) :
    /**
     * Build header for pagebuilders
     */
    add_action('popularis_generate_header_builders', 'popularis_generate_construct_header_builders');

    function popularis_generate_construct_header_builders() {   
        get_template_part('template-parts/header/template-part', 'header'); ?>
            <div class="page-builders" role="main">
                <div class="page-builders-content-area">
                    <?php 
    }

endif;

/**
 * Single previous next links
 */
if (!function_exists('popularis_prev_next_links')) :

    function popularis_prev_next_links() {
        the_post_navigation(
                array(
                    'prev_text' => '<span class="screen-reader-text">' . __('Previous Post', 'popularis') . '</span><span aria-hidden="true" class="nav-subtitle">' . __('Previous', 'popularis') . '</span> <span class="nav-title"><span class="nav-title-icon-wrapper"><i class="fa fa-angle-double-left" aria-hidden="true"></i></span>%title</span>',
                    'next_text' => '<span class="screen-reader-text">' . __('Next Post', 'popularis') . '</span><span aria-hidden="true" class="nav-subtitle">' . __('Next', 'popularis') . '</span> <span class="nav-title">%title<span class="nav-title-icon-wrapper"><i class="fa fa-angle-double-right" aria-hidden="true"></i></span></span>',
                )
        );
    }

endif;

/**
 * Post author meta funciton
 */
if (!function_exists('popularis_author_meta')) :

    function popularis_author_meta() {
        ?>
        <span class="author-meta">
            <span class="author-meta-by"><?php esc_html_e('By', 'popularis'); ?></span>
            <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'), get_the_author_meta('user_nicename'))); ?>">
                <?php the_author(); ?>
            </a>
        </span>
        <?php
    }

endif;

/**
 *  Customizer
 */
if (!function_exists('popularis_customizer')) :

    function popularis_customizer() {
	
		require_once( trailingslashit(get_template_directory()) . 'inc/admin/customizer.php' );
    
	}
	if ( !is_child_theme() ) {
		add_action( 'init', 'popularis_customizer' );
	}
	
endif;

	