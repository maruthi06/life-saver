<!--
/**
* Copyright 2015 IBM Corp. All Rights Reserved.
*
* Licensed under the Apache License, Version 2.0 (the “License”);
* you may not use this file except in compliance with the License.
* You may obtain a copy of the License at
*
* https://www.apache.org/licenses/LICENSE-2.0
*
* Unless required by applicable law or agreed to in writing, software
* distributed under the License is distributed on an “AS IS” BASIS,
* WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
* See the License for the specific language governing permissions and
* limitations under the License.
*/
-->

<?php include 'condb.php';?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP MySQL Sample Application</title>
    <link rel="stylesheet" href="style.css" />
</head>

<?php



echo "Executing CREATE TABLE Query...<br>";
$sqlTable="
CREATE TABLE IF NOT EXISTS `sign_up` (
  `name` varchar(30) NOT NULL,
  `mob` bigint(13) NOT NULL,
  `email` varchar(40) NOT NULL,
  `cities` varchar(80) NOT NULL,
  `gender` text NOT NULL,
  `bloodgroup` varchar(40) NOT NULL DEFAULT 'BloodBank',
  `age` int(3) NOT NULL,
  `weight` int(3) NOT NULL,
  `password` varchar(20) NOT NULL,
  `confirm` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `available` varchar(40) DEFAULT NULL,
  PRIMARY KEY `mob` (`mob`),
  PRIMARY KEY `email` (`email`)
) 
 DEFAULT CHARSET=utf8
";

if ($con->query($sqlTable)) {
    echo "Table(sign_up) created successfully!<br>";
} else {
	echo "ERROR: Cannot create table. "  . mysqli_error();
	die();
}

$sql="CREATE TABLE IF NOT EXISTS `admin` (
  `email` varchar(55) NOT NULL,
  `password` varchar(40) NOT NULL,
  `confirm` varchar(40) NOT NULL
)DEFAULT CHARSET=utf8 ";

if ($con->query($sql)) {
    echo "Table(admin) created successfully!<br>";
} else {
	echo "ERROR: Cannot create table. "  . mysqli_error();
	die();
}

?>


<button class = "mybutton" onclick="window.location = 'index.php';">Back</button>

</html>