<?php

require_once 'vendor/autoload.php';

$google_client = new Google_Client();

$google_client->setClientId('410146654780-dfpjcnbrs7vpqkm62hs14l7bhtglj9gc.apps.googleusercontent.com');

$google_client->setClientSecret('LpwQD8c_KvD-zYAblbPP8GXz');

$google_client->setRedirectUri('https://apiact.herokuapp.com/index.php');

//
$google_client->addScope('email');

$google_client->addScope('profile');


session_start()
?>
