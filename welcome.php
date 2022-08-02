<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dear buy Your Ticket here</title>
</head>
<body>
	<div class="topnav">
  <a class="active" href="#home">Home</a>
 
   <a href="#contact">Buy Ticket</a>
  
  <a href="logout.php">Sign Out</a>
</div>
    <?php echo "<h1>Welcome" . $_SESSION['username'] . "</h1>"; ?>
    
</body>
</html>