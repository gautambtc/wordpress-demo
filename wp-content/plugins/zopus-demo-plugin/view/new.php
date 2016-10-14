<?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name=$_POST['name'];
    $content=$_POST['content'];    
    if ( file_exists( ABSPATH . 'wp-config.php') ) {
      /** The config file resides in ABSPATH */
      require_once( ABSPATH . 'wp-config.php' );
    } elseif ( @file_exists( dirname( ABSPATH ) . '/wp-config.php' ) && ! @file_exists( dirname( ABSPATH ) . '/wp-settings.php' ) ) {
      /** The config file resides one level above ABSPATH but is not part of another install */
      require_once( dirname( ABSPATH ) . '/wp-config.php' );
    }
    $query="insert into contents(name, content) values ('".$name."','".$content."')";
    $result= $wpdb->query($query);
    if($result){
      echo "<script type='text/javascript'> alert('content created successfully'); </script>";
    } else {
      echo "<script type='text/javascript'> alert('content not created successfully'); </script>";
    } 
  }
// 
?>

<form name="contentsform" id='contents' method="post" >
  <p>
    <label for="key"> Name  - </label>
    <input type='text' id='name' name='name'/>
  </p>
  <p>
    <label for="key"> Content :</label>
    <input type='text' id='content' name='content'/>
  </p>
    <input id="submit" type="submit" name="Submit" class="button button-primary" value="Submit" />
</form>