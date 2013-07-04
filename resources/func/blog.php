
<?php


function add_post($title, $contents, $category) {

}

function edit_post($id, $title, $contents, $category) {

}

function add_category($name) {
	$name = mysql_real_escape_string($name);

	mysql_query("INSERT INTO categories SET name = '{$name}'");
}

function delete($field, $id) {

}

function get_posts($id = null, $cat_id = null) {

}

function get_categories($id = null){

}

function category_exists($name) {
	$name = mysql_real_escape_string($name);

	$query = mysql_query("SELECT COUNT(1) FROM categories WHERE name = '{$name}'");

	echo mysql_error();

	return ( mysql_result($query, 0) == '0' ) ? false : true; 
}

