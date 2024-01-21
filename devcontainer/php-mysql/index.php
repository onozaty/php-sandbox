<?php

function sayHello($name) {
	echo "Hello $name!";
}

?>

<html>
	<head>
		<title>PHP</title>
	</head>
	<body>
		<?php 
		sayHello('devcontainer');
		phpinfo(); 
		?>
	</body>
</html>