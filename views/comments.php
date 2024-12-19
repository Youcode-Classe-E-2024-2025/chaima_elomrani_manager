<?php 
include("controllers/affichage_commentaire.php");
include("controllers/delete_comments.php");
 ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/table.css">
    <title>Gestion des Commentaires</title>
   
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
            <h2>Gestion des Commentaires</h2>
            <div class="user">Bienvenue, Admin</div>
        </div>

        <!-- Dashboard Widgets -->
        <div class="dashboard">
            <div class="widget">
                <h3>Total des Commentaires</h3>
                <p>120</p>
            </div>
            <div class="widget">
                <h3>Commentaires Approuvés</h3>
                <p>95</p>
            </div>
            <div class="widget">
                <h3>Commentaires en Attente</h3>
                <p>25</p>
            </div>
        </div>

        <!-- Comment Table -->
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Commentaire</th>
                    <th>Options</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($comment as $row){
                ?>
                <tr>
                    <td><?= htmlspecialchars($row['id']); ?></td>
                    <td><?= htmlspecialchars($row['commentaire']); ?></td>
                    <td>
                    <form action="" id="btn-form" method="post"> 
                        <input type="hidden" name="id" value="<?= $row['id']; ?>">
                        <button type="submit" class="btn cancel" name="delete">Supprimer</button>
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
