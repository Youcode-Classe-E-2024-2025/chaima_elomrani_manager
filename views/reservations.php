<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/table.css">
    <title>Gestion des Réservations Professionnelles</title>
  
</head>

<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h1>Tableau de Bord</h1>
        <a href="index.php?page=home">Salle</a>
        <a href="index.php?page=home">Réservations</a>
        <a href="index.php?page=home">Commentaire</a>
        <a href="index.php?page=">Utilisateur</a>
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
                <tr>
                    <td>1</td>
                    <td>12/06/2024</td>
                    <td>2 heures</td>
                    <td>
                        <button class="btn confirm">Confirmer</button>
                        <button class="btn cancel">Annuler</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>13/06/2024</td>
                    <td>3 heures</td>
                    <td>
                        <button class="btn confirm">Confirmer</button>
                        <button class="btn cancel">Annuler</button>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>14/06/2024</td>
                    <td>1 heure</td>
                    <td>
                        <button class="btn confirm">Confirmer</button>
                        <button class="btn cancel">Annuler</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
