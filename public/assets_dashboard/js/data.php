<?php
$conn = mysqli_connect("localhost", "root", "", "blood_donation");
$row = mysqli_query($conn, "SELECT SUM(d.qte) AS total_quantity, dr.Type_Blood FROM `dones` d JOIN `donors` dr ON d.ID_Donor = dr.id GROUP BY dr.Type_Blood ORDER BY dr.Type_Blood;");
$rows=array();
while ($ro = mysqli_fetch_array($row)) {
    $rows[] = $ro;
}
echo json_encode($rows);
