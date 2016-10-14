<?php
/*
Plugin Name: Student-CRUD
Plugin URI:  https://developer.wordpress.org/plugins/Student-CRUD/
Description: Basic WordPress demo plugin
Version:     20161013
Author:      Gautam
Text Domain: wporg

{Plugin Name} is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
{Plugin Name} is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with {Plugin Name}. If not, see {License URI}.
*/
define( 'STUDENT_DIR', plugin_dir_path( __FILE__ ) );
// require_once( ZOPUS_DEMO__PLUGIN_DIR . '/view/new.php' );


register_activation_hook( __FILE__, array( 'student', 'plugin_activation' ) );
register_deactivation_hook( __FILE__, array( 'student', 'plugin_deactivation' ) );


  // add_action( 'plugins_loaded', 'content' );
  // function content_textdomain() {
  //   load_plugin_textdomain( 'Student-CRUD', false, dirname( plugin_basename( __FILE__ ) ) );
  // }

  // add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function = '', $icon_url = '', $position = null ) {

  add_action('admin_menu', 'content_menu_student');
  function content_menu_student() {
    if (function_exists('add_menu_page')) {
      add_menu_page(__('student', 'student'), __('student', 'student'), 'manage_database', 'student/views/index.php', '', 'dashicons-archive');
      add_menu_page(__('student', 'student'), __('NewStudent', 'NewStudent'), 'manage_database', 'student/views/new.php', '', 'dashicons-archive');
      // add_menu_page(__('student', 'student'), __('Edit Student', 'EditStudent'), 'manage_database', 'student/views/edit.php', '', 'dashicons-archive');

  //     add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function = '', $icon_url = '', $position = null ) {
    global $menu, $admin_page_hooks, $_registered_pages, $_parent_pages;

    $menu_slug = plugin_basename( 'student/views/edit.php' );

    $admin_page_hooks[$menu_slug] = sanitize_title( __('Edit Student', 'EditStudent') );

    $hookname = get_plugin_page_hookname( $menu_slug, '' );

    if ( !empty( $function ) && !empty( $hookname ) && current_user_can( $capability ) )
    add_action( $hookname, $function );
    $_registered_pages[$hookname] = true;

      
    }
      
      // add_submenu_page('', __('Manage Backup DB', 'wp-dbmanager'), __('Manage Backup DB', 'wp-dbmanager'), 'manage_database', '');
      // add_submenu_page('', __('Optimize DB', 'wp-dbmanager'), __('Optimize DB', 'wp-dbmanager'), 'manage_database', '');
      // add_submenu_page('', __('Repair DB', 'wp-dbmanager'), __('Repair DB', 'wp-dbmanager'), 'manage_database', '');
      // add_submenu_page('', __('Empty/Drop Tables', 'wp-dbmanager'), __('Empty/Drop Tables', 'wp-dbmanager'), 'manage_database', '');
      // add_submenu_page('', __('Run SQL Query', 'wp-dbmanager'), __('Run SQL Query', 'wp-dbmanager'), 'manage_database', '');
      // add_submenu_page('', __('DB Options', 'wp-dbmanager'),  __('DB Options', 'wp-dbmanager'), 'manage_database', '', '');
    // }

  }

?>