<?php
if (!current_user_can('administrator')) {
    add_filter('show_admin_bar', '__return_false');
}

?>

