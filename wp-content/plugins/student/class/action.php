
<?php
  if ( file_exists( $_SERVER['DOCUMENT_ROOT'] . '/wordpress/wp-config.php') ) {
    // * The config file resides in ABSPATH 
    require_once(  $_SERVER['DOCUMENT_ROOT'] . '/wordpress/wp-config.php'  );
  }
  if($_REQUEST['submit'] != 'delete'){
    $firstname = $_REQUEST['firstname']|= '';
    $lastname = $_REQUEST['lastname']|= '';
    $gender = $_REQUEST['gender'] |= '';
    $dob = $_REQUEST['dob'] |= '';
  }
  $action = $_REQUEST['submit'];
  switch ($action)
  {
    case 'create':
      $resume_file =  $_FILES['resume_file']['tmp_name'];
      $file_name = $_FILES['resume_file']['name'];
      
      $query="insert into wp_student_details(first_name, last_name, gender, dob, resume_file) values ('".$firstname."','".$lastname."','".$gender."','". $dob ."','". $file_name ."')";
      $result= $wpdb->query($query);
      $filepath=$_SERVER['DOCUMENT_ROOT'] . '/wordpress/wp-content/plugins/student/resumes/'.$file_name;
      $id = $wpdb -> insert_id;
      // dir  = STUDENT_DIR;
      copy($resume_file,$filepath  );
      chmod($filepath, 777);
      break;
    case 'update':
      $result = $wpdb->update("wp_student_details", array("first_name" => $firstname, "last_name" => $lastname, "gender" => $gender, "dob" => $dob), array("id" => $_REQUEST['id']));      
      break;
    case 'delete':
      $wpdb->delete("wp_student_details", array("id" => $_REQUEST['id']));
      break;
  }
  
  wp_redirect(admin_url()."?page=student/views/index.php");
?>
