<?php
    global $query;
    $query="SELECT * FROM wp_student_details ";
    $students= $wpdb->get_results($query);
?>

<a href=<?= admin_url()."?page=student/views/new.php" ?>>New Sudent</a>

<table class="form-table">
  <tr>
    <th>Id</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Gender</th>
    <th>DOB</th>
    <th> Resume </th>
    <th>ACTIONS</th>
    
  </tr>
  <tbody>
<?php
    foreach($students as $student)
    {
?>
    <tr>
      <td><?= $student->ID ?></td>
      <td><?= $student->first_name ?></td>
      <td><?= $student->last_name ?></td>
      <td><?= $student->gender ?></td>
      <td><?= $student->dob ?></td>
       <td><a href= <?='../wp-content/plugins/student/resumes/'. $student->resume_file  ?>  ><?= $student->resume_file  ?></a></td>
      <td>
        <a href=<?= admin_url()."admin.php?page=student/views/edit.php&id=".$student->ID ?>>Edit</a>&nbsp;&nbsp;
        <a href=<?= plugins_url()."/student/class/student-class.php?action=delete&id=".$student->ID ?>>Delete</a>
      <td>
    </tr>
<?php 
    }
?>
</tbody>
</table>