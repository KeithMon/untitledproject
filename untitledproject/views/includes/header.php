<!DOCTYPE html>
<html>
<head>
<title><?=$title?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale = 1.0, user-scalable = no">

</head>
<body>
<h1><a href="<?=site_url(''); ?>">Untitled Project</a></h1>

<h2>Site Navigation (top)</h2>
	<ul> <!-- Site Navigation -->
		<li><a href="<?=site_url('discover/projects'); ?>">Discover Projects</a></li>
		<li><a href="<?=site_url('discover/people'); ?>">Discover People</a></li>
		<li><a href="<?=site_url('project/create'); ?>">Create a Project</a></li>
		<br>
		<li><a href="<?=site_url('dashboard'); ?>">Dashboard</a> (when logged in)</li>
		<li><a href="<?=site_url('login'); ?>">Logout</a> (or login)</li>
	</ul>

<!-- *<a href="<?=site_url('home/notes'); ?>">Notes</a> -->

<hr>