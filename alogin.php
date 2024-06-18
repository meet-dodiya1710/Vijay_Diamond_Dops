<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login-Form</title>
    <link rel="stylesheet" href="login.css">
    <link rel="icon" href="images/title.png">
</head>

<body style="background-image: url('images/background.jpg');">
    <!-- username, userid, emailid, phone, password  -->
    <!-- his index our login  -->
    <!-- 30min done  -->
    <div class="container">
        <div class="box form-box" style="box-shadow: 10px 25px 30px rgba(0, 0, 0, 1); color: #222222;">

            <?php
            include ("php/config.php");

            if (isset($_POST['submit'])) {
                $a_name = $_POST['a_name'];
                $a_password = $_POST['a_password'];

                // Prepare statement
                $stmt = mysqli_prepare($con, "SELECT * FROM admin WHERE a_name=? AND a_password=?");

                // Bind parameters
                mysqli_stmt_bind_param($stmt, "ss", $a_name, $a_password);

                // Execute statement
                mysqli_stmt_execute($stmt);

                // Get result
                $result = mysqli_stmt_get_result($stmt);

                // Fetch data
                $row = mysqli_fetch_assoc($result);

                if ($row) {
                    session_start();
                    $_SESSION['valid'] = $row['a_name'];
                    $_SESSION['id'] = $row['Id'];
                    header("Location: admin/includes/index.php");
                    exit();
                } else {
                    echo "<div class='message'>
                 <p>Wrong Username or Password</p>
              </div><br>";
                    echo "<a href='alogin.php'><button class='btn'>Go Back</button></a>";
                }

                // Close statement
                mysqli_stmt_close($stmt);
            } else {
                // Other code if needed
            
                ?>

                <header>Admin Login</header>
                <form action="" method="post">
                    <div class="field input">
                        <label for="a_name">Admin Name</label>
                        <input type="text" name="a_name" id="a_name" autocomplete="off" required>
                    </div>

                    <div class="field input">
                        <label for="password">Password</label>
                        <input type="password" name="a_password" id="a_password" autocomplete="off" required>
                    </div>

                    <div class="field">
                        <input type="submit" class="btn" name="submit" value="Login" required>
                    </div>
                </form>
            </div>
        <?php } ?>
    </div>
</body>

</html>