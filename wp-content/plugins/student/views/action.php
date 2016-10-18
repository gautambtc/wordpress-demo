hello
<?php
  if ( file_exists( $_SERVER['DOCUMENT_ROOT'] . '/wordpress/wp-config.php') ) {
    // * The config file resides in ABSPATH 
    require_once(  $_SERVER['DOCUMENT_ROOT'] . '/wordpress/wp-config.php'  );
  }
  global $wpdb;
  var_dump($_REQUEST);
  switch($_REQUEST['action'])
  {
    case 'delete':
      $wpdb->delete("wp_student_details", array("id" => $_REQUEST['id']));
    break;

    case 'new':
      $result = $wpdb->insert("wp_student_details", array("first_name" => $_REQUEST['firstname'],
        "last_name" => $_REQUEST['lastname'],
        "gender" => $_REQUEST['gender'],
        "dob" => $_REQUEST['dob'])
        );
      var_dump($result);
    break;
  }
  wp_redirect(admin_url()."admin.php?page=student/views/index.php");
?>

