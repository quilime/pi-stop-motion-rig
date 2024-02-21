<?php

// ini_set('display_errors', '1');
// ini_set('display_startup_errors', '1');
// error_reporting(E_ALL);

$frames = './frames';
$movies = './movies';

function human_filesize($bytes, $decimals = 2) {
	$factor = floor((strlen($bytes) - 1) / 3);
	if ($factor > 0) $sz = 'KMGT';
		return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . " " . @$sz[$factor - 1] . 'B';
}

?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<style>
body {
	font-family: sans-serif;
	padding: 1em;
}

ul, li {
	margin: 0;
	padding: 0;
}

li {
	list-style-type: none;
	font-weight: bold;
}

</style>
</head>
<body>
<h1>AnimatorPi.local</h1>
<ul>
<?php foreach (array_reverse(glob($movies."/*.mp4")) as $filename) { ?>
	<li>
	<video width="320" height="240" controls loop>
	<source src="<?php echo $filename ?>" type="video/mp4">
</video>
<br />
	<a download href="<?php echo $filename ?>">
		<?php echo basename($filename) ?>
	</a> 
	(<?php echo human_filesize(filesize($filename)); ?>)
	</li>
<?php } ?>
</ul>
