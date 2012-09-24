# NetDNA REST Web Services PHP Client
====================================

## Installation

```shell
$ wget https://github.com/netdna/netdnarws-php/zipball/master`
$ unzip master
$ cd netdna-netdnarws-php-f9d7d04
```

## Usage
```php
<?php

require_once('NetDNA.php');

$api = new NetDNA("my_alias","consumer_key","consumer_secret");

echo $api->get('/zones/pull.json');

?>
```

## Methods

It has support for `GET`, `POST`, `PUT` and `DELETE` OAuth signed requests.

