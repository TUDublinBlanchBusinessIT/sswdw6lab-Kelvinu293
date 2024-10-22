<?php

$vDate = $_POST['visitDate'];
echo $vDate;
include("dbcon.php")

$sq1 = "Insert into visit(visit_date,visit_time,doctor_id,patient_id,cost) values('2004-02-20','15:00','3','1',40)";
mysqli_query()




?>