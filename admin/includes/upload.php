<?php
    // Check if the form is submitted
    if(isset($_POST['submit'])){
        
        // Check if a file was selected
        if(isset($_FILES['image'])){
            
            // File properties
            $file_name = $_FILES['image']['name'];
            $file_tmp = $_FILES['image']['tmp_name'];
            $file_size = $_FILES['image']['size'];
            
            // Database connection
            include '../../config/dbcon.php';

            // $con = new mysqli($db_host, $db_user, $db_pass, $db_name);

            // Move the uploaded file to a server directory
            $upload_path = 'uploads/';
            $target_path = $upload_path . $file_name;

            move_uploaded_file($file_tmp, $target_path);

            // Save image information to the database
            $sql = "INSERT INTO images (file_name, file_path) VALUES ('$file_name', '$target_path')";
            
            if ($con->query($sql) === TRUE) {
                echo "Image uploaded successfully.";
            } else {
                echo "Error uploading image: " . $con->error;
            }

            // Close database connection
            $con->close();
        }
    }
    ?>