<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register-Form</title>
    <link rel="stylesheet" href="login.css">
    <link rel="icon" href="images/title.png">
</head>

<body style="background-image: url('images/background.jpg');">
    <!-- username, userid, emailid, phone, password  -->
    <div class="container">
        <div class="box form-box">
            <?php
            include ("php/config.php");
            if (isset ($_POST["submit"])) {
                $username = $_POST['username'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $password = $_POST['password'];

                // verifying the unique email 
            
                $verify_query = mysqli_query($con, "SELECT Email FROM  users WHERE Email='$email'");

                if (mysqli_num_rows($verify_query) != 0) {

                    echo "<div class='message'>
                                  <p>This email is used, Try another one Please!!</p>
                              </div><br>";
                    echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button></a>";
                } else {
                    mysqli_query($con, "INSERT INTO users(Username,Email,Phone_no,Password) VALUES('$username','$email','$phone','$password')") or die ("Error Ocurred");

                    echo "<div class='message'>
                            <p >Registration Successfully!!</p>
                         </div><br>";
                    echo "<a href='login.php'><button class='btn'>Login Now</button></a>";
                }
            } else {
                ?>
                <header>Sign Up</header>
                <form action="" method="post">
                    <div class="field input">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" autocomplete="off" required>
                    </div>
                    <div class="field input">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" autocomplete="off" required>
                    </div>
                    <div class="field input">
                        <label for="phone">Phone No.</label>
                        <input type="tel" name="phone" id="phone" autocomplete="off" required>
                    </div>
                    <div class="field input">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" autocomplete="off" required>
                    </div>

                    <div class="field">
                        <input type="submit" class="btn" name="submit" value="Register" autocomplete="off" required>
                    </div>
                    <div class="links">
                        Already a Member ? <a href="login.php">Sign in</a>
                    </div>
                </form>
            </div>
        <?php } ?>
    </div>
</body>

</html>