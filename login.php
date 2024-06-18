<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-Form</title>
    <link rel="stylesheet" href="login.css">
    <link rel="icon" href="images/title.png">
</head>

<body style="background-image: url('images/background.jpg');">

    <div class="container">
        <div class="box form-box" style="box-shadow: 10px 25px 30px rgba(0, 0, 0, 1); color: #222222;">

            <?php
            include ("php/config.php");

            if (isset($_POST['submit'])) {
                $email = $_POST['email'];
                $password = $_POST['password'];

                // Prepare statement
                $stmt = mysqli_prepare($con, "SELECT * FROM users WHERE Email=? AND Password=?");

                // Bind parameters
                mysqli_stmt_bind_param($stmt, "ss", $email, $password);

                // Execute statement
                mysqli_stmt_execute($stmt);

                // Get result
                $result = mysqli_stmt_get_result($stmt);

                // Fetch data
                $row = mysqli_fetch_assoc($result);

                if ($row) {
                    session_start();
                    $_SESSION['valid'] = $row['Email'];
                    $_SESSION['username'] = $row['Username'];
                    $_SESSION['phone'] = $row['Phone_no'];
                    $_SESSION['id'] = $row['Id'];
                    header("Location: product/products.php");
                    exit();
                } else {
                    echo "<div class='message'>
                 <p>Wrong Email or Password</p>
              </div><br>";
                    echo "<a href='login.php'><button class='btn'>Go Back</button></a>";
                }

                // Close statement
                mysqli_stmt_close($stmt);
            } else {
                // Other code if needed
            
                ?>

                <header>Login</header>
                <form action="" method="post">
                    <div class="field input">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" required>
                    </div>

                    <div class="field input">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" required>
                    </div>

                    <div class="field">
                        <input type="submit" class="btn" name="submit" value="Login" required>
                    </div>
                    <div class="links">
                        Don't have account ? <a href="register.php">Sign Up Now</a>
                    </div>
                </form>

            </div>
        <?php } ?>
    </div>
</body>

</html>