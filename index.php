<?php include_once('resources/init.php') 

?>
<!DOCTYPE html>
	<html lang="en">

<head>
	<title>Hello world blog</title>
	<?php include "includes/_head.php" ?>
</head>


<body>
		<h1>Hello World Blog</h1>
		<hr>

<nav>
	<ul class="btn-group">
		<li class="btn"><a href="index.php"> Index </a></li>
		<li class="btn"><a href="index.php"> Add post </a></li>
		<li class="btn"><a href="index.php"> Add Category </a></li>
		<li class="btn"><a href="index.php"> Catergory </a></li>
	</ul>
</nav>


<?php
	foreach ($posts as $post) {
		if (! category_exists('name',$post['name']) ){
			$post['name'] = 'Uncategrized';
		}
		?>

		<h2><a href="index.php?id=<?php echo $post['post_id']; ?>"><?php echo $post['title'];?></a></h2>

		<?php
	}
?>

</body>
</html>