<?php
if (!isset($_SESSION['user'])) {
    header("Location: ../index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Mobil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        html, body {
            height: 100%;
        }
        body {
            display: flex;
            flex-direction: column;
        }
        main {
            flex: 1;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary bg-gradient fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">Rental Mobil Wandi</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="../pages/dashboard.php">Dashboard</a></li>
                <li class="nav-item"><a class="nav-link" href="../pages/mobil.php">Mobil</a></li>
                <li class="nav-item"><a class="nav-link" href="../pages/pelanggan.php">Pelanggan</a></li>
                <li class="nav-item"><a class="nav-link" href="../pages/rental.php">Rental</a></li>
                <li class="nav-item"><a class="nav-link text-danger fw-bold" href="../logout.php">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>
<main class="container my-4">