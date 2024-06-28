<?php
$con=mysqli_connect("Localhost", "root", "", "studentrecorddb");
// $con = mysqli_connect("sql.freedb.tech", "freedb_ajmalbuv",$password, "freedb_studentrecorddb");

if (mysqli_connect_errno()) {
  echo "Connection Fail" . mysqli_connect_error();
}

?>