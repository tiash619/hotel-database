<?php
// index.php

// Database connection
$host = "localhost";
$user = "root"; // change if needed
$pass = "";     // change if needed
$db   = "hotel_db"; // your database name

$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Hotel Database Management System</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">Hotel DBMS</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="rooms.php">Rooms</a></li>
                    <li class="nav-item"><a class="nav-link" href="guests.php">Guests</a></li>
                    <li class="nav-item"><a class="nav-link" href="bookings.php">Bookings</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="bg-primary text-white text-center py-5">
        <h1>Welcome to Hotel Database Management System</h1>
        <p>Manage rooms, guests, and bookings efficiently</p>
    </header>

    <div class="container mt-5">
        <div class="row text-center">
            <div class="col-md-4">
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="card-title">Manage Rooms</h5>
                        <p class="card-text">Add, edit, and view available rooms.</p>
                        <a href="rooms.php" class="btn btn-primary">Go to Rooms</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mt-4 mt-md-0">
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="card-title">Manage Guests</h5>
                        <p class="card-text">Track guest information and history.</p>
                        <a href="guests.php" class="btn btn-success">Go to Guests</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mt-4 mt-md-0">
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="card-title">Manage Bookings</h5>
                        <p class="card-text">Create and monitor room bookings.</p>
                        <a href="bookings.php" class="btn btn-warning">Go to Bookings</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-dark text-white text-center py-3 mt-5">
        &copy; <?php echo date("Y"); ?> Hotel Database Management System. All Rights Reserved.
    </footer>
</body>
</html>
