<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title><?php echo isset($title) ? $title : ''; ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo link_with_mtime("/data/default.css"); ?>" media="screen" />
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="robots" content="noindex,nofollow" />
</head>

<body>
	<div class="top">
		<?php echo anchor('file/index', 'New'); ?> |
		<?php echo anchor('file/upload_history', 'History'); ?> |
		<?php echo anchor('user/invite', 'Invite'); ?>

		<div class="right">
			<?php if(isset($username) && $username) { ?>
				<?=anchor("user/logout", "Logout"); ?>
			<?php } else { ?>
				<?=anchor("user/login", "Login"); ?>
			<?php } ?>
		</div>
	</div>

	<div class="content">
