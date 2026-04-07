<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the dname parameter is received
    if (isset($_POST['dname']) && !empty($_POST['dname'])) {
        $dname = $_POST['dname'];
        echo "dname parameter received: $dname";
    } else {
        echo "dname parameter not received.";
    }
} else {
    echo "Form not submitted.";
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ipatient";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if dname parameter is set in the POST data
if(isset($_POST['dname']) && !empty($_POST['dname'])) {
    $dname = $_POST['dname'];

    // Prepare a delete statement
    $sql = "DELETE FROM doctors WHERE dname = ?";
    
    // Attempt to prepare the SQL statement
    $stmt = mysqli_prepare($conn, $sql);
    
    // Bind parameters to the prepared statement
    mysqli_stmt_bind_param($stmt, "s", $dname);
    
    // Execute the prepared statement
    if(mysqli_stmt_execute($stmt)) {
        // Redirect to the search page after successful deletion
        header("Location: doctors.php");
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }

    // Close the statement
    mysqli_stmt_close($stmt);
} else {
    echo "No dname specified.";
}

// Close connection
mysqli_close($conn);
?>
