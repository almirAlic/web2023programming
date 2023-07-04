<?php
// Database connection details
$servername = "127.0.0.1";
$username = "root";
$password = "ademir299";
$dbname = "booking";

try {
    // Create a new PDO instance
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // SQL query
    $sql = "SELECT * FROM your_table";
    
    // Prepare the statement
    $stmt = $conn->prepare($sql);
    
    // Execute the statement
    $stmt->execute();
    
    // Fetch all rows as associative array
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // Process the rows
    foreach ($rows as $row) {
        // Access row data using column names
        $column1 = $row['column1'];
        $column2 = $row['column2'];
        
        // Do something with the data
        echo "Column 1: $column1, Column 2: $column2<br>";
    }
} catch(PDOException $e) {
    // Handle errors
    echo "Error: " . $e->getMessage();
}

// Close the connection
$conn = null;
?>
