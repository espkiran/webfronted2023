<?php
// Connect to the MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "your_database_name";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$iwe = $_POST['iwe'];
$loanWork = $_POST['loanWork'];
$ltype = $_POST['ltype'];
// ... (retrieve other form fields)

// Insert data into the database
$sql = "INSERT INTO your_table_name (iwe, loanWork, ltype, ...) VALUES ('$iwe', '$loanWork', '$ltype', ...)";

if ($conn->query($sql) === TRUE) {
    echo "Data saved successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
