<?php
include("controllers/affichage_rooms.php");
include("controllers/delete_room.php");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/table.css">
    <title>Gestion des Salles de Travail</title>

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
        <button class="btn add" id="addroom">Ajouter une Salle</button>

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
                <?php
                 foreach ($rooms as $row) {
                ?>
                <tr>
                    <td><?= htmlspecialchars($row['id_salle']); ?></td>
                    <td><?= htmlspecialchars($row['nom']); ?></td>
                    <td><?= htmlspecialchars($row['capacite']); ?></td>
                    <td><?= htmlspecialchars($row['equipement']); ?></td>
                    <td >
                        <button class="btn edit">Modifier</button>   
                        <form action="" id="btn-form" method="post"> 
                        <input type="hidden" name="id" value="<?= $row['id_salle']; ?>">
                        <button type="submit" class="btn delete" name="delete">Supprimer</button>
                        </form> 
                        
                    </td>
                </tr>
                <?php
                 }
                ?>
            </tbody>
        </table>
    </div>

     <style>

        #roomform {
            position: fixed;
            top: 0%;
        /* display: flex; */
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            /* justify-content: center;
            align-items: center; */
            z-index: 77700;
        }

        #ajout {
            background: #fff;
            padding: 2rem;
            border-radius: 10px;
            width: 100%;
            max-width: 500px;
            animation: slideIn 0.5s ease;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            
        }

        @keyframes slideIn {
            from {
            transform: translateY(-50px);
            opacity: 0;
            }
            to {
            transform: translateY(0);
            opacity: 1;
            }
        }

        form h2 {
            text-align: center;
            margin-bottom: 1.5rem;
            color: #c44c21;
            font-weight: 600;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: bold;
        }

        .form-group input , select {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
        }

        .form-buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 1rem;
        }

        .btn {
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 20px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .submit-btn {
            background-color: #c64910;
            color: white;
        }

        .submit-btn:hover {
            background-color: #7e2901;
        }

        .close-btn {
            background-color: #c29582;
            color: #333;
        }

        .close-btn:hover {
            background-color: #c86c45;
        }
     </style>

    <div class="" id="roomform">
    <form id="ajout">
      <h2>Sign In</h2>
      <div class="form-group">
        <label for="name">Nom de Salle:</label>
        <input type="text" id="name" name="name" placeholder="salle ?" required>
      </div>

      <div class="form-group">
        <label for="categorie">Catégorie</label>
        <select id="categorie" name="categorie" required>
          <option value="">Choisissez une catégorie</option>
          <option value="Salle de réunion">Salle de réunion</option>
          <option value="Salle de conférence">Salle de conférence</option>
          <option value="Salle de formation">Salle de formation</option>
          <option value="Salle de séminaire">Salle de séminaire</option>
          <option value="Bureau privé">Bureau privé</option>
          <option value="Salle brainstorming">Salle brainstorming</option>
        </select>


        <div class="error" id="categoryError"></div>
      </div>

      <div class="form-group">
        <label for="Capacité">Capacité</label>
        <input type="Capacité" id="Capacité" name="Capacité" placeholder="Capacité" required>
      </div>


      <div class="form-group">
        <label for="equipement">Equipement:</label>
        <input type="equipement" id="equipement" name="equipement" placeholder="equipement" required>
      </div>
      <div class="form-buttons">
        <button type="submit" class="btn submit-btn">Sign In</button>
        <button type="button" class="btn close-btn" id="closeform">Close</button>
      </div>
    </form>
  </div>



  <script src="assets/script.js"></script>
</body>
</html>
