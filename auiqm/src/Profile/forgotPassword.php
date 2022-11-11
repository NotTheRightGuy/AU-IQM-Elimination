<?php

session_start();

// Get the username through the session
$user_name = $_SESSION['loggedInUser'];

// Include the database connection
include('connection.php');

// Include the functions file
include('formvalidation.php');

// Query the database for client data
$query = "SELECT * FROM users WHERE username = '$user_name'";
$result = mysqli_query($conn, $query);

// If result is returned
if (mysqli_num_rows($result) > 0) {

    // We have data!
    // Set some variables
    while ($row = mysqli_fetch_assoc($result)) {
        $email = $row['email'];
        $password = $row['password'];
    }
} else { // No results returned
    $alertMessage = "<div class='alert alert-warning'>Nothing to see here. <a href='clients.php' class='stretched-link text-secondary'>Head back</a>.</div>";
}

// If update button was submitted
if (isset($_POST['update'])) {

    // Set variables
    $Username = validateFormData($_POST["user_name"]);
    $Password = validateFormData($_POST["password"]);

    // Create the query
    $query = "UPDATE users
                    SET password = '$Password'
                    WHERE username = '$Username'";

    $result = mysqli_query($conn, $query);

    // If query was successful
    if ($result) {
        // Refresh page with query string
        header("Location: login.php");
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}

// Close the MySQL connection
// Close the MySQL connection
if (!mysqli_get_connection_stats($conn)) {
    mysqli_close($conn);
}

?>

<div class="container">
    <div class="pb-2 mt-4 mb-2 border-bottom">
        <h1>Forgot Password</h1>
        <p class="lead">Update your password here.</p>
    </div>

    <?php

    if (isset($alertMessage)) {
        echo $alertMessage;
    }

    ?>
</div>
<div>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="row">
        <div class="form-group col-sm-6">
            <label for="client-email">Username</label>
            <input type="text" class="form-control input-lg" id="client-email" name="user_name" value="<?php
                                                                                                        if (isset($user_name)) {
                                                                                                            echo $user_name;
                                                                                                        } ?>">
        </div>
        <div class="form-group col-sm-6">
            <label for="client-phone">Phone</label>
            <input type="password" class="form-control input-lg" id="client-password" name="password">
        </div>
        <div class="col-sm-12">
            <hr>
            <div class="d-inline-flex float-end">
                <a href="clients.php" type="button" class="btn btn-lg btn-outline-dark me-4">Cancel</a>
                <button type="submit" class="btn btn-lg btn-success" name="update">Update</button>
            </div>
        </div>
    </form>
</div>