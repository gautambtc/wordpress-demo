<?php
  if ( file_exists( $_SERVER['DOCUMENT_ROOT'] . '/wordpress/wp-config.php') ) {
    // * The config file resides in ABSPATH 
    require_once(  $_SERVER['DOCUMENT_ROOT'] . '/wordpress/wp-config.php'  );
  }
    global $wpdb;
    $where = isset($_REQUEST['search']) ? 
    " where first_name LIKE '%".$_REQUEST['search']."%' OR last_name LIKE '%".$_REQUEST['search']."%'" : "";
    $query="SELECT * FROM wp_student_details ".$where;
    $students= $wpdb->get_results($query);
?>

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
        <a href=<?= admin_url()."admin.php?page=student/views/new.php&action=edit&id=".$student->ID ?>>Edit</a>&nbsp;|&nbsp;
        <a onclick="deleteStudent(<?= $student->ID ?>);" data-remote=true>Delete</a>
      <td>
    </tr>
<?php 
    }
    if(count($students) == 0)
    {
      echo "<tr><td colspan='6'><center><b>--- no record found ---</b></center></td></tr>";
    }
?>
</tbody>
</table>
