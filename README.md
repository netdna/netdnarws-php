# NetDNA REST Web Services PHP Client
====================================


## Usage
```
<?php

require_once('NetDNA.php');

$api = new NetDNA("my_alias","consumer_key","consumer_secret");

echo $api->get('/zones/pull.json');
```

## Methods

It has support for GET, POST, PUT and DELETE OAuth signed requests.

