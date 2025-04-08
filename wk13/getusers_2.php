<?php
if (isset($_GET['firstname'])) {
    $conn = new mysqli($servername, $username, $password, $dbname);
    $stmt = $conn->prepare("SELECT * FROM users WHERE firstname = ? AND active = 1");
    $stmt->bind_param("s", $_GET['firstname']);
    $stmt->execute();
    $result = $stmt->get_result();

    while ($row = $result->fetch_assoc()) {
        // Display the rows as in the previous step
    }
}
?>

