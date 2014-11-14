<!DOCTYPE html>
<html>
<head>
<?php 
	require "header.php";
	$title = "Music in Dollar Blogs";
	htmlHead($title);
?>

<body>

	<div class="container-fluid">
<?php
	showHeaderBar("blogs");
?>
		<div class="row page-header">
			<div class="col-sm-12">
				<h2><?php echo $title;?></h2>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<h4>Select one of the blogs:</h4>
				<ul class="list-group">
					<li class="row list-group-item"><a href="blogreviews.html"
						onclick="alert('blogs coming soon');return false;">Concert Reviews</a></li>
					<li class="row list-group-item"><a href="blogoe.html"
						onclick="alert('blogs coming soon');return false;">Ochil Echoes</a></li>
				</ul>
			</div>
		</div>

<?php require "footer.php";?>

	</div>


</body>
</html>

