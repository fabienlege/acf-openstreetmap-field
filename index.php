<?php

/*
Plugin Name: ACF OpenStreetMap Field
Plugin URI: http://wordpress.org/
Description: Enter description here.
Author: Jörn Lund
Version: 0.0.1
Author URI:
License: GPL3

Text Domain: acf-openstreetmap-field
Domain Path: /languages/
*/

/*  Copyright 2017  Jörn Lund

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

/*
Plugin was generated by WP Plugin Scaffold
https://github.com/mcguffin/wp-plugin-scaffold
Command line args were: `"ACF OpenStreetMap Field" git gulp --force`
*/


namespace AcfOpenstreetmapField;

define( 'ACF_OPENSTREETMAP_FIELD_FILE', __FILE__ );
define( 'ACF_OPENSTREETMAP_FIELD_DIRECTORY', plugin_dir_path(__FILE__) );

require_once ACF_OPENSTREETMAP_FIELD_DIRECTORY . 'include/autoload.php';

Core\Core::instance();





if ( is_admin() || defined( 'DOING_AJAX' ) ) {



}
