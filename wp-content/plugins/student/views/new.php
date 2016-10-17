<form name="studentdetails" id='student' method="post" enctype="multipart/form-data" action = <?php echo plugins_url()."/student/class/action.php"; ?> >
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
    <input type='radio' id='gender' name='gender' value="Male"/>Male
    <input type='radio' id='gender' name='gender' value="Female" />Female
  </p>
  <p>
    <label for="key"> DOB :</label>
    <input type="text" class="datepicker" name="dob" id="dob" value=""/>
  </p>
  <p>
    <label for="key"> Resume :</label>
    <input type="file" name="resume_file" id='resume_file'/>
 </p>
  <input id="submit" type="submit" name="submit" class="button button-primary" value="create" />
</form>
<script>
jQuery(function() {
    jQuery( ".datepicker" ).datepicker({
        dateFormat : "yy-mm-dd"
    });
});
</script>