<?php 
  include('controllers/affichage_rooms.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Available Rooms</title>
  <link rel="stylesheet" href="assets/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
  <style>
    /* Conteneur Overlay */
    .details-overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.8); 
  display: flex;
  justify-content: center;
  align-items: center;
  z-index: 1000;
  transition: opacity 0.3s ease;
}

.details-overlay.hidden {
  opacity: 0;
  visibility: hidden;
}

.details-overlay:not(.hidden) {
  opacity: 1;
  visibility: visible;
}

#detailsCard {
  max-width: 500px; /* Augmenter légèrement la taille pour un look professionnel */
  background-color: #fff; /* Fond blanc pour contraster avec l'overlay */
  border-radius: 15px;
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.6); /* Ombre pour donner de la profondeur */
  padding: 2rem;
  animation: scaleIn 0.4s ease; /* Animation fluide à l'ouverture */
}

#detailsCard h1 {
  font-size: 2rem;
  color: #ff6600; /* Orange vif pour les titres */
  text-align: center;
  margin-bottom: 1rem;
  font-family: 'Arial', sans-serif;
}

#detailsCard p {
  font-size: 1.2rem;
  color: #333; /* Texte noir/gris foncé */
  line-height: 1.5;
  font-family: 'Verdana', sans-serif;
  margin-bottom: 1rem;
}

#detailsCard strong {
  color: #ff6600; /* Orange pour les éléments clés */
}

.reservebtn {
  display: block;
  margin: 1.5rem auto 0;
  background-color: #ff6600; /* Bouton orange */
  color: #fff; /* Texte blanc */
  border: none;
  border-radius: 8px;
  padding: 0.8rem 1.5rem;
  font-size: 1rem;
  cursor: pointer;
  font-family: 'Arial', sans-serif;
  transition: background-color 0.3s ease, transform 0.3s ease;
}

.reservebtn:hover {
  background-color: #cc5200; /* Orange plus sombre au survol */
  transform: scale(1.05); /* Légère mise en relief */
}

/* Animation d'apparition */
@keyframes scaleIn {
  from {
    transform: scale(0.9);
    opacity: 0;
  }
  to {
    transform: scale(1);
    opacity: 1;
  }
}

  </style>
</head>

<body>
  <!-- Header Section -->
  <header>
    <div class="logo">WorkSpace</div>
    <nav>
      <a href="index.php?page=home" class="btn">Home</a>
      <button class="btn">Sign In</button>
      <button class="btn">Login</button>
    </nav>
  </header>

  <!-- Page Title -->
  <section class="page-title">
    <h1>Discover Our Rooms</h1>
    <p>Choose the perfect space for your meetings and work sessions.</p>
  </section>

  <!-- Cards Section -->
  <section class="cards-container">
   <?php
    foreach($rooms as $row){
   ?>
  <!-- Card 1 -->
    <div class="card">

      <img src="../images/Salle de visioconférence (2).jpeg" alt="Room 1">
      <div class="card-content">
       <h3><?= htmlspecialchars($row['nom']); ?></h3>
       <p>Capacity: <?= htmlspecialchars($row['capacite']); ?></p>
       <p>Equipement: <?= htmlspecialchars($row['equipement']); ?></p>
       <button class="btn-card">View Details</button>
   </div>

   </div>
     <?php
   }
  ?>
  
 
  </section>
 <!-- #region -->

 <div class="details-overlay hidden" id="detailsOverlay">
  <div class="detailscard" id="detailsCard">
    <h1>Détails de la Salle</h1>
    <p><strong>Nom de la salle :</strong> <span id="roomName">Nom</span></p>
    <p><strong>Capacité :</strong> <span id="roomCapacity">Capacité</span></p>
    <p><strong>Équipements :</strong> <span id="roomEquipment">Équipements</span></p>
    <button class="reservebtn" id="closeDetails">Fermer</button>
  </div>
</div>
<!-- <script>
  // Données fictives pour chaque salle
  const roomData = [
    {
      name: "Modern Meeting Room",
      capacity: "10 personnes",
      equipment: "Projecteur, Wi-Fi, Tableau blanc"
    },
    {
      name: "Shared Workspace",
      capacity: "20 personnes",
      equipment: "Wi-Fi, Éclairage ergonomique"
    },
    {
      name: "Private Office",
      capacity: "4 personnes",
      equipment: "Bureau privé, Wi-Fi"
    },
    
  ];

  const detailsOverlay = document.getElementById("detailsOverlay");
  const roomName = document.getElementById("roomName");
  const roomCapacity = document.getElementById("roomCapacity");
  const roomEquipment = document.getElementById("roomEquipment");
  const closeDetails = document.getElementById("closeDetails");


  const detailButtons = document.querySelectorAll(".btn-card");
  detailButtons.forEach((button, index) => {
    button.addEventListener("click", () => {
      
      roomName.textContent = roomData[index].name;
      roomCapacity.textContent = roomData[index].capacity;
      roomEquipment.textContent = roomData[index].equipment;

   
      detailsOverlay.classList.remove("hidden");
    });
  });

  // Cacher la carte des détails
  closeDetails.addEventListener("click", () => {
    detailsOverlay.classList.add("hidden");
  });

  // Optionnel : Fermer la carte lorsqu'on clique en dehors
  detailsOverlay.addEventListener("click", (e) => {
    if (e.target === detailsOverlay) {
      detailsOverlay.classList.add("hidden");
    }
  });
</script> -->



<script src="../assets/script.js"></script>

</body>

</html>