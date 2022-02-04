<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "netmatters_news";

$connection = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

$newsQuery = "SELECT * FROM news_entries ORDER BY date_published DESC LIMIT 3;";
$newsResult = mysqli_query($connection, $newsQuery);
