<?php 
/**
 * Cronjob Scheduler Include File
 *
 * This page allows you to create Cronjob Scheduler custom actions
 * through the WordPress admin. Actions can also be created within
 * theme files or other PHP files throughout your WordPress install.
 *
 * Do not edit this file unless you have a good understanding of PHP, 
 * saving this with invalid code can render your WordPress install inoperable
 * until you can fix the issue using FTP or another file editing utility.
**/
require_once( ABSPATH . "wp-config.php");
function my_cronjob_action () {
	
    // code to execute on cron run
  // if ( file_exists( $_SERVER['DOCUMENT_ROOT'] . '/wordpress/wp-config.php') ) {
  //   // * The config file resides in ABSPATH
  global $wpdb;
  $query="insert into wp_student_details(first_name, last_name, gender, dob) values ('Gautam','Moradiya','male','2016-04-04')";
  $result= $wpdb->query($query);
  // // }
  
  echo "<script>alert(' done'); </script>";

} add_action('my_cronjob_action', 'my_cronjob_action');

// add_action('admin_menu', 'insert_user_random', 10, 1 )

