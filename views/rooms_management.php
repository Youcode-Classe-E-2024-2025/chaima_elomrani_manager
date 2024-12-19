<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/table.css">
    <title>Gestion des Salles de Travail</title>

</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h1>Tableau de Bord</h1>
        <a href="rooms_management.php">Salle</a>
        <a href="reservations.php">Réservations</a>
        <a href="comments.php">Commentaire</a>
        <a href="users_management.php">Utilisateur</a>
        <a href="home.php">Déconnexion</a>
    </div>


    <!-- Main Content -->
    <div class="content">
        <div class="header">
            <h2>Gestion des Salles de Travail</h2>
            <div class="user">Bienvenue, Admin</div>
        </div>

        <!-- Dashboard Widgets -->
        <div class="dashboard">
            <div class="widget">
                <h3>Total des Salles</h3>
                <p>15</p>
            </div>
            <div class="widget">
                <h3>Salles Disponibles</h3>
                <p>12</p>
            </div>
            <div class="widget">
                <h3>Salles Réservées</h3>
                <p>3</p>
            </div>
        </div>

        <!-- Add Room Button -->
        <button class="btn add">Ajouter une Salle</button>

        <!-- Room Table -->
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Capacité</th>
                    <th>Équipement</th>
                    <th>Options</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Salle A</td>
                    <td>25</td>
                    <td>Projecteur, Wi-Fi</td>
                    <td>
                        <button class="btn edit">Modifier</button>
                        <button class="btn delete">Supprimer</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Salle B</td>
                    <td>15</td>
                    <td>Tableau Blanc, Wi-Fi</td>
                    <td>
                        <button class="btn edit">Modifier</button>
                        <button class="btn delete">Supprimer</button>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Salle C</td>
                    <td>10</td>
                    <td>Wi-Fi</td>
                    <td>
                        <button class="btn edit">Modifier</button>
                        <button class="btn delete">Supprimer</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
