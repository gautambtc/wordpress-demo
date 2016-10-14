<?php
  if ( file_exists( $_SERVER['DOCUMENT_ROOT'] . '/wordpress/wp-config.php') ) {
    // * The config file resides in ABSPATH 
    require_once(  $_SERVER['DOCUMENT_ROOT'] . '/wordpress/wp-config.php'  );
  }
?>
<form name="studentdetails" id='student' method="post" action = <?= plugins_url()."/student/views/action.php" ?> >
  <input type='text' name='action' value="new" />
  <p>
    <label for="key"> FirstName   </label>
    <input type='text' id='firstname' name='firstname'/>
  </p>
  <p>
    <label for="key"> LastName :</label>
    <input type='text' id='lastname' name='lastname'/>
  </p>
  <p>
    <label for="key"> Gender :</label>
    <input type='text' id='gender' name='gender'/>
  </p>
  <p>
    <label for="key"> DOB :</label>
    <input type="text" class="datepicker" name="dob" id="dob" value=""/>
  </p>
  <input id="submit" type="submit" name="Submit" class="button button-primary" value="Submit" />
</form>
<script>
jQuery(function() {
    jQuery( ".datepicker" ).datepicker({
        dateFormat : "dd-mm-yy"
    });
});
</script>