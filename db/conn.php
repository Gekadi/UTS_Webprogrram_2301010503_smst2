<?php
// variabel koneksi database
// $db = mysqli_connect("localhost", "root", "", "latihanweb");

// ini untuk test jika tidak terkoneksi ke databae
// if ($db->connect_errno) {
//     die("Failed to connect to MySQL: " . $mysqli->connect_error);
// }

// apa ni
return mysqli_connect("localhost", "root", "", "latihanweb");

