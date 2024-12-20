const signInBtn = document.getElementById("signInBtn");
    const loginBtn = document.getElementById("loginBtn");
    const openForm = document.getElementById("openForm");
    const closeForm = document.getElementById("closeForm");
    const closeSignIn = document.getElementById("closeSignIn");
    const closeLogin = document.getElementById("closeLogin");
  

    const reservationForm = document.getElementById("reservationForm");
    const signInForm = document.getElementById("signInForm");
    const loginForm = document.getElementById("loginForm");

    openForm.onclick = () => reservationForm.style.display = "flex";
    closeForm.onclick = () => reservationForm.style.display = "none";

    signInBtn.onclick = () => signInForm.style.display = "flex";
    closeSignIn.onclick = () => signInForm.style.display = "none";

    loginBtn.onclick = () => loginForm.style.display = "flex";
    closeLogin.onclick = () => loginForm.style.display = "none";

  
    // ******************************************************************************************

   