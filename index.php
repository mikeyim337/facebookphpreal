<?php

require_once('src/Facebook/autoload.php');

$fb = new Facebook\Facebook([
  'app_id' => '262721524347126', // Replace {app-id} with your app id
  'app_secret' => 'dca2af274a9de90360c9bd37f19d8b0a',
  'default_graph_version' => 'v3.1',
  ]);

$helper = $fb->getRedirectLoginHelper();


$permissions = ['public_profile', 'email', 'user_photos'];




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>