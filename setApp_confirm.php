<?php

$id = $_GET['id'];
$doc = $_POST['doctor'];
$date = Date("Y-m-d");

$conn = mysqli_connect("sql12.freesqldatabase.com", "sql12330999", "GAKQGzSZDi") or die (mysqli_error($conn));
$db = mysqli_select_db($conn, "sql12330999");
$sql = "INSERT INTO tbl_appointment(doc_id, pat_id, app_date)
        VALUES('$doc', '$id', '$date');";
        $q=mysqli_query($conn,$sql) or die (mysqli_error($conn));
        header("location:index.php?page=app");

?>