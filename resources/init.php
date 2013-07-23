<?php

// Get the database details

include_once('config.php');

// Connect to Database

mysql_connect('localhost', 'root', 'root'); 
mysql_select_db('blog');

include_once('func/blog.php');

// Ref:  phpacademy - PHP Tutorials: Creating a Blog (Part 3/11) - http://www.youtube.com/watch?v=EtcPEjUIt_8

?>