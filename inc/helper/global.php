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
