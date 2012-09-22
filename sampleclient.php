<?php

require_once('NetDNA.php');

$api = new NetDNA(("myalias", "consumer_key", "consumer_secret"));
 
echo  $api->get('/account.json');
