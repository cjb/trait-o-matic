<?php
// always expired, always modified
header("Expires: Sat, 05 Nov 2005 00:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");

// HTTP/1.1
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);

// HTTP/1.0
header("Pragma: no-cache");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title>Trait-o-matic</title>
	<link rel="stylesheet" media="screen" type="text/css" href="/media/styles.css">
	<link rel="stylesheet" media="screen" type="text/css" href="/media/index.css">
	<!--[if lte IE 7]><link rel="stylesheet" media="screen" type="text/css" href="/media/styles-ie.css"><![endif]-->
	<!--[if lte IE 7]><link rel="stylesheet" media="screen" type="text/css" href="/media/index-ie.css"><![endif]-->
	<!--[if IE 8]><link rel="stylesheet" media="screen" type="text/css" href="/media/styles-ie8.css"><![endif]-->
	<link rel="stylesheet" media="only screen and (max-device-width: 480px)" type="text/css" href="/media/styles-iphone.css">
	<link rel="stylesheet" media="only screen and (max-device-width: 480px)" type="text/css" href="/media/index-iphone.css">
	<meta name="viewport" content="user-scalable=no,width=device-width">
</head>
<body>
	<div id="head"><div>
		<div id="logotype"><a href="/"><img src="/media/logotype.gif" width="158" height="36" alt="Trait-o-matic"></a></div>
		<div id="menu">
			<p>
				<span class="description"><em>See also:</em></span>
				<span class="link"><a href="http://github.com/xwu/trait-o-matic/wikis">Documentation</a></span>
				<span class="bullet"> &nbsp;&bull;&nbsp; </span>
				<span class="link"><a href="http://github.com/xwu/trait-o-matic/tree">Code Repository</a></span>
			</p>
		</div>
	</div></div>
	<div id="subhead"><div>
		<h2><span>Find and classify phenotypic correlations for variations in whole genomes</span></h2>
		<div id="submenu">
			<p>
				<span class="link"><a href="/">View Samples</a></span>
				<span class="bullet"> &nbsp;&bull;&nbsp; </span>
				<span class="link"><a href="/query/">Submit Query</a></span>
				<span class="bullet"> &nbsp;&bull;&nbsp; </span>
				<span class="current">Retrieve Results</span>
			</p>
		</div>
	</div></div>
	<div id="body"><div>
		<div id="main">
			<h3>Transfer to shared storage has been initiated.</h3>
			<p><a href="/results/">Return to your results &rarr;</a></p>
		</div>
	</div></div>
	<div id="foot"><div>
		<div id="copyright">
			<p>
				<span>Copyright &copy; MMIX President and Fellows of Harvard College<br>[{elapsed_time} s]</span>
			</p>
		</div>
	</div></div>
</body>
</html>