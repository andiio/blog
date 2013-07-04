<?php


$config['db_host'] = 'localhost';
$config['db_user'] = 'root';
$config['db_pass'] = '';
$config['db_name'] = 'blog';

foreach ( $config as $k => $v ){
	define(strtoupper($k), $v);
}


/*

<?php

$config['db_host'] = 'localhost';
$config['db_user'] = 'root';
$config['db_pass'] = '';
$config['db_name'] = 'travel_blog';

foreach ( $config as $k => $v ) {
	define(strtoupper($k), $v);
}
*/