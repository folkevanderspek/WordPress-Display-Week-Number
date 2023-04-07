<?php
/*
Plugin Name: Week Number Shortcode
Plugin URI: https://codecanyon.net/user/intramate
Description: Displays the current week number using this shortcode. [week_number] 
Version: 1.0
Author: intramate
Author URI: https://codecanyon.net/user/intramate
License: GPL3
*/

function week_number_shortcode() {
    $week_number = date('W');
    return 'The current week number is: ' . $week_number;
}
add_shortcode('week_number', 'week_number_shortcode');
?>

