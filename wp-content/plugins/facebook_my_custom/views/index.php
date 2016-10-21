hello
<?php
session_start();

  require_once('facebook/src/Facebook/autoload.php');

   // $access_token ='EAACtsGVCDZCkBAKWIuZBBsPp66i5yYeRSdFNFMDhHZA6dER9OIZBF3v2QEILDATUUAihmcAp9sQU7CAwZB6oDFIZAAhMvX1esWYcNKboEOiZAIreLx2JeAqula5FoUdN95jzAb7GwslJ0sKeKGgKCDrVe3JV3VjuvMCn50X6R7LVAZDZD';
  $app_id = '190973124677625';
  $app_secret = '36a16a27fe6f88f0faa76a22791408fc';
 
//   $fb = new \Facebook\Facebook([
//   'app_id' => $app_id,
//   'app_secret' => $app_secret,
//   'default_graph_version' => 'v2.8',
//   'default_access_token' => $access_token, // optional
// ]);

//     $response = $fb->get('/888815944475125/');
//     var_dump($response);

//require_once( 'Facebook/autoload.php' );
 
$fb = new Facebook\Facebook([
  'app_id' => $app_id,
  'app_secret' => $app_secret,
  'default_graph_version' => 'v2.5',
]);
 
$helper = $fb->getRedirectLoginHelper();
 
$permissions = ['publish_stream' ,'email', 'pages_show_list', 'pages_manage_instant_articles', 'publish_actions']; // Optional permissions for more permission you need to send your application for review
$loginUrl = $helper->getLoginUrl('http://localhost/wordpress/wp-admin/admin.php?page=facebook_my_custom/views/index.php', $permissions);
//header("location: ".$loginUrl);
 echo ">>>>><a href=$loginUrl>login</a>";

 $helper = $fb->getRedirectLoginHelper();
  $_SESSION['FBRLH_state']=$_GET['state'];
try {
  $accessToken = $helper->getAccessToken();
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  // When Graph returns an error
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  // When validation fails or other local issues
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}
//var_dump($accessToken);


  $fb = new \Facebook\Facebook([
  'app_id' => $app_id,
  'app_secret' => $app_secret,
  'default_graph_version' => 'v2.8',
  'default_access_token' => $accessToken, // optional
]);

    $response = $fb->post('/me/feed/',array('message' => "status update from zopus"), $accessToken);
    var_dump($response);
?>