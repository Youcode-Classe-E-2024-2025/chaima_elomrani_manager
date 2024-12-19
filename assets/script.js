const addroom =document.getElementById("addroom");
const roomform =document.getElementById('roomform');
const closeform =document.getElementById('closeform');

roomform.style.display='none';
addroom.addEventListener('click',function(){
    roomform.style.display='block';
});

closeform.addEventListener('click',function(){
roomform.style.display='none';
});