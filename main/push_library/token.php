<?php

use Aws\Api\Parser\JsonParser;

 error_reporting(E_ALL);
 ini_set("display_errors", 1);

 require_once ('../plugin/google-api-php-client-main/vendor/autoload.php');
 
 $url    = 'https://fcm.googleapis.com/v1/projects/ksso2024-12250/messages:send';

 putenv('GOOGLE_APPLICATION_CREDENTIALS=./key.json');
 $scope = 'https://www.googleapis.com/auth/firebase.messaging';
 $client = new Google_Client();
 $client->useApplicationDefaultCredentials();
 $client->setScopes($scope);
 $auth_key = $client->fetchAccessTokenWithAssertion();
 //echo $auth_key['access_token'];
 $token = $auth_key['access_token'];

 $headers = array(
     'Authorization: Bearer '.  $token,
     'Content-Type: application/json'
 );

 $data['title'] = "제59차 대한비만학회 춘계학술대회";
 $data['body']  = "Symposium 13이 10분 뒤 시작합니다.";
 $data['sound'] = 'default';

 $fields = array(
     'token'  => "fTWj2OjwMkf8ugllChPnSH:APA91bHkWmtAP34BbOEJ9pq4CbrXQMVdYTMIr4j0eH3YIfS3LVthtBS16M1Ep7i7afk6983-eWCmmYzHDcZ_DFmalb5-uJjzqCympnXEfp0jLnuoKJmuGM494DHi0PyVy564qlgFWeZv",
     'notification'      => array('title'=>  $data['title'],'body'=> $data['body'])
 );

 $message_json = array('message'=>$fields);
 
 // JSON 문자열로 변환
$json_string = json_encode($message_json, JSON_PRETTY_PRINT);

// 출력
//echo $json_string;

$ch = curl_init();

curl_setopt( $ch, CURLOPT_URL, $url);
curl_setopt( $ch, CURLOPT_POST, true );
curl_setopt( $ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
curl_setopt( $ch, CURLOPT_POSTFIELDS, json_encode( $message_json ) );

//create the multiple cURL handle
$mh = curl_multi_init();

//add the two handles
curl_multi_add_handle($mh,$ch);

//execute the multi handle
do {
    $status = curl_multi_exec($mh, $active);
    if ($active) {
        curl_multi_select($mh);
    }
} while ($active && $status == CURLM_OK);

//close the handles
curl_multi_remove_handle($mh, $ch);
curl_multi_close($mh);

?>