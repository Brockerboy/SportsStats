<?php

function generatePageHTML($title, $body, $stylesheet) {
	$html = <<<EOT
<!DOCTYPE html>
<html>
<head>
<title>$title</title>
<link rel="stylesheet" type="text/css" href="$stylesheet">
</head>
<body>
$body
</body>
</html>
EOT;

	return $html;
}

?>