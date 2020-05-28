
<!-- <!DOCTYPE html>
<html>
<head>
	<title>Welcome </title>
</head>
<body>

	<ul>
  <li><a class="active" href="welcome.php">Home</a></li>
    <li><a href="registerform.php">New Item</a></li>
      <li><a href="check-in-item.php">Check-in Item</a></li>
  <li><a href="registration.php">New User</a></li>
    <li><a href="view_users.php">User</a></li>
  <li><a href="logout.php">Logout</a></li>
</ul>

</body>
</html> -->

<!DOCTYPE html>
<html>
<title>e-WasteSys</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<!-- Sidebar -->
<div class="w3-sidebar w3-bar-block w3-border-right" style="display:none" id="mySidebar">
  <button onclick="w3_close()" class="w3-bar-item w3-large">Close &times;</button>
  <a href="home.php" class="w3-bar-item w3-button">Home</a>
  <a href="announcement.php" class="w3-bar-item w3-button">Announcement/a>
    <a href="" class="w3-bar-item w3-button">Token</a>
   <a href="index.php" class="w3-bar-item w3-button">Logout</a>
</div>

<!-- Page Content -->
<div class="w3-teal">
  <button class="w3-button w3-teal w3-xlarge" onclick="w3_open()">☰</button>
  <div class="w3-container">
    <h1>Dashboard</h1>
  </div>
</div>

<script>
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>
     
</body>
</html> 



