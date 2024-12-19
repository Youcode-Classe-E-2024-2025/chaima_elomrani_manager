<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/table.css">
    <title>Gestion des Utilisateurs</title>

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
                <tr>
                    <td>1</td>
                    <td>Jean Dupont</td>
                    <td>jean.dupont@example.com</td>
                    <td>******</td>
                    <td>
                        <button class="btn authorize">Autoriser</button>
                        <button class="btn block">Bloquer</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Marie Curie</td>
                    <td>marie.curie@example.com</td>
                    <td>******</td>
                    <td>
                        <button class="btn authorize">Autoriser</button>
                        <button class="btn block">Bloquer</button>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Albert Einstein</td>
                    <td>albert.einstein@example.com</td>
                    <td>******</td>
                    <td>
                        <button class="btn authorize">Autoriser</button>
                        <button class="btn block">Bloquer</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
