<?php
$sql = "SELECT reservation.id , reservation.durée , reservation.date_reservation FROM reservation";


$result = $conn->query($sql);

$reservations = $result->fetch_all(MYSQLI_ASSOC);

