// const addroom =document.getElementById("addroom");
// const roomform =document.getElementById('roomform');
// const closeform =document.getElementById('closeform');

// roomform.style.display='none';
// addroom.addEventListener('click',function(){
//     roomform.style.display='block';
// });

// closeform.addEventListener('click',function(){
// roomform.style.display='none';
// });

// ************************ details ********************************
const detailsOverlay = document.getElementById("detailsOverlay");
const roomName = document.getElementById("roomName");
const roomCapacity = document.getElementById("roomCapacity");
const roomEquipment = document.getElementById("roomEquipment");
const closeDetails = document.getElementById("closeDetails");

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
    {
      name: "Private Office",
      capacity: "4 personnes",
      equipment: "Bureau privé, Wi-Fi"
    },
    {
      name: "Private Office",
      capacity: "4 personnes",
      equipment: "Bureau privé, Wi-Fi"
    },
    {
      name: "Private Office",
      capacity: "4 personnes",
      equipment: "Bureau privé, Wi-Fi"
    },
    {
      name: "Private Office",
      capacity: "4 personnes",
      equipment: "Bureau privé, Wi-Fi"
    },
    {
      name: "Private Office",
      capacity: "4 personnes",
      equipment: "Bureau privé, Wi-Fi"
    },
    // Ajoutez les autres salles ici
  ];

const detailsbtn = document.querySelectorAll('.btn-card');

detailsbtn.forEach((btn, index)=> {
   
    btn.addEventListener('click',function(){
        roomName.textContent = roomData[index].name;
        roomCapacity.textContent = roomData[index].capacity;
        roomEquipment.textContent = roomData[index].equipment;
        detailsOverlay.classList.remove("hidden");
    });
});

closeDetails.addEventListener('click',function(){
    detailsOverlay.classList.add("hidden");
    console.log('test');
});

detailsOverlay.addEventListener("click", (e) => {
    if (e.target === detailsOverlay) {
      detailsOverlay.classList.add("hidden");
    }
  });