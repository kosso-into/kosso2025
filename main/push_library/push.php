<?php
// error_reporting( E_ALL );
// ini_set( "display_errors", 1 );
require_once ('/var/www/kosso.org/main/plugin/google-api-php-client-main/vendor/autoload.php');

class Push

{

    static function fcmMultiPushV2($title, $message, $device, $to_list, $data, $body_key="", $body_args=[""], $img_path=""){

        $url    = 'https://fcm.googleapis.com/v1/projects/ksso2024-12250/messages:send';

        putenv('GOOGLE_APPLICATION_CREDENTIALS=/var/www/kosso.org/main/push_library/key.json');
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
            for($a = 0; $a < count($to_list); $a++) {
                $fields = array(
                    'token'  => $to_list[$a],
                    'notification'      => array('title'=> $title,'body'=> $message)
                );

            $message_json = array('message'=>$fields);
            self::sendAsync($url, $headers, $message_json);
            }
    }

    //[240105] sujeong 사용 X 함수
//     static function fcmPushV2($title, $message, $device, $to_list, $data, $body_key="", $body_args=[""], $img_path=""){

//         $url    = 'https://fcm.googleapis.com/v1/projects/ksso2024-12250/messages:send';

//         $headers = array(
//             'Authorization: Bearer='.$this->token,
//             'Content-Type: application/json'
//         );

//         if($device =='android'){

//             $data['title'] = $title;
//             $data['body']  = $message;
//             $data['sound'] = 'default';

//             $fields = array(
//                 'to'  => $to_list,
//                 'data'=> $data,
//                 'notification' => array('title'=> $title,'body'=> $message,'sound'=>'default')
//             );

//             self::sendAsync($url, $headers, $fields);

//         }else{
//             // for($a = 0; $a < count($to_list); $a++){
//             $fields = array(
//                 "to"                => $to_list,
//                 "content-available" => true,
//                 "mutable_content"   => true,
//                 "priority"          => "high",
//                 "data"              => array('data'=>$data,"media_type"=>"image"),
//                 "notification"      => array('title'=>$title,'body'=>$message,'sound'=>'default','body_loc_key'=>$body_key,'body_loc_args'=>$body_args)
//             );
//             self::sendAsync($url, $headers, $fields);
// // }
//         }
//     }

    static function sendAsync($url, $headers, $fields){
        // Open connection
        $ch = curl_init();

        // Set the url, number of POST vars, POST data
        curl_setopt( $ch, CURLOPT_URL, $url);
        curl_setopt( $ch, CURLOPT_POST, true );
        curl_setopt( $ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
        curl_setopt( $ch, CURLOPT_POSTFIELDS, json_encode( $fields ) );

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
    }
}