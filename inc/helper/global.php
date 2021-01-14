<?php



function batpa_sanitize_dropdown_pages($page_id, $setting)
{
    $page_id = absint($page_id);
    return ('publish' == get_post_status($page_id) ? $page_id : $setting->default);
}

function batpa_sanitize_choices($input, $setting)
{
    global $wp_customize;
    $control = $wp_customize->get_control($setting->id);
    if (array_key_exists($input, $control->choices)) {
        return $input;
    } else {
        return $setting->default;
    }
}

function batpa_sanitize_phone_number($phone)
{
    return preg_replace('/[^\d+]/', '', $phone);
}

function batpa_sanitize_email($email, $setting)
{
    $email = sanitize_email($email);
    return (!is_null($email) ? $email : $setting->default);
}

function batpa_sanitize_checkbox($input)
{
    return ((isset($input) && true == $input) ? true : false);
}

function batpa_string_limit_words($string, $word_limit)
{
    $words = explode(' ', $string, ($word_limit + 1));
    if (count($words) > $word_limit)
        array_pop($words);
    return implode(' ', $words);
}

function batpa_excerpt_more($link)
{
    if (is_admin()) {
        return $link;
    }

    $link = sprintf(
        '<div class="link-more"><a href="%1$s" class="more-link">%2$s</a></div>',
        esc_url(get_permalink(get_the_ID())),
        /* translators: %s: Name of current post */
        sprintf(__('Read More<span class="screen-reader-text"> "%s"</span>', 'batpa'), get_the_title(get_the_ID()))
    );
    return ' &hellip; ' . $link;
}
add_filter('excerpt_more', 'batpa_excerpt_more');



// WP kses allowed tags
// ----------------------------------------------------------------------------------------
function batpa_kses($raw)
{

    $allowed_tags = array(
        'a'                                 => array(
            'class'     => array(),
            'href'     => array(),
            'rel'     => array(),
            'title'     => array(),
            'target'     => array(),
        ),
        'abbr'                             => array(
            'title' => array(),
        ),
        'b'                                 => array(),
        'blockquote'                     => array(
            'cite' => array(),
        ),
        'cite'                             => array(
            'title' => array(),
        ),
        'code'                             => array(),
        'del'                             => array(
            'datetime'     => array(),
            'title'         => array(),
        ),
        'dd'                             => array(),
        'div'                             => array(
            'class'     => array(),
            'title'     => array(),
            'style'     => array(),
        ),
        'dl'                             => array(),
        'dt'                             => array(),
        'em'                             => array(),
        'h1'                             => array(),
        'h2'                             => array(),
        'h3'                             => array(),
        'h4'                             => array(),
        'h5'                             => array(),
        'h6'                             => array(),
        'i'                                 => array(
            'class' => array(),
        ),
        'img'                             => array(
            'alt'     => array(),
            'class'     => array(),
            'height' => array(),
            'src'     => array(),
            'width'     => array(),
        ),
        'li'                             => array(
            'class' => array(),
        ),
        'ol'                             => array(
            'class' => array(),
        ),
        'p'                                 => array(
            'class' => array(),
        ),
        'q'                                 => array(
            'cite'     => array(),
            'title'     => array(),
        ),
        'span'                             => array(
            'class'     => array(),
            'title'     => array(),
            'style'     => array(),
        ),
        'iframe'                         => array(
            'width'             => array(),
            'height'         => array(),
            'scrolling'         => array(),
            'frameborder'     => array(),
            'allow'             => array(),
            'src'             => array(),
        ),
        'strike'                         => array(),
        'br'                             => array(),
        'strong'                         => array(),
        'data-wow-duration'                 => array(),
        'data-wow-delay'                 => array(),
        'data-wallpaper-options'         => array(),
        'data-stellar-background-ratio'     => array(),
        'ul'                             => array(
            'class' => array(),
        ),
    );

    if (function_exists('wp_kses')) { // WP is here
        $allowed = wp_kses($raw, $allowed_tags);
    } else {
        $allowed = $raw;
    }


    return $allowed;
}

// breadcrumb

function the_breadcrumb($sep = ' > '){

    if (!is_front_page()) {
        // Start the breadcrumb with a link to your homepage
        echo '<div class="breadcrumbs">';
        echo '<a href="';
        echo esc_url(home_url());
        echo '">';
        bloginfo('name');
        echo '</a>' . $sep;

        // Check if the current page is a category, an archive or a single page. If so show the category or archive name.
        if (is_category() || is_single()) {
            the_category('title_li=');
        } elseif (is_archive() || is_single()) {
            if (is_day()) {
                printf(esc_html__('%s', 'batpa'), get_the_date());
            } elseif (is_month()) {
                printf(esc_html__('%s', 'batpa'), get_the_date(_x('F Y', 'monthly archives date format', 'batpa')));
            } elseif (is_year()) {
                printf(esc_html__('%s', 'batpa'), get_the_date(_x('Y', 'yearly archives date format', 'batpa')));
            } else {
                _e('Blog Archives', 'batpa');
            }
        }

        // If the current page is a single post, show its title with the separator
        if (is_single()) {
            echo $sep;
            the_title();
        }

        // If the current page is a static page, show its title.
        if (is_page()) {
            echo the_title();
        }

        // if you have a static page assigned to be you posts list page. It will find the title of the static page and display it. i.e Home >> Blog
        if (is_home()) {
            global $post;
            $page_for_posts_id = get_option('page_for_posts');
            if ($page_for_posts_id) {
                $post = get_page($page_for_posts_id);
                setup_postdata($post);
                the_title();
                rewind_posts();
            }
        }

        echo '</div>';
    }
}


// theme option
function theme_options($key)
{
    if (defined('FW')) {
        $value  = fw_get_db_customizer_option($key);
        return $value;
    }
}




/**
 * Get shortcode advanced Font styles
 *
 */
function batpa_advanced_font_styles($style)
{
    $font_styles = '';
    if (isset($style['google_font']) && ($style['google_font'] === true || $style['google_font'] === 'true')) {

        $font_styles .= isset($style['family']) ? 'font-family:"' . $style['family'] . '";' : '';

        if (strpos($style['variation'], 'italic') !== false)
            $font_styles .= 'font-style:italic;';
        elseif (strpos($style['variation'], 'oblique') !== false)
            $font_styles .= 'font-style: oblique;';
        else
            $font_styles .= 'font-style: normal;';

        $font_styles .= (intval($style['variation']) == 0) ? 'font-weight:400;' : 'font-weight:' . intval($style['variation']) . ';';
    } else {
        $font_styles .= isset($style['family']) ? 'font-family:"' . $style['family'] . '";' : '';
        $font_styles .= isset($style['style']) ? 'font-style:' . esc_attr($style['style']) . ';' : '';
        $font_styles .= isset($style['weight']) ? 'font-weight:' . esc_attr($style['weight']) . ';' : '';
    }
    $font_styles .= isset($style['color']) && !empty($style['color']) ? 'color:' . esc_attr($style['color']) . ';' : '';
    $font_styles .= isset($style['line-height']) && !empty($style['line-height']) ? 'line-height:' . esc_attr($style['line-height']) . 'px;' : '';
    $font_styles .= isset($style['letter-spacing']) && !empty($style['letter-spacing']) ? 'letter-spacing:' . esc_attr($style['letter-spacing']) . 'px;' : '';
    $font_styles .= isset($style['size']) && !empty($style['size']) ? 'font-size:' . esc_attr($style['size']) . 'px;' : '';


    return !empty($font_styles) ? $font_styles : '';
}
