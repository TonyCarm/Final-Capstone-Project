<?php
// Start session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // Redirect to login page or handle unauthorized access
    header("Location: login.php");
    exit();
}

// Connect to the database
$db = new mysqli('localhost', 'root', 'Sports4users1425*', 'sportssite');

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

// Assuming you have user ID stored in a session or passed via GET/POST
$user_id = $_SESSION['user_id']; // Adjust accordingly

// Retrieve favorite players for the user
$favorites_query = "SELECT players.name FROM players JOIN favorites ON players.id = favorites.player_id WHERE favorites.user_id = $user_id";
$favorites_result = $db->query($favorites_query);

$favoritePlayers = array();
if ($favorites_result->num_rows > 0) {
    while ($row = $favorites_result->fetch_assoc()) {
        $favoritePlayers[] = $row;
    }
}

$db->close();
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
</head>
<body>
    <h1>User Profile</h1>
    <h2>Favorites</h2>
    <ul>
        <!-- Display favorite players here -->
        <?php $favoritePlayers = array();?>
        <?php foreach ($favoritePlayers as $player): ?>
            <li><?php echo $player['name']; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>

