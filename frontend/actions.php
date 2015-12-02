<?php

/**
 *
 */
function ac_remove_wpautop() {

    $ac_remove_autop = get_field('ac_remove_auto_p', get_the_id());

    if($ac_remove_autop != false) {
        remove_filter('the_content', 'wpautop');
    }

}

add_action('wp', 'ac_remove_wpautop', 999);