<?php
include("controllers/affichage_utilisateur.php");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/table.css">
    <title>Gestion des Utilisateurs</title>

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
            <h2>Gestion des Utilisateurs</h2>
            <div class="user">Bienvenue, Admin</div>
        </div>

        <!-- Dashboard Widgets -->
        <div class="dashboard">
            <div class="widget">
                <h3>Total des Utilisateurs</h3>
                <p>120</p>
            </div>
            <div class="widget">
                <h3>Utilisateurs Actifs</h3>
                <p>95</p>
            </div>
            <div class="widget">
                <h3>Utilisateurs Bloqués</h3>
                <p>25</p>
            </div>
        </div>

        <!-- User Table -->
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Mot de Passe</th>
                    <th>Options</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                foreach($utilisateur as $row){
                ?>
                <tr>
                    <td><?= htmlspecialchars($row['id_utilisateur']); ?></td>
                    <td><?= htmlspecialchars($row['nom']); ?></td>
                    <td><?= htmlspecialchars($row['email']); ?></td>
                    <td><?= htmlspecialchars($row['mot_de_passe']); ?></td>
                    <td>
                        <button class="btn authorize">Autoriser</button>
                        <button class="btn block">Bloquer</button>
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
