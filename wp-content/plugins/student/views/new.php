<?php
  if ( file_exists( $_SERVER['DOCUMENT_ROOT'] . '/wordpress/wp-config.php') ) {
    // * The config file resides in ABSPATH 
    require_once(  $_SERVER['DOCUMENT_ROOT'] . '/wordpress/wp-config.php'  );
  }
  $is_edit = (isset($_REQUEST['action']) && $_REQUEST['action'] == 'edit');
  $action = $is_edit ? 'update' : 'new';
  if($is_edit)
  {
    $query="select * from wp_student_details where id=".$_REQUEST['id'];
    $record= $wpdb -> get_results($query)[0];
  }

  if($is_edit)
  { $firstname = $record->first_name;
    $lastname = $record->last_name;
    $dob = $record->dob;
    $gender = $record->gender;
    $id = $record->ID;
  }
  else
  {
    $id = $firstname = $lastname = $dob = $gender = "";
  }
?>

<form name="studentdetails" id='student' method="post" action = <?= plugins_url()."/student/views/action.php" ?> >
  <input type='hidden' name='action' value="<?= $action; ?>" />
  <input type='hidden' name='id' value="<?= $id ?>" />
  <p>
    <label for="key"> FirstName   </label>
    <input type='text' id='firstname' name='firstname' value="<?= $firstname; ?>"/>
  </p>
  <p>
    <label for="key"> LastName :</label>
    <input type='text' id='lastname' name='lastname' value="<?= $lastname; ?>"/>
  </p>
  <p>
    <label for="key"> Gender :</label>
    <input type='radio' id='gender' name='gender' value="Male" <?= $gender == 'Male' ? 'checked' : ''?> />Male
    <input type='radio' id='gender' name='gender' value="Female" <?= $gender == 'Female' ? 'checked' : ''?> />Female
  </p>
  <p>
    <label for="key"> DOB :</label>
    <input type="text" class="datepicker" name="dob" id="dob" value="<?= $dob; ?>"/>
  </p>
  <input id="submit" type="submit" name="Submit" class="button button-primary" value="Submit" />
</form>
<script>
jQuery(function() {
    jQuery( ".datepicker" ).datepicker({
        dateFormat : "yy/mm/dd"
    });
});
</script>