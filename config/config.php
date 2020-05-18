<?php
try{
	define('DB_NAME','classificados');
	define('DB_HOST', 'localhost');
	define('DB_USER','root1');
	define('DB_PASS','senha10');
} catch (PDOException $e) {
	echo "Erro com banco de dados". $e->getMessage();
}
