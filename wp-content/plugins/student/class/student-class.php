
<?php
  if ( file_exists( $_SERVER['DOCUMENT_ROOT'] . '/wordpress/wp-config.php') ) {
    // * The config file resides in ABSPATH 
    require_once(  $_SERVER['DOCUMENT_ROOT'] . '/wordpress/wp-config.php'  );
  } 
  $firstname = $_REQUEST['firstname'];
  $lastname = $_REQUEST['lastname'];
  $gender = $_REQUEST['gender'];
  $dob = $_REQUEST['dob'];
  $action = $_REQUEST['submit'];
  
  if ($action == 'create')
  {
    $query="insert into wp_student_details(first_name, last_name, gender, dob) values ('".$firstname."','".$lastname."','".$gender."','". $dob ."')";
    $result= $wpdb->query($query);

    if($result){
      echo "<script type='text/javascript'> alert('content created successfully'); </script>";
    } else {
      echo "<script type='text/javascript'> alert('content not created successfully'); </script>";
    }
   
  }
  else if ($action == 'update')
  {
    $query="update wp_student_details set first_name = '".$firstname. "', last_name ='" . $lastname . "', gender = '". $gender ."', dob= '".$dob."' where id = " . $_REQUEST['id'];
    // $result = $wpdb->update("wp_student_details", array("first_name" => $firstname, "last_name" => $lastname, "gender" => $gender, "dob" => $dob), array("id" => $id));
    $result= $wpdb->query($query);
    if($result){
      echo "<script type='text/javascript'> alert('content updated successfully'); </script>";
    } else {
      echo "<script type='text/javascript'> alert('content not updatedd successfully'); </script>";
    }
  }
  else if($_REQUEST['action'] == 'delete')
  {
   $wpdb->delete("wp_student_details", array("id" => $_REQUEST['id']));
  }
  
   wp_redirect(admin_url()."admin.php?page=student/views/index.php");
?>
