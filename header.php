<?php
function showHeaderBar($tag) {
	// print "tag [" . $tag . "]";
	?>

<div class="navbar navbar-inverse navbar-nomargin navbar-squarebottom">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse"
			data-target=".navbar-inverse-collapse">
			<span class="icon-bar"></span> <span class="icon-bar"></span> <span
				class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="index.php"><img
			src="image/dmslogo-oval-trans-48.png" style="padding-right: 5px;" />
			Music in Dollar </a>
	</div>
	<div class="navbar-collapse collapse navbar-inverse-collapse">
		<ul class="nav navbar-nav">
			<li class="<?php if( $tag == "whatson" ) echo "active";?>"><a
				href="index.php#WhatsOn">What&#39;s on</a></li>
			<li class="<?php if( $tag == "about" ) echo "active";?>"><a
				href="about.php">About</a></li>
			<li class="dropdown <?php if( $tag == "archive" ) echo "active";?>"><a
				href="archive.php" class="dropdown-toggle" data-toggle="dropdown">Archive
					<b class="caret"></b>
			</a>
				<ul class="dropdown-menu">
					<li class="<?php if( $tag == "archive1314" ) echo "active";?>"><a
						href="archive1314.php">Season 2013-14</a></li>
					<li class="<?php if( $tag == "archive1213" ) echo "active";?>"><a
						href="archive1213.php">Season 2012-13</a></li>
				</ul></li>
			<li class="dropdown <?php if( $tag == "blogs" ) echo "active";?>"><a
				href="blogs.php" class="dropdown-toggle" data-toggle="dropdown">Blogs
					<b class="caret"></b>
			</a>
				<ul class="dropdown-menu">
					<li class="disabled <?php if( $tag == "blog1" ) echo "active";?>"><a
						href="#">Concert Reviews</a></li>
					<li class="disabled <?php if( $tag == "blog2" ) echo "active";?>"><a
						href="#">Ochil echoes</a></li>
				</ul></li>
			<li class="<?php if( $tag == "contact" ) echo "active";?>"><a
				href="contact.php">Contact</a></li>
		</ul>

		<a class="btn btn-small btn-facebook navbar-right navbar-centred"
			href="https://www.facebook.com/MusicInDollar" target="_blank"> <i
			class="fa fa-facebook"></i>
		</a>
	</div>
</div>

<?php
}

function htmlHead($title) {
?>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $title;?></title>
<meta name="Description" content="Promoting and encouraging music in Dollar, Scotland." />

<link rel="stylesheet" type="text/css"
	href="assets/components/themebootstrap/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="css/dms.css" />
<link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
<link rel="stylesheet" type="text/css" href="css/social-buttons.css" />

<script src="assets/components/jquery/jquery-1.11.1.min.js"></script>
<script src="assets/components/themebootstrap/js/bootstrap.min.js"></script>
<script src="js/dms.js"></script>
</head>
<?php 
}
?>