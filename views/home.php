<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Room Reservation</title>
  <link rel="stylesheet" href="assets/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>
  <!-- Header Section -->
  <header>
    <div class="logo">WorkSpace</div>
    <nav>
      <button class="btn" id="signInBtn">Sign In</button>
      <button class="btn" id="loginBtn">Login</button>
      <button class="btn" id="page-défilée"><a href="index.php?page=rooms">Nos salle</a></button>
    </nav>
  </header>

  <!-- Hero Section -->
  <section class="hero">
    <div class="hero-content">
      <h1>Reserve Your Perfect Workspace</h1>
      <p>Flexible rooms for meetings, coworking, and private workspaces.</p>
      <button class="reserve-btn" id="openForm">Reserve a Room</button>
    </div>
  </section>

  <!-- Reservation Form -->
  <div class="form-container" id="reservationForm">
    <form>
      <h2>Book a Room</h2>
      <div class="form-group">
        <label for="category">Room Category:</label>
        <select id="category" name="category">
          <option value="meeting">Meeting Room</option>
          <option value="coworking">Coworking Space</option>
          <option value="private">Private Office</option>
        </select>
      </div>
      <div class="form-group">
        <label for="capacity">Room Capacity:</label>
        <input type="number" id="capacity" name="capacity" placeholder="Number of people" min="1">
      </div>
      <div class="form-group">
        <label for="duration">Duration (hours):</label>
        <input type="number" id="duration" name="duration" placeholder="e.g., 2" min="1">
      </div>
      <div class="form-group">
        <label for="date">Reservation Date:</label>
        <input type="date" id="date" name="date">
      </div>
      <div class="form-buttons">
        <button type="submit" class="btn submit-btn">Confirm Reservation</button>
        <button type="button" class="btn close-btn" id="closeForm">Close</button>
      </div>
    </form>
  </div>

  <!-- Sign In Modal -->
  <div class="form-container" id="signInForm">
    <form>
      <h2>Sign In</h2>
      <div class="form-group">
        <label>Full name:</label>
        <input type="name" placeholder="Enter your name" required>
      </div>
      <div class="form-group">
        <label>Email:</label>
        <input type="email" placeholder="Enter your email" required>
      </div>
      <div class="form-group">
        <label>Password:</label>
        <input type="password" placeholder="Enter your password" required>
      </div>
     
      <button type="submit" class="btn submit-btn">Sign In</button>
      <button type="button" class="btn close-btn" id="closeSignIn">Close</button>
    </form>
  </div>

  <!-- Login Modal -->
  <div class="form-container" id="loginForm">
    <form>
      <h2>Login</h2>
      <div class="form-group">
        <label>Email:</label>
        <input type="email" placeholder="Enter your email" required>
      </div>
      <div class="form-group">
        <label>Password:</label>
        <input type="password" placeholder="Enter your password" required>
      </div>
      <button type="submit" class="btn submit-btn">Login</button>
      <button type="button" class="btn close-btn" id="closeLogin">Close</button>
    </form>
  </div>

  <script src="assets/main.js"></script>
</body>
</html>
