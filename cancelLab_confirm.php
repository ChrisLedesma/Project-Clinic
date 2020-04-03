<?php
    $id = $_GET['id'];
    $pat = $_GET['pat'];
    $doc = $_GET['doc'];
    $labid = $_GET['labid'];
    
    $conn = mysqli_connect("sql12.freesqldatabase.com", "sql12330999", "GAKQGzSZDi") or die (mysqli_error($conn));
    $db = mysqli_select_db($conn, "sql12330999");
    
$sql="DELETE FROM tbl_labres WHERE res_id = $labid";
$q = mysqli_query($conn,$sql) or die (mysqli_error($conn));
header ("location:index.php?page=checkUp&id=".$id."&pat=".$pat."&doc=".$doc);
?>