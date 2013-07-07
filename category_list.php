<?php include_once('resources/init.php') ?>
<!DOCTYPE html>
	<html lang="en">
<head>
	<title>Category list</title>
	<?php include "includes/_head.php" ?>
</head>


<body>
<h1>Category List</h1>
<hr>

<?php 
foreach  ( get_categories() as $category ) {
		?>
		<p><a href="category.php?id=<?php echo $category['id']; ?>"><?php echo $category['name']; ?></a> - <a href="delete_category.php?id=<?php echo $category['id']; ?>">Delete</a></p>
		<?php
		}
?>

</body>
</html>

