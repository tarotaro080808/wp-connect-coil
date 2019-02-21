<?php
/*
Plugin Name: WP Connect Coil
Plugin URI: 
Description: For Connecting to Coil.
Version: 1.0.0
Author: tarotaro
Author URI: https://github.com/tarotaro080808
License: GPL2
*/
/*  Copyright 2019 tarotaro (email : tarotaro080808@gmail.com)
 
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

if ( !class_exists('Wp_Connect_Coil') ) {
  class Wp_Connect_Coil_Taro {
    public function __construct() {
      add_filter( 'wp_head', array( $this, 'custom_meta_tag_for_coil' ) );
      add_action( 'admin_menu', array( $this, 'add_menu_for_coil' ) );
    }
    function custom_meta_tag_for_coil() {
      echo '<meta name="monetization" content="" />';
    }
    function add_menu_for_coil() {
      add_submenu_page( 'options-general.php', 'Coil Setting','Coil Setting','manage_options', 'coil-setting', array(&$this, 'options_page') );
    }
    function options_page() {
      echo 'Write this.';
    }
  }
}
$ConnectCoilClass = new Wp_Connect_Coil_Taro();
