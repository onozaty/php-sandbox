<?php

function sayHello($name) {
	echo "Hello $name!";
}

function mysqlVersion() {
	$dsn = 'mysql:host=db;dbname=db';
	$db_user = 'user';
	$db_pass = 'password';

	$pdo = new PDO($dsn, $db_user, $db_pass);

	$stmt = $pdo->prepare('SELECT version()');
	$res = $stmt->execute();

	$data = $stmt->fetch();
	return $data[0];
}


?>

<html>
	<head>
		<title>PHP</title>
	</head>
	<body>
		<?php 
		sayHello('devcontainer');
		echo '<p>mysql version: ' . mysqlVersion() . '</p>';
		phpinfo(); 
		?>
	</body>
</html>