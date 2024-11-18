<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Start the session
session_start();

// Include the database connection file
require 'db.php'; // Ensure the path is correct

echo "db.php included successfully."; // Debug line

try {
    // At this point, $conn should be available from db.php
    echo "Connected successfully to the database: " . htmlspecialchars($dbname); // Output success message

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get data from the form
        $environmental_conditions = $_POST['environmentalConditions'];
        $space_location = $_POST['spaceLocation'];
        $maintenance_requirement = $_POST['maintenanceRequirements'];
        $aesthetic_preferences = $_POST['aestheticPreferences'];
        $plant_characteristics = $_POST['plantCharacteristics'];
        $purpose = $_POST['purpose'];
        $allergies = $_POST['allergies'];
        $eco_friendliness = $_POST['ecoFriendliness'];
        $economic_considerations = $_POST['economicConsiderations'];

        // Prepare the SQL SELECT statement to find the plant
        $sql = "SELECT plant_name, wiki_link FROM plant_preferences 
                WHERE environmental_conditions = ? 
                AND space_location = ? 
                AND maintenance_requirement = ? 
                AND aesthetic_preferences = ? 
                AND plant_characteristics = ? 
                AND purpose = ? 
                AND allergies = ? 
                AND eco_friendliness = ? 
                AND economic_considerations = ?";

        // Prepare the statement
        if ($stmt = $conn->prepare($sql)) {
            // Bind parameters
            $stmt->bind_param("sssssssss", 
                $environmental_conditions,
                $space_location,
                $maintenance_requirement,
                $aesthetic_preferences,
                $plant_characteristics,
                $purpose,
                $allergies,
                $eco_friendliness,
                $economic_considerations
            );

            // Execute the statement
            $stmt->execute();
            $stmt->store_result(); // Store the result for checking

            // Check if any rows were returned
            if ($stmt->num_rows > 0) {
                // Bind the result to variables
                $stmt->bind_result($plant_name, $wiki_link);
                $stmt->fetch(); // Fetch the data
                
                // Store plant data in session
                $_SESSION['plant_name'] = $plant_name;
                $_SESSION['wiki_link'] = $wiki_link;
                $_SESSION['environmental_conditions'] = $environmental_conditions;
                $_SESSION['space_location'] = $space_location;
                $_SESSION['maintenance_requirement'] = $maintenance_requirement;
                $_SESSION['aesthetic_preferences'] = $aesthetic_preferences;
                $_SESSION['plant_characteristics'] = $plant_characteristics;
                $_SESSION['purpose'] = $purpose;
                $_SESSION['allergies'] = $allergies;
                $_SESSION['eco_friendliness'] = $eco_friendliness;
                $_SESSION['economic_considerations'] = $economic_considerations;
            } else {
                // Handle case when no matching plant is found
                $_SESSION['plant_name'] = 'No suitable plant found.';
                $_SESSION['wiki_link'] = '#'; // or any default link
            }

            // Close the statement
            $stmt->close();
        } else {
            echo "Error preparing statement: " . $conn->error;
        }

        // Redirect to the output page
        header('Location: output.php'); // Make sure this file exists
        exit(); // Stop further execution
    } else {
        echo "<p>No data received.</p>";
    }

    // Close the connection (optional, but good practice)
    $conn->close();

} catch (Exception $e) {
    // Catch any exceptions and display the error message
    echo "Error: " . $e->getMessage();
}
?>
