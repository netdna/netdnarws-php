<?php

require_once('NetDNA.php');


$api = NetDNA('zones/pull.json','GET');
print_r($api);