<?php
$host = 'ec2-54-163-254-76.compute-1.amazonaws.com';
$dbname = 'd8qmelpq6un84m';
$user = 'zmixijgozoxtef';
$pass = 'a2bca901370482969144b70285514678e1e6bf5eb8e8a7c17c79916d51a0c152';
$connection = new PDO("pgsql:host=$host;dbname=$dbname", $user, $pass);
$result = $connection->query("SELECT * FROM m_user");
if($result !== null) {
echo $result->rowCount();
}