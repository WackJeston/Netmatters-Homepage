<?php

// local
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "netmatters_site";

// cPanel
// $dbServername = "localhost:3306";
// $dbUsername = "jackwest_1";
// $dbPassword = "HashBrowns123";
// $dbName = "jackwest_netmatters-site";

$connection = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

$newsQuery = "SELECT * FROM news_entries ORDER BY date_published DESC LIMIT 3;";
$newsResult = mysqli_query($connection, $newsQuery);
