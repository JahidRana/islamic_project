<?php

$host = "sql204.ezyro.com";
$dbUsername = "ezyro_28784300";
$dbPwd = "wmd2r3sg";
$dbName = "ezyro_28784300_islamer_alo";

$connect = mysqli_connect($host, $dbUsername, $dbPwd, $dbName);


if (!$connect) {
    die("Not connected" . mysqli_error());
}
