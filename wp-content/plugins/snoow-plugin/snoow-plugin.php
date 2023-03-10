<?php
/**
 * @package Snoow-Plugin
 */
/*
Plugin Name: snoow plugin
Plugin URI: https://github.com/Achchaimae/SnoowPlugin.git
Description: A plugin to create a feedback form
Version: 1.0.0
Author: Achchaimae "Snoow" Khalaf
Author URI: https://www.linkedin.com/in/achchaimae-khalaf/
License: GPLv2 or later
Text Domain: snoow-plugin
*/

/*
    this program is free software; you can redistribute it and/or 
    modify it under the terms of the gnu general public license 
    as published by the free software foundation; either version 2 
    of the license, or (at your option) any later version.

    this program is distributed in the hope that it will be useful,
    but without any warranty; without even the implied warranty of
    merchantability or fitness for a particular purpose.  see the
    gnu general public license for more details.

    you should have received a copy of the gnu general public license
    along with this program; if not, write to the free software
    foundation, inc., 51 franklin street, fifth floor, boston, ma  02110-1301, usa.

    or see <http://www.gnu.org/licenses/>.

    copyright (c) 2023 snoow plugin
*/
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

class SnoowPlugin{
    //methods
    function __construct(){
        add_action( 'init', array( $this, 'custom_post_type' ) );
    }

}

if( class_exists( 'SnoowPlugin' ) ){
    $snoowPlugin = new SnoowPlugin();
}

