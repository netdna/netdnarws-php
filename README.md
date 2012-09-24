# NetDNA REST Web Services PHP Client
====================================


## Usage

require_once('NetDNA.php');

$api = new NetDNA('my_alias',"consumer_key","consumer_secret");


$api = NetDNA('/zones/pull.json');


## Methods

It has support for GET, POST, PUT and DELETE OAuth signed requests.

