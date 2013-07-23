<?php 
 include_once('resources/init.php');

 $posts = get_posts(null, $_GET['id']);

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
		<small> Posted on <?php echo date('d-m-Y h:i:s', strtotime($posts['date_posted'])); ?>
			in <a href="category.php?id=<?php echo $post['category_id']; ?>"><?php echo $post['name'];?></a>
		</small>
		<div><?php echo nl2br($post['contents']);?></div>
		
		<div>
			<ul>
				<li><a href="delete_post.php?id=<?php echo $post["post_id"]; ?>"> Delete this post</a></li>
				<li><a href="edit_post.php?id=<?php echo $post['post_id']; ?>"> Edit post</a></li>
			</ul>
		</div>
		

		<?php
	}
?>
</div>
</div>
</body>
</html>