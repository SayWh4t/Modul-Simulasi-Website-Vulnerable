<?php
try {
	$konek = new PDO("mysql:host=localhost; dbname=sesuatu", "root", "");
}
catch (PDOException $error){
	$error->getMessage();
}
?>