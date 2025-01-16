<?php

include("dbconnection.php");
include("inputform.php");

$SN=$_POST['sn'];
$Name=$_POST['name'];
$Faculty=$_POST['faculty'];
$Semester=$_POST['semester'];
$Project=$_POST['project'];
$OB=$_POST['ob'];
$DAM=$_POST['dam'];
$DBMS=$_POST['dbms'];
$Account=$_POST['account'];
$WEB=$_POST['web'];

$sql="INSERT INTO record(sn,name,faculty,semester,project,ob,dam,dbms,account,web)VALUES('$SN','$Name','$Faculty','$Semester','$Project','$OB','$DAM','$DBMS','$Account','$WEB')";
if ($conn->query($sql)===TRUE){
	echo"new record created successfully";
}else{
	echo "Error:". $sql."<br>".$conn->error;
}

$conn->close();
?>
