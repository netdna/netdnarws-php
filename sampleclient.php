<?php

require_once('NetDNA.php');

$client = new NetDNA('kespiritu',"49949e1a0f27b17ab892e652363a70d705052af0f","6435b4a540b068a469fdae073ba2bc57");
 
$res =  $client->get('zones/pull.json');
echo "res= $res";

