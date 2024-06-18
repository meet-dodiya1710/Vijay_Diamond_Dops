<?php
session_start();

include ("php/config.php");
if (isset ($_SESSION["'valid"])) {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change The Profile</title>
    <link rel="stylesheet" href="login.css">
    <link rel="icon" href="images/title.png">
</head>

<body style="background-image: url('images/background.jpg');">
    <div class="nav" style="background-color: #222222;">
        <div class="logo">
            <p><a href="homr.php"><img src="images/logo2.png" alt="Logo"></a></p>
        </div>
        <div class="right-links">
            <a href="#"><button class="btn">Change Profile</button></a>
            <a href="php/logout.php"><button class="btn">Log Out</button></a>
        </div>
    </div>
    <div class="container">
        <div class="box form-box">

            <?php

            if (isset ($_POST['submit'])) {
                $username = $_POST['username'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];

                $id = $_SESSION['id'];

                $edit_query = mysqli_query($con, "UPDATE users SET Username='$username', Email='$email', Phone_no='$phone' WHERE Id=$id ") or die ("error occurred");

                if ($edit_query) {
                    echo "<div class='message'>
                                <p>Profile Updated!!</p>
                             </div><br>";
                    echo "<a href='product.php'><button class='btn'>Go Home</button></a>";
                }
            } else {

                $id = $_SESSION['id'];
                $query = mysqli_query($con, "SELECT * FROM users WHERE Id=$id ");

                while ($result = mysqli_fetch_assoc($query)) {

                    $res_Uname = $result['Username'];
                    $res_Email = $result['Email'];
                    $res_Phone = $result['Phone_no'];
                }

                ?>

                <header>Change Profile</header>
                <form action="" method="post">
                    <div class="field input">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" value="<?php echo $res_Uname; ?>"
                            autocomplete="off" required>
                    </div>
                    <div class="field input">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" value="<?php echo $res_Email; ?>" autocomplete="off"
                            required>
                    </div>
                    <div class="field input">
                        <label for="phone">Phone No.</label>
                        <input type="tel" name="phone" id="phone" value="<?php echo $res_Phone; ?>" autocomplete="off"
                            required>
                    </div>
                    <div class="field">
                        <input type="submit" class="btn" name="submit" value="Update" autocomplete="off" required>
                    </div>

                </form>
            </div>
        <?php } ?>
    </div>
</body>

</html>