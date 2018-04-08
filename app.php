<?php


session_start();
$dbname = 'organizeit';
$username = "Username";
$password = "password";
$db = new PDO("mysql:host=localhost;dbname=$dbname;charset=utf8", $username, $password);