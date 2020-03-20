<?php
//credits: majaaaaaaa john paul majaaaaaaaaa

include('google/config.php');

$google_client->revokeToken();
session_destroy();
header('location:index.php');

?>
