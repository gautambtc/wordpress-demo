<?php
  class ZopusContents{

    public function newContent(){
      header("Location: ../wp-content/plugins/zopus-demo-plugin/view/new.php");
      echo "<script type='text/javascript'> alert(" . print_r($wp_query->query_vars)  . "); </script>";
    }
    public function createContent(){

    }

  }

  $content = new ZopusContents();
  $content->newContent();
?>