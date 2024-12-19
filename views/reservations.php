<?php
include("controllers/affichage_reservations.php");
include("controllers/delete_reservations.php");

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/table.css">
    <title>Gestion des Réservations Professionnelles</title>


</head>

<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h1>Tableau de Bord</h1>
        <a href="index.php?page=rooms_management">Salle</a>
        <a href="index.php?page=reservations">Réservations</a>
        <a href="index.php?page=comments">Commentaire</a>
        <a href="index.php?page=users_management">Utilisateur</a>
        <a href="index.php?page=home">Déconnexion</a>
    </div>

    <!-- Main Content -->
    <div class="content">
        <div class="header">
            <h2>Gestion des Réservations</h2>
            <div class="user">Bienvenue, Admin</div>
        </div>

        <!-- Dashboard Widgets -->
        <div class="dashboard">
            <div class="widget">
                <h3>Total des Réservations</h3>
                <p>45</p>
            </div>
            <div class="widget">
                <h3>Confirmées</h3>
                <p>30</p>
            </div>
            <div class="widget">
                <h3>En Attente</h3>
                <p>15</p>
            </div>
        </div>

        <!-- Reservation Table -->
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Date de Réservation</th>
                    <th>Durée</th>
                    <th>Options</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                 foreach($reservations as $row) {
                ?>
                <tr>
                    <td><?= htmlspecialchars($row['id']); ?></td>
                    <td><?= htmlspecialchars($row['durée']); ?></td>
                    <td><?= htmlspecialchars($row['date_reservation']); ?></td>
                    <td id="options">
                        <button class="btn confirm">Confirmer</button>
                        <form action="" id="btn-form" method="post"> 
                        <input type="hidden" name="id" value="<?= $row['id']; ?>">
                        <button type="submit" class="btn cancel" name="delete">Annuler</button>
                        </form> 
                        
                    </td>
                </tr>
               <?php
                 }
               ?>
            </tbody>
        </table>
    </div>
</body>
</html>
