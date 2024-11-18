<?php
session_start(); // Start the session to access stored session variables
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Your Plant Preferences</title>
    <link rel="stylesheet" href="styles.css">
    <!-- <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }
        .card {
            margin-bottom: 20px;
        }
    </style> -->
</head>
<body>

<div class="container">
    <h2 class="text-center">Your Plant Preferences</h2>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-light text-center">
                    <h4>Summary of Your Preferences</h4>
                </div>
                <div class="card-body p-4" style="background-color: #fdf7e3;">
                    <!-- Display session data in a table -->
                    <table class="table table-bordered table-striped" style="background-color: #fff7fa;">
                        <thead class="thead-light">
                            <tr>
                                <th>Preference</th>
                                <th>Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Plant Name:</strong></td>
                                <td><?php echo htmlspecialchars($_SESSION['plant_name']); ?></td>
                            </tr>
                            <tr>
                                <td><strong>Wiki Link:</strong></td>
                                <td><a href="<?php echo htmlspecialchars($_SESSION['wiki_link']); ?>" target="_blank"><?php echo htmlspecialchars($_SESSION['plant_name']); ?> Wikipedia</a></td>
                            </tr>
                            <tr>
                                <td><strong>Environmental Conditions:</strong></td>
                                <td><?php echo htmlspecialchars($_SESSION['environmental_conditions']); ?></td>
                            </tr>
                            <tr>
                                <td><strong>Space Location:</strong></td>
                                <td><?php echo htmlspecialchars($_SESSION['space_location']); ?></td>
                            </tr>
                            <tr>
                                <td><strong>Maintenance Requirement:</strong></td>
                                <td><?php echo htmlspecialchars($_SESSION['maintenance_requirement']); ?></td>
                            </tr>
                            <tr>
                                <td><strong>Aesthetic Preferences:</strong></td>
                                <td><?php echo htmlspecialchars($_SESSION['aesthetic_preferences']); ?></td>
                            </tr>
                            <tr>
                                <td><strong>Plant Characteristics:</strong></td>
                                <td><?php echo htmlspecialchars($_SESSION['plant_characteristics']); ?></td>
                            </tr>
                            <tr>
                                <td><strong>Purpose:</strong></td>
                                <td><?php echo htmlspecialchars($_SESSION['purpose']); ?></td>
                            </tr>
                            <tr>
                                <td><strong>Allergies:</strong></td>
                                <td><?php echo htmlspecialchars($_SESSION['allergies']); ?></td>
                            </tr>
                            <tr>
                                <td><strong>Eco-friendliness:</strong></td>
                                <td><?php echo htmlspecialchars($_SESSION['eco_friendliness']); ?></td>
                            </tr>
                            <tr>
                                <td><strong>Economic Considerations:</strong></td>
                                <td><?php echo htmlspecialchars($_SESSION['economic_considerations']); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Optional inline CSS to add "cute" color scheme -->
<style>
    .card {
        border-radius: 15px;
    }
    .card-header {
        background-color: #ffe4e1; /* Light pastel pink */
        color: #333;
    }
    .table thead {
        background-color: #ffebcd; /* Blanched almond */
    }
    .table tbody tr:nth-child(even) {
        background-color: #f0e68c; /* Light pastel yellow */
    }
    .table tbody tr:nth-child(odd) {
        background-color: #fffacd; /* Lemon chiffon */
    }
    .table td {
        padding: 12px;
    }
    .table {
        border: 2px solid #ffe4e1; /* Soft pink border */
    }
</style>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
