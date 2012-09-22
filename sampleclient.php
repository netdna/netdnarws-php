<?php

require_once('NetDNA.php');

$api = new NetDNA('kespiritu',"49949e1a0f27b17ab892e652363a70d705052af0f","6435b4a540b068a469fdae073ba2bc57");
 
echo  $api->get('/account.json');
// 
// zones/pull.json
// 
// require 'netdnarws'
// 
// api = NetDNARWS::NetDNA.new("myalias", "consumer_key", "consumer_secret")
// 
// api.get("/account.json")