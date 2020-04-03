<?php

$c_id=$_GET['id'];
$conn = mysqli_connect("sql12.freesqldatabase.com", "sql12330999", "GAKQGzSZDi") or die (mysqli_error($conn));
$db = mysqli_select_db($conn, "sql12330999");

$sql="DELETE from tbl_patient WHERE pat_id = $c_id";
$q = mysqli_query($conn, $sql) or die (mysqli_error($conn));

header("location: index.php?page=pat");


?>