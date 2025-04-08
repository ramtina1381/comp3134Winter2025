<!DOCTYPE html>
<html>
<head>
    <title>Get Users</title>
</head>
<body>
    <h2>Search Active Users by First Name</h2>
    <form method="GET" action="">
        <label for="firstname">First Name:</label>
        <input type="text" name="firstname" id="firstname" required>
        <input type="submit" value="Search">
    </form>

    <?php
    if (isset($_GET['firstname'])) {
        $firstname = $_GET['firstname'];

        // Database credentials
        $host = "localhost";
        $db = "userDB";
        $user = "root";
        $pass = "0c4f3e20c12054b30b508ad1fd7d5fe6e94bb88d93c1da69"; 

        // Connect to DB
        $conn = new mysqli($host, $user, $pass, $db);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Vulnerable query (no sanitization)
        $sql = "SELECT * FROM users WHERE firstname = '$firstname' AND active = 1";
        $result = $conn->query($sql);

        echo "<h3>Results:</h3>";
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Username</th><th>Email</th><th>First Name</th><th>Last Name</th><th>Active</th></tr>";

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['username']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['firstname']}</td>
                    <td>{$row['lastname']}</td>
                    <td>{$row['active']}</td>
                </tr>";
            }
        } else {
            echo "<tr><td colspan='6'>No results found</td></tr>";
        }

        echo "</table>";
        $conn->close();
    }
    ?>
</body>
</html>
