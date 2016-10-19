connected with twitter? <?php 
echo twitter_api_configured(); 

$path = 'https://api.twitter.com/1.1/followers/list.json';
$params = array('cursor'=>-1, 
                'screen_name'=>'twitterdev',
                'skip_status'=>true,
                'include_user_entities'=>false);

//$result = twitter_api_get('friends/list', array('screen_name'=>'gautam_moradiya'));
$result = twitter_api_post('statuses/update',array('status'=> 'posting from api 2'));
var_dump($result);
?>

