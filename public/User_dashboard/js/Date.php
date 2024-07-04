<?php
$conn = mysqli_connect("localhost", "root", "", "blood_donation");
$data = json_decode(file_get_contents("php://input"), true);
$Year = $data['key1'];

$rowS = mysqli_query($conn, "select DISTINCT MONTH(Date_D) AS month , COUNT(dr.sex), dr.sex FROM dones d JOIN donors dr on d.ID_Donor = dr.id  WHERE YEAR(Date_D)=$Year GROUP by month,dr.sex ORDER BY month");
$date=array();
while ($rowD = mysqli_fetch_array($rowS)) {
    $date[] = $rowD;
}
echo json_encode($date);
