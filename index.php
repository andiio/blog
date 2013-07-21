<?php include_once('resources/init.php') 


$posts = get_posts();


?>

<!DOCTYPE html>
	<html lang="en">

<head>
	<title>Hello world blog</title>
	<?php include "includes/_head.php" ?>
</head>

<body>
<div class="container">
	<div class="row">
		<div class="span6 offset3">
			<h1>Hello world blog</h1>
			<br>
			<?php include "includes/_nav.php" ?>
			<hr>
			<br>



<?php
	foreach ( $posts as $post ) {
		if ( ! category_exists('name', $post ['name'] ) ){
			$post['name'] = 'Uncategorised';
		}
		?>

		<h2><a href="index.php?id=<?php echo $post['post_id']; ?>"><?php echo $post['title']; ?></a></h2>

		<?php
	}
?>
</div>
</div>
</div>
</body>
</html>