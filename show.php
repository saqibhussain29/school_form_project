<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_FILES['image'])) {
    $name = $_POST['std_name'];
    $last_name = $_POST['last_name'];
    $father_name = $_POST['father_name'];
    $mother_name = $_POST['mother_name'];
    $school = $_POST['school'];
    $class = $_POST['class'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];
    $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

    // Define allowed file extensions and size limit
    $allowed_extensions = array("jpg", "jpeg");
    $size_limit = 20 * 1024; // 20 KB in bytes

    // Validate file extension
    if (!in_array($file_ext, $allowed_extensions)) {
        echo "Error: Only JPG files are allowed.<br>";
    }
    // Validate file size
    elseif ($file_size > $size_limit) {
        echo "Error: File size must be less than 20 KB.<br>";
    }
    // If validation passes, move the file and save data to the database
    else {
        // Check if the upload directory exists, if not, create it
        if (!is_dir('upload-image')) {
            mkdir('upload-image', 0755, true);
        }

        // Move the uploaded file to the desired directory
        if (move_uploaded_file($file_tmp, "upload-image/" . $file_name)) {
            // Prepare SQL statement
            $stmt = $conn->prepare("INSERT INTO school (std_name, last_name, father_name, mother_name, school, class, email, age, gender, file_name, file_size, file_type) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("ssssssssisss", $name, $last_name, $father_name, $mother_name, $school, $class, $email, $age, $gender, $file_name, $file_size, $file_type);

            // Execute the statement
            if ($stmt->execute()) {
                echo "File uploaded and data saved successfully.<br>";
                echo "Name: $name<br>";
                echo "Age: $age<br>";
                echo "File Name: $file_name<br>";
                echo "File Size: $file_size bytes<br>";
                echo "File Type: $file_type<br>";
            } else {
                echo "Error: " . $stmt->error;
            }

            // Close the statement
            $stmt->close();
        } else {
            echo "Failed to upload file.";
        }
    }
}

// Close the connection
$conn->close();
?>
