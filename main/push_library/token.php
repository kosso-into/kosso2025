<?php
 error_reporting(E_ALL);
 ini_set("display_errors", 1);

$url = 'https://fcm.googleapis.com/v1/projects/ksso2024-12250/messages:send';

 require_once ('../plugin/google-api-php-client-main/vendor/autoload.php');

    putenv('GOOGLE_APPLICATION_CREDENTIALS=./key.json');

    $scope = 'https://www.googleapis.com/auth/firebase.messaging';

    $client = new Google_Client();

    $client->useApplicationDefaultCredentials();

    $client->setScopes($scope);



    $auth_key = $client->fetchAccessTokenWithAssertion();

    echo $auth_key['access_token'];
?>