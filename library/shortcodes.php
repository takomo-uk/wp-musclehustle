<?php

// Remove auto paragraphs around shortcodes
// more: http://www.paulund.co.uk/remove-line-breaks-in-shortcodes
remove_filter( 'the_content', 'wpautop' );
add_filter( 'the_content', 'wpautop' , 99);
add_filter( 'the_content', 'shortcode_unautop',100 );

// e.g [col size="medium-3"] .. [/col]
function gridColumn($size, $content = null) {
    extract(shortcode_atts(array(
        'size' => 'size'
    ), $size));

    return '<div class="' . $size .  ' columns">' . $content . '</div>';
}

// [row] ... [/row]
function gridRow($atts, $content = null) {
    return '<div class="row">' . do_shortcode($content) . '</div>';
}

add_shortcode('row', 'gridRow');
add_shortcode('col', 'gridColumn');

?>