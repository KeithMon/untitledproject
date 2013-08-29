<h2>Project Navigation (left)</h2>

<ul>
	<li><a href="<?=site_url('project'); echo '/'.$ID; ?>">Overview</a></li>
</ul>

<ul>
	<li><a href="<?=site_url('blueprint'); echo '/'.$ID; ?>">Blueprint</a>
		<ul>
			<li><a href="<?=site_url('blueprint'); echo '/'.$ID; ?>/ux">UX Mapping</a></li>
			<li><a href="<?=site_url('blueprint'); echo '/'.$ID; ?>/ui">UI Flow</a></li>
			<li><a href="<?=site_url('blueprint'); echo '/'.$ID; ?>/stack">Tech Stack</a></li>
			<li><a href="<?=site_url('blueprint'); echo '/'.$ID; ?>/new">New Page</a></li>
		</ul>
	</li>
</ul>
<hr>