<?php

if (isset($_POST['login'])) {
    // Form has been submitted.
    // Validate form data.
    // Function to validate form data.
    function validateFormData($formData)
    {
        $formData = trim(stripslashes(htmlspecialchars($formData)));
        return $formData;
    }

    // Create variables.
    // Wrap the data with our function.
    $formUser = validateFormData($_POST['user_name']);
    $formPass = validateFormData($_POST['pass_word']);

    // Connect to database.
    include('connection.php');

    // Create SQL query.
    $query = "SELECT username, email, password FROM users WHERE username='$formUser'";

    // Store the result.
    $result = mysqli_query($conn, $query);

    // Verify if result is returned.
    if (mysqli_num_rows($result) > 0) {
        // Store basic user data in variables.
        while ($row = mysqli_fetch_assoc($result)) {
            $user = $row['username'];
            // $email = $row['Email'];
            $hashedPass = $row['password'];
        }

        // Verify hashed password with submitted password.
        if ($formPass == $hashedPass) {
            // Correct login details!
            // Start the session.
            session_start();

            // Store data in session variables.
            $_SESSION['loggedInUser'] = $user;
            $_SESSION['loggedInEmail'] = $email;

            // Redirect user to the profile page.
            header("Location: https://auiqm.netlify.app");
        } else {
            // Error message.
            $loginError = "<div class='alert alert-danger'>Wrong username / password combination. Try again.</div>";
        }
    } else {
        // No results in database.
        $loginError = "<div class='alert alert-danger'>No such user in database. <button class='btn-close float-end' data-bs-dismiss='alert'></button></div>";
    }

    // Close MySQL connection.
    mysqli_close($conn);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class='container'>
        <div class="pb-4 mt-2 mb-4 border-bottom">
            <h1>Login</h1>
            <p class="lead">Use this form to log in to your account</p>
        </div>

        <?php
        if (isset($loginError)) {
            echo $loginError;
        }
        ?>

        <p class="text-danger">* Required Fields</p>
        <form action="<?php
                        // echo $_SERVER['PHP_SELF'];
                        echo htmlspecialchars($_SERVER["PHP_SELF"]);
                        ?>" method="post" class="form-inline">
            <div class="form-group">
                <label for="login-user_name" class="visually-hidden">Username</label>
                <small class="text-danger">*</small>
                <input type="text" placeholder="Username" name="user_name">
            </div>
            <br>

            <div class="form-group">
                <label for="login-pass_word" class="visually-hidden">Password</label>
                <small class="text-danger">*</small>
                <input type="password" placeholder="Password" name="pass_word">
            </div>
            <br>

            <button class="btn btn-secondary" type="submit" name="login">Login!</button>
        </form>

    </div>

    <script src="//code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>