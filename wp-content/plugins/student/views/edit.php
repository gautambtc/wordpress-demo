<?php
   if ( file_exists( $_SERVER['DOCUMENT_ROOT'] . '/wordpress/wp-config.php') ) {
    // * The config file resides in ABSPATH 
    require_once(  $_SERVER['DOCUMENT_ROOT'] . '/wordpress/wp-config.php'  );
  } 


  $id=$_REQUEST['id'];

  $query="select * from wp_student_details where id=".$id;
  $record= $wpdb -> get_results($query)[0];
?>

<form name="studentdetails" id='student' method="post" action =  <?php echo plugins_url()."/student/class/student-class.php?id=".$id; ?> >
  <p>
    <label for="key"> FirstName  - </label>
    <input type='text' id='firstname' name='firstname' value = <?= $record->first_name?>  >
  </p>
  <p>
    <label for="key"> LastName :</label>
    <input type='text' id='lastname' name='lastname' value = <?= $record->last_name?> >
  </p>
  <p>
    <label for="key"> Gender :</label>
    <input type='radio' id='gender' name='gender' value="Male" <?= $record->gender == 'Male' ? 'checked' : ''?> />Male
    <input type='radio' id='gender' name='gender' value="Female" <?= $record->gender == 'Female' ? 'checked' : ''?> />Female
  </p>
  <p>
    <label for="key"> DOB :</label>
    <input type='text' class="datepicker" id='dob' name='dob' value = <?= $record->dob?> >
  </p>
  <input id="submit" type="submit" name="submit" class="button button-primary" value="update" />
</form>
<script>
jQuery(function() {
    jQuery( ".datepicker" ).datepicker({
        dateFormat : "yy-mm-dd"
    });
});
</script>