<?php

// Include the connection to the database
include('connection.php');

// Include Form Validation
include('formvalidation.php');

// Check if the sign up button is pressed
if (isset($_POST['submit'])) {

    if (!$_POST["userName"]) {
        $nameError = "Please enter your Username <br>";
    } else {
        $userName = validateFormData($_POST["userName"]);
    }

    if (!$_POST["email"]) {
        $emailError = "Please enter your email <br>";
    } else {
        $email = validateFormData($_POST["email"]);
    }

    if (!$_POST["pass_word"]) {
        $passwordError = "Please enter your password <br>";
    } else {
        $pass_word = validateFormData($_POST["pass_word"]);
        $my_password = $pass_word;
    }

    if (!$_POST["address"]) {
        $addressError = "Please enter your address <br>";
    } else {
        $address = $_POST["address"];
    }

    if (isset($userName) && isset($email) && isset($my_password)) {
        $query = "INSERT INTO users (username, email, password, address) VALUES ('$userName', '$email', '$my_password', '$address')";
        $result = mysqli_query($conn, $query);
        if ($result) {
            header("Location: https://auiqm.netlify.app");
            // echo "<div class='alert alert-success'>New record created successfully</div>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }

    mysqli_close($conn);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="pb-4 mt-2 mb-4 border-bottom">
            <h1>Sign Up</h1>
            <p class="lead">Sign Up Page</p>
        </div>

        <div class="alert alert-warning">
            Sign Up Here
        </div>

        <p class="text-danger">* Required Fields</p>
        <form action="<?php
                        // echo $_SERVER['PHP_SELF'];
                        echo htmlspecialchars($_SERVER["PHP_SELF"]);
                        ?>" method="post">
            Username<small class="text-danger">* <?php
                                                    if (isset($nameError)) {
                                                        echo $nameError;
                                                    } ?></small>
            <br>
            <input type="text" placeholder="Username" name="userName">
            <br>

            Email<small class="text-danger">* <?php if (isset($emailError)) {
                                                    echo $emailError;
                                                } ?></small>
            <br>
            <input type="text" placeholder="Email" name="email">
            <br>

            Password<small class="text-danger">* <?php if (isset($passwordError)) {
                                                        echo $passwordError;
                                                    } ?></small>
            <br>
            <input type="password" placeholder="Password" name="pass_word">
            <br>

            Address<small class="text-danger">* <?php if (isset($addressError)) {
                                                    echo $addressError;
                                                } ?></small>
            <br>
            <input type="textbox" placeholder="Address" name="address" class="mb-4">
            <br>

            <button type="submit" value="Sign Up" name="submit">Sign Up</button>
            <br>
        </form>
    </div>
</body>

</html>