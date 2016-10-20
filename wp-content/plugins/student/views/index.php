


<?php
    global $query;
    $query="SELECT * FROM wp_student_details ";
    $students= $wpdb->get_results($query);
    require_once(ABSPATH.'vendor/facebook/graph-sdk/src/Facebook/autoload.php');
    $fb = new \Facebook\Facebook([
      'app_id' => '1142047632538310',
      'app_secret' => '84890d02cf6dd9f10b0ff70884039651',
      'default_graph_version' => 'v2.8',
      'default_access_token' => 'EAAQOr690OsYBAP8FXAg8wWNgljUeEsYzmodonWKO2lcS5IWdgZBshr3vH6bE9SBUJSeiVLaY6MtNblYc10ntan6RtU6VMhgMpE5YNreiYp4YyZAoAsN8E17SFOUdHk8evQQE9zpxAL9udnvPo39cgwv1zV28bNN88AZCVeZCHQZDZD', // optional
    ]);
    
    $response = $fb->get('/messages');
    print_r($response);
    // print_r($response);
    // var_dump($response);
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