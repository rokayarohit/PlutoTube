<?php require_once("includes/config.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VideoTube</title>
    <!-- favicon -->
    <link href="assets/images/icons/favicon2.jpg" rel="icon">
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./assets/CSS/style.css">

    <!-- Jquery CDN-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="signInContainer">
        <div class="column">
            <div class="header">
                <img src="./assets/images/icons/VideoTubeLogo.png" title="VideoTube home" alt="site-logo">
                <h3>Sign Up</h3>
                <span>to continue to VideoTube</span>
            </div>
            <div class="loginForm">
                <form action="signIn.php" method="POST">
                   <input type="text" name="firstName" placeholder="first name" autocomplete='off' required>
                   <input type="text" name="lastName" placeholder="last name" autocomplete='off' required>
                   <input type="text" name="username" placeholder="User name" autocomplete='off' required>
                   <input type="email" name="email" placeholder="email" autocomplete='off' required>
                   <input type="email" name="email2" placeholder="confirm email" autocomplete='off' required>
                   <input type="password" name="password" placeholder="password" autocomplete='off' required>
                   <input type="password" name="password2" placeholder="password" autocomplete='off' required>
                   <input type="submit" name="submitButton" value="SUBMIT">

                </form>
            </div>
            <a href="signIn.php">Already have an account? Sign in here!</a>
        </div>
    </div>
</body>

</html>