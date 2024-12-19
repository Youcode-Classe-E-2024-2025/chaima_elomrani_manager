<?php
$sql = "SELECT utilisateur.id_utilisateur, utilisateur.nom , utilisateur.email , utilisateur.mot_de_passe FROM utilisateur";


$result = $conn->query($sql);

$utilisateur = $result->fetch_all(MYSQLI_ASSOC);

