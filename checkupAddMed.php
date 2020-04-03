<?php
    $id = $_GET['id'];
    $pat = $_GET['pat'];
    $doc = $_GET['doc'];
    $meds = $_POST['meds'];
    $medic = $_POST['medication'];
    $date = Date("Y-m-d");

    $conn = mysqli_connect("sql12.freesqldatabase.com", "sql12330999", "GAKQGzSZDi") or die (mysqli_error($conn));
    $db = mysqli_select_db($conn, "sql12330999");

    $sql="INSERT INTO tbl_medication(medic_desc, med_id, app_id, medic_date)
    VALUES('$medic', '$meds','$id', '$date')";
    $q=mysqli_query($conn,$sql) or die (mysqli_error($conn));
    header("location:index.php?page=checkUp&id=".$id."&pat=".$pat."&doc=".$doc);
?>