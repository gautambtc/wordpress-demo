<?php
    global $query;
    $query="SELECT * FROM wp_student_details";
    $students= $wpdb->get_results($query);
?>


<
<table class="form-table">
  <tr>
    <th>Id</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Gender</th>
    <th>DOB</th>
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
      <td>
        <a href="action.php?action=edit&id=<?= $student->ID ?>">Edit</a>&nbsp;&nbsp;
        <a href="action.php?action=delete&id=<?= $student->ID ?>">Delete</a>
      <td>
    </tr>
<?php 
    }
?>
</tbody>
</table>