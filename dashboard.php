<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
    <div class="container-fluid">
        <!-- Zone de déconnexion -->
        <div class="d-flex justify-content-between align-items-center my-3">
            <h1>Dashboard Overview</h1>
            <a href="logout.php" class="btn btn-danger">Déconnexion</a>
        </div>

        <div class="row g-4">

            <!-- Top N Application -->
            <div class="col-md-4">
                <div class="card p-3">
                    <h5 class="card-title text-center">Port surveiller</h5>
                    <canvas id="appChart"></canvas>
                </div>
            </div>

            <!-- Top N Protocol -->
            <div class="col-md-4">
                <div class="card p-3">
                    <h5 class="card-title text-center">Protocol</h5>
                    <canvas id="protocolChart"></canvas>
                </div>
            </div>

            <!-- Top N QoS -->
            <div class="col-md-4">
                <div class="card p-3">
                    <h5 class="card-title text-center">Top N QoS</h5>
                    <canvas id="qosChart"></canvas>
                </div>
            </div>
        </div>

        <!-- Table de Conversations -->
        <div class="row g-4 mt-2">
            <div class="col-md-12">
                <div class="card p-3">
                    <h5 class="card-title text-center">Top N Conversation</h5>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Source</th>
                                <th>Destination</th>
                                <th>Protocole</th>
                                <th>DSCP</th>
                                <th>Traffic</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/script.js"></script>
</body>

</html>
