<?php
include ("../../../php/config.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../../images/title.png">
    <title>Feedback</title>
    <link rel="stylesheet" href="css/feedback.css">
</head>

<body>
    <main>
        <form action="feedback.php" method="POST">

            <h3>Welcome to Feedback</h3>
            <div class="container">
                <label for="name">Your Name</label>
                <input type="text" name="name" placeholder="Enter your Name" required>
            </div>
            <div class="container">
                <label for="email">Your Email</label>
                <input type="email" name="email" placeholder="Enter your Email" required>
            </div>
            <div class="container">
                <label for="message">Your Feedback</label>
                <textarea name="message" id="message" cols="30" rows="10" placeholder="Enter your Feedback"
                    required></textarea>
            </div>
            <div class="op" style="margin: auto;">
                <button type="submit" name="feedback" style="margin-right: 250px;">Submit</button>
                <button type="submit" name="feedback" onclick="redirectToIndex()">Back</button>
            </div>
        </form>
    </main>

    <?php
    // Database Connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dops";

    $con = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($con->connect_error) {
        die ("Connection failed: " . $con->connect_error);
    }

    // Form Submission Handling
    if (isset ($_POST['feedback'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        // Retrieve user ID from another table in the same database
        $getUserSql = "SELECT id FROM users WHERE email = '$email' AND Username = '$name'";
        $result = $con->query($getUserSql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $userId = $row['id'];

            // Insert into the feedback table
            $feedbackSql = "INSERT INTO feedback (id, name, email, feedback) VALUES ('$userId', '$name', '$email', '$message')";

            if ($con->query($feedbackSql) === TRUE) {
                echo "<h3 style='color: #fff; font-size: 20px; text-align: center;'>Feedback submitted successfully!</h3>";
            } else {
                echo "Error: " . $feedbackSql . "<br>" . $con->error;
            }
        } else {
            echo '<script>alert("Invalid name and email combination. Please check your inputs or log in first.");</script>';
        }
    }

    $con->close();
    ?>

    <script>
        function redirectToIndex() {
            window.location.href = 'index.php';
        }
    </script>
</body>

</html>