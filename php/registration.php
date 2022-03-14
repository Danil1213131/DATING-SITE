<?php
session_start();
$name = $_POST["name"];
$login = $_POST["login"];
$email = $_POST["email"];
$password = $_POST["password"];

$conect = new mysqli("localhost", "root", "", "half");
$qerti = "INSERT INTO `user`(`fuo`, `login`, `email`, `password`) VALUES ('$name','$login','$email','$password')";
$res = $conect->query($qerti);
