<?php 
	include('../languages/lang_config.php');
	include('config/apply.php');
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel - <?php echo $lang['title'] ?></title>

	<meta charset="utf-8">
	<meta title="description" content="<?php echo $lang['description'] ?>">
	<meta title="keywords" content="<?php echo $lang['keywords'] ?>">
	<meta title="Author" content="<?php echo $lang['author'] ?>">

	<link rel="stylesheet" type="text/css" href="<?php echo SITEURL; ?>assets/css/style.css">
</head>

<body>
	<header class="header">
		<div class="wrapper">
			<div class="logo">
				<h1><?php echo $lang['admin_logo'] ?></h1>
			</div>

			<div class="menu">
				<ul>
					<li>
						<a href="<?php echo SITEURL; ?>/admin"><?php echo $lang['home'] ?></a>
					</li>
					<li>
						<a href="#"><?php echo $lang['categories'] ?></a>
					</li>
					<li>
						<a href="#"><?php echo $lang['posts'] ?></a>
					</li>
					<li>
						<a href="#"><?php echo $lang['logout'] ?></a>
					</li>

					<li class="right">
						<a href="<?php echo SITEURL; ?>admin/index.php?lang=cn"><?php echo $lang['chinese'] ?></a>
					</li>
					<li class="right">
						<a href="<?php echo SITEURL; ?>admin/index.php?lang=np"><?php echo $lang['nepali'] ?></a>
					</li>
					<li class="right">
						<a href="<?php echo SITEURL; ?>admin/index.php?lang=en"><?php echo $lang['english'] ?></a>
					</li>
				</ul>
			</div>

			<div class="clearfix"></div>
		</div>
	</header>

	<div class="main">

		<div class="body">
			<h2>Main Title</h2>
			<p>
				Everything Goes Here
			</p>
		</div>

	</div>

	<footer class="footer">
		<div class="wrapper">
			<p>
				<?php echo $lang['copy_right'] ?>
			</p>
			<p>
				<?php echo $lang['developed_by'] ?> - <a href="https://www.vijaythapa.com/" title="Web Developer in Nepal"><?php echo $lang['author'] ?></a>
			</p>
		</div>
	</footer>
</body>
</html>