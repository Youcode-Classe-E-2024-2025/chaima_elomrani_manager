<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/table.css">
    <title>Gestion des Commentaires</title>
   
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h1>Tableau de Bord</h1>
        <a href="rooms_management.php">Salle</a>
        <a href="reservations.php">Réservations</a>
        <a href="comments.php">Commentaire</a>
        <a href="users_management.php">Utilisateur</a>
        <a href="../index.php">Déconnexion</a>
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
                <tr>
                    <td>1</td>
                    <td>Super service, merci beaucoup !</td>
                    <td>
                        <button class="btn delete">Supprimer</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Je recommande vivement cette plateforme.</td>
                    <td>
                        <button class="btn delete">Supprimer</button>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Problème rencontré avec le service client.</td>
                    <td>
                        <button class="btn delete">Supprimer</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
