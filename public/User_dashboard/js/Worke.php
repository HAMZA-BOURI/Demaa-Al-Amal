<?php
$data = json_decode(file_get_contents("php://input"), true);
$ID = $data['key1'];
$conn = mysqli_connect("localhost", "root", "", "blood_donation");
$row = mysqli_query($conn, "select * from `workers` where id= " . $ID . ";");

while ($ro = mysqli_fetch_array($row)) {
    echo json_encode($ro);
}

