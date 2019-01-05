<?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['TenLop'])){
        // removes backslashes
	$TenLop = stripslashes($_REQUEST['TenLop']);
        //escapes special characters in a string
	$TenLop = mysqli_real_escape_string($con,$TenLop); 
	$TenLopTruong = stripslashes($_REQUEST['TenLopTruong']);
	$TenLopTruong = mysqli_real_escape_string($con,$TenLopTruong);
    $SDTLT = stripslashes($_REQUEST['SDTLT']);
    $SDTLT = mysqli_real_escape_string($con,$SDTLT);
    $TenBiThu = stripslashes($_REQUEST['TenBiThu']);
    $TenBiThu = mysqli_real_escape_string($con,$TenBiThu);
    $SDTBT = stripslashes($_REQUEST['SDTBT']);
    $SDTBT = mysqli_real_escape_string($con,$SDTBT);
    $NgayChup = stripslashes($_REQUEST['NgayChup']);
    $NgayChup = mysqli_real_escape_string($con,$NgayChup);
    $Email = stripslashes($_REQUEST['Email']);
    $Email = mysqli_real_escape_string($con,$Email);
    $GoiChupKY = stripslashes($_REQUEST['GoiChupKY']);
    $GoiChupKY = mysqli_real_escape_string($con,$GoiChupKY);
    $Note = stripslashes($_REQUEST['Note']);
    $Note = mysqli_real_escape_string($con,$Note);

        $query = "INSERT into `khkyyeu` (TenLop, TenLopTruong, SDTLT, TenBiThu, SDTBT, NgayChup, Email, GoiChupKY, Note)
VALUES ('$TenLop', '$TenLopTruong', '$SDTLT', '$TenBiThu', '$SDTBT', '$NgayChup', '$Email','$GoiChupKY', '$Note')";
        $result = mysqli_query($con,$query);
    }
?>