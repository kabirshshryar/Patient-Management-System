<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        table {
            border-collapse: collapse;
            width: 60%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        form {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <h2>Search by name or email</h2>

    <form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
       
        <label for="id">Email:</label>
        <input type="text" id="email" name="email">
        <input type="submit" value="Search">
    </form>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ipatient";

  
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }


    $sql = "SELECT * FROM users";
    if (isset($_GET['email']) && !empty($_GET['email'])) {
        $id = $_GET['email'];
        $sql .= " WHERE email = $email";
    }

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<table><tr><th>email</th><th>name</th><th>passport number</th></tr>";
    
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>" . $row["email"] . "</td><td>" . $row["name"] . "</td><td>" . $row["passport"] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }

 
    mysqli_close($conn);
    ?>

</body>
</html>
