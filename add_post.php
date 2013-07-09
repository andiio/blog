
<?php 
	include_once('resources/init.php'); 
	
	if ( isset($_POST['title'], $_POST['contents'], $_POST['category']) ) {
			//var_dump($_POST);
		$errors = array();

		$title 		= trim($_POST['title']);
		$contents 	= trim($_POST['contents']);

		if ( empty($title)) {
			$errors[] = 'You need to supply a title';
		} else if ( strlen($title) > 255 ){
			$errors[] = 'The title can not be longer than 255  characters';	
		}
		if ( empty($contents) ) {
			$errors[] = 'You need to supply some text';
		}
		if ( ! category_exists('id', $_POST['category']) ){
			$errors[] = 'That category does not exist';	
		}

		if ( empty($errors) ) {
			add_post($title, $contents, $_POST['category']);

			$id = mysql_insert_id();

			header("Location: index.php?id={$id}");
			die();
		}
	}
?>
<!DOCTYPE html>
	<html lang="en">
<head>
	<title>Add Post</title>
	<?php include "includes/_head.php" ?>
</head>

<body>
<div class="container">
	<div class="row">
		<div class="span6 offset3">
			<h1>Add Post</h1>
				<hr>
				<?php include "includes/_nav.php" ?>
				<?php
				if ( isset($errors) && ! empty($errors) ) {
					echo '<div class="alert alert-block"><button type="button" class="close" data-dismiss="alert">&times;</button><ul><li>', implode('<li></li>', $errors), '</li></ul></div>';
				}
				?>
				<form action="" method="post">
					<div>
						<label for="title"> Title</label>
						<input type="text" name="title" value="<?php if ( isset($_POST['title']) ) echo $_POST['title']; ?>">
					</div>
					<div>
						<label for="contents"> Contents</label>
						<textarea name="contents" rows="15" cols="50"><?php if ( isset($_POST['contents']) ) echo $_POST['contents']; ?></textarea>
					</div>
					<div>
						<label>Category</label>
						<select name="category">
							<?php 
								foreach ( get_categories() as $category) {
									echo("<option value=\"" .  $category["id"] . "\">{$category['name']}</option>");
								?>
								<!--<option value="<?php echo $category['id']; ?>"> <?php echo $category['name']; ?> </option>-->
							<?php 
								}
							?>
						</select>
					</div>
					<div>
						<input type="submit" value="Add Post" class="btn btn-success">
					</div>
				</form>
		</div>
	</div>
</div>
</body>
</html>