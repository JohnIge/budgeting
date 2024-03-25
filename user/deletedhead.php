<!DOCTYPE html>
<html>

<head>
    <title>Delete User</title>
</head>

<body>

    <h2>Delete User</h2>

    <?php
    // Include your database connection file
    include_once('incl/config.php');
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Check if user ID is provided
        if (!empty($_POST['user_id'])) {
            // Sanitize input to prevent SQL injection
            $user_id = mysqli_real_escape_string($conn, $_POST['user_id']);

            // Prepare and execute the SQL DELETE command
            $sql = "DELETE FROM users WHERE Username = '$user_id'";
            if (mysqli_query($conn, $sql)) {
                echo "User deleted successfully.";
            } else {
                echo "Error deleting user: " . mysqli_error($conn);
            }
        } else {
            echo "Please provide a user name.";
        }
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="user_id">User ID:</label>
        <input type="text" id="user_id" name="user_id">
        <button type="submit">Delete User</button>
    </form>

</body>

</html>