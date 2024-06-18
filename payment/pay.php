<?php include '../php/config.php'; ?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="../images/title.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="pay.css" integrity="">

    <title>Payment Gateway</title>


    <style>
        .notification {
            background-color: #4CAF50;
            color: white;
            text-align: center;
            padding: 16px;
            margin: 10px 0;
            border-radius: 5px;
        }

        .notification button {
            /* Your CSS styles for the button */
            background-color: #38b33d;
            /* Green background */
            border: 1px solid green;
            /* Remove borders */
            color: white;
            /* White text */
            padding: 10px 20px;
            /* Padding */
            text-align: center;
            /* Center text */
            text-decoration: none;
            /* Remove underline */
            display: inline-block;
            /* Make it inline-block */
            font-size: 16px;
            /* Font size */
            margin: 4px 2px;
            /* Margin */
            cursor: pointer;
            /* Cursor style */
            border-radius: 8px;
            /* Rounded corners */
        }

        .notification button:hover {
            background-color: #45a049;
            /* Darker green on hover */
        }
    </style>
</head>

<body>



    <div class="container my-4 alert-success">
        <form method="POST">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Owner</label>
                    <input type="text" class="form-control" name="owner" placeholder="Name on card" id="inputEmail4"
                        required>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Card Number</label>
                    <input type="text" name="card_number" placeholder="0000-0000-0000" maxlength="12"
                        class="form-control" id="inputPassword4" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputState">Exp: Month</label>
                    <select id="inputState" name="month" class="form-control" required>
                        <option selected>Select...</option>
                        <option>Jan</option>
                        <option>Feb</option>
                        <option>Mar</option>
                        <option>Apr</option>
                        <option>May</option>
                        <option>Jun</option>
                        <option>Jul</option>
                        <option>Aug</option>
                        <option>Sep</option>
                        <option>Oct</option>
                        <option>Nov</option>
                        <option>Dec</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">Exp: Year</label>
                    <select id="inputState" name="year" class="form-control" required>
                        <option selected>Select...</option>
                        <option>2011</option>
                        <option>2012</option>
                        <option>2013</option>
                        <option>2014</option>
                        <option>2015</option>
                        <option>2016</option>
                        <option>2017</option>
                        <option>2018</option>
                        <option>2019</option>
                        <option>2020</option>
                        <option>2021</option>
                        <option>2022</option>
                        <option>2023</option>
                        <option>2024</option>
                        <option>2025</option>
                        <option>2026</option>
                        <option>2027</option>
                        <option>2028</option>
                        <option>2029</option>
                        <option>2030</option>
                        <option>2031</option>
                        <option>2032</option>
                        <option>2033</option>
                        <option>2034</option>
                        <option>2035</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputCity">CVV</label>
                    <input type="text" name="cvv" class="form-control" id="inputCity" maxlength="3" Required>
                </div>
            </div>
            <div class="cards my-4">
                <label for="inputCity">Accepted Cards: </label>
                <img src="pay.jpeg" alt="Image Not Found">
            </div>
            <button type="submit" name="submit" class="btn btn-success btn-block">Pay</button>
        </form>
    </div>

    <?php

    if (isset($_POST["submit"])) {
        $owner = $_POST['owner'];
        $card_number = $_POST['card_number'];
        $month = $_POST['month'];
        $year = $_POST['year'];
        $cvv = $_POST['cvv'];

        $run = "INSERT INTO `payment` (`owner`, `card_number`, `month`, `year`, `cvv`) VALUES ('$owner', '$card_number', '$month', '$year', '$cvv')";

        if (mysqli_query($con, $run)) {
            echo '<div class="notification"><h2>Your Payment Successfully</h2></div>';
            echo '<div class="notification"><button onclick="redirectToIndex()">Ok</button></div>';
        } else {
            echo '<div class="notification" style="background-color: red;"><h2>Something Went Wrong</h2></div>';
        }


    } else {
        // echo "Something Went Wrong";
    }

    ?>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
        </script>

    <script>
        function redirectToIndex() {
            window.location.href = "../projectv/assets/html/index.php";
        }
    </script>
</body>

</html>