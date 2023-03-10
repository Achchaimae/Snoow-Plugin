<?php 
//not sure if this is the right way to do it
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

if ( ! function_exists( 'add_action' ) ) {
    echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
    exit;
}
