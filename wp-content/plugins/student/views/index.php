 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<br>
<a href=<?= admin_url()."admin.php?page=student/views/new.php" ?> class="button button-primary">New Sudent</a>
<input type="text" name="search" onkeyup="showStudent(this.value);" placeholder="search by first or last name">

<div id="student_data">
  <?php
    include('search.php');
  ?>
</div>

<script type="text/javascript">
function showStudent(keyword) {
    var action_url = '<?= plugins_url()."/student/views/search.php" ?>';
    $.ajax({url: action_url, 
    success: function(result){
    $("#student_data").html(result);},
    data: {search: keyword.trim()}});
  }

function deleteStudent(id)
{
  if(confirm('do you want to delete student with id: '+id))
  {
    var action_url = '<?= plugins_url()."/student/views/delete.php" ?>';
    $.ajax({url: action_url, 
        success: function(result){
        $("#student_data").html(result);},
        data: {action: 'delete', id: id}});
  }
}

</script>