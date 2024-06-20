<?php
include 'db_connect.php'; // Include your database connection file

// Start the session if not already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Ensure the session variable is set
if (!isset($_SESSION['id'])) {
    die("User ID is not set in session.");
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check if the file was uploaded without errors
    if (isset($_FILES['payment_proof']) && $_FILES['payment_proof']['error'] == 0) {
        $allowed = array("pdf" => "application/pdf", "jpg" => "image/jpeg", "jpeg" => "image/jpeg", "png" => "image/png");
        $filename = $_FILES['payment_proof']['name'];
        $filetype = $_FILES['payment_proof']['type'];
        $filesize = $_FILES['payment_proof']['size'];

        // Verify file extension and type
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if (!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");

        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if ($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");

        // Verify MIME type of the file
        if (in_array($filetype, $allowed)) {
            // Check whether file exists before uploading it
            if (file_exists("uploads/" . $filename)) {
                echo $filename . " is already exists.";
            } else {
                // Move the uploaded file to the specified directory
                $new_filename = uniqid() . '_' . $filename; // Create a unique file name
                $filepath = "uploads/" . $new_filename;

                // Ensure the upload directory exists
                if (!is_dir('uploads')) {
                    mkdir('uploads', 0755, true);
                }

                // Move the file to the upload directory
                if (move_uploaded_file($_FILES['payment_proof']['tmp_name'], $filepath)) {
                    // Prepare to insert file information into the database
                    $stmt = $conn->prepare("INSERT INTO payment_proofs (user_id, file_name, file_path, upload_time) VALUES (?, ?, ?, NOW())");
                    $stmt->bind_param("iss", $_SESSION['id'], $new_filename, $filepath);

                    // Execute the statement
                    if ($stmt->execute()) {
                        echo "File uploaded successfully.";
                    } else {
                        echo "Error: Could not save file information to the database.";
                    }

                    // Close the statement
                    $stmt->close();
                } else {
                    echo "Error: There was a problem uploading your file. Please try again.";
                }
            }
        } else {
            echo "Error: There was a problem with the file upload.";
        }
    } else {
        echo "Error: " . $_FILES['payment_proof']['error'];
    }
}

// Close the database connection
$conn->close();
?>
