<form name="contentsform" id='contents' method="post" >
  <p>
    <label for="key"></label>
    <br /><input type="text" name="name" id="name" value="" size="50" />
    <br /><input type="text" name="content" id="content" value="" size="50" />
  </p>
  <p class="submit">
    <input id="submit" type="submit" name="Submit" class="submit" value="Submit" />
  </p>
</form>

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
    
    mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
    $query="insert into contents(name, content) values ('".$name."','".$content."')";
    $result= mysql_query($query);
    echo $result;
    echo " - ";
    echo $name;
    echo $content;
   
      // header("Location: contents.php");
    exit;
  }
?>
<?php get_footer( 'wp-activate' );
