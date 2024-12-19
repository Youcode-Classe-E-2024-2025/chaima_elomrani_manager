<?php
$sql = "SELECT salle.id_salle ,salle.nom ,salle.capacite ,salle.equipement  FROM salle ";


$result = $conn->query($sql);

$rooms = $result->fetch_all(MYSQLI_ASSOC);

