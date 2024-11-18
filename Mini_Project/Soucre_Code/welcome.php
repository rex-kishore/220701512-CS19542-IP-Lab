<?php
session_start(); // Start the session to access session variables

// Check if the user is logged in by checking if the user name is set in the session
$user_name = isset($_SESSION['user_name']) ? $_SESSION['user_name'] : null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeScape Plant Picker</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-success" style="height: 75px;">
        <div class="container">
            <a class="navbar-brand pacifico-regular" href="index.html" style="color: #2e3531;">HomeScape Plant Picker</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contactus">Contact Us</a>
                    </li>
                    <?php if ($user_name): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="dashboard.php">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Log Out</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="signin.html">Sign In</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
        
    <section class="py-5 text-center">
        <div class="container-fluid hero-section">
            <h1 class="display-4">
                <?php if ($user_name): ?>
                    Welcome back, <span class="pacifico-regular" style="color: #2E8B57;"><?php echo htmlspecialchars($user_name); ?>!</span>
                <?php else: ?>
                    Welcome to <span class="pacifico-regular" style="color: #2E8B57;">HomeScape Plant Picker</span>
                <?php endif; ?>
            </h1>
            <p class="lead">
                <?php if ($user_name): ?>
                    Discover the best plants for your home based on your unique needs and environment.
                <?php else: ?>
                    Discover the best plants for your home, based on your unique needs and environment.
                <?php endif; ?>
            </p>
            <div class="d-flex justify-content-center">
                <?php if ($user_name): ?>
                    <a href="selection.html" class="btn btn-success btn-lg mx-2">Pick Now!</a>
                <?php else: ?>
                    <a href="signin.html" class="btn btn-success btn-lg mx-2">Let's Plant</a>
                    <a href="#learn-more" class="btn btn-outline-success btn-lg mx-2">Learn More</a>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <div class="container">
        <header class="bg-success text-white py-5 text-center about-section" id="about">
            <h1 class="display-4 pacifico-regular">About Us</h1>
            <p class="lead">Embark on a journey to transform your home into a lush, green sanctuary with our intelligent plant selection platform.</p>
            <p>From low-light survivors to eco-friendly choices, we help you find the perfect plants that match your lifestyle and environment.</p>
        </header>

        <!-- The rest of your content goes here, as before -->

        <footer class="bg-success text-white py-4 text-center">
            <div class="container">
                <p>&copy; 2024 HomeScape Plant Picker. All rights reserved.</p>
                <p>Your friendly guide to selecting the perfect plants for your home!</p>
                <div class="footer-links mt-3" id="contactus">
                    <a href="signin.html" class="text-white mx-2">Plant Now</a>
                </div>
            </div>
        </footer>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
