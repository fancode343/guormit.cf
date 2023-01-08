<?php

$dbhost = "sql212.freewebhosting.com.bd";
$dbuser = "ieeos_31116650";
$dbpass = "nqmustwl@pussport.com";
$dbname = "ieeos_31116650_Discord_DB";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
