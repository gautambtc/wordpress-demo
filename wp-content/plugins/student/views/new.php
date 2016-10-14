<form name="studentdetails" id='student' method="post" action = <?php echo plugins_url()."/student/class/student-class.php"; ?> >
  <p>

    <label for="key"> FirstName  - </label>
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
  <input id="submit" type="submit" name="submit" class="button button-primary" value="create" />
</form>
<script>
jQuery(function() {
    jQuery( ".datepicker" ).datepicker({
        dateFormat : "dd-mm-yy"
    });
});
</script>