<?php

require_once('NetDNA.php');

$api = new NetDNA("my_alias","consumer_key","consumer_secret");
 
echo  $api->get('/zones/pull.json');
