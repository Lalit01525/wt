<?php
echo "Welcome to my Database connection<br>";

// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "vishal"; // Make sure this DB exists

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Sorry, we are unable to connect: " . $conn->connect_error);
} else {
    echo "Connection is successful<br>";
}

// Step 4: SQL query to fetch student data
$sql = "SELECT * FROM students";

// Execute query and display results
if ($result = mysqli_query($conn, $sql)) {
    if (mysqli_num_rows($result) > 0) {
        echo "<h2>Student Details</h2>";
        echo "<table border='1'>";
        echo "<tr>
                <th>Student ID</th>
             
                <th>Name</th>
                <th>Course</th>
                <th>Year</th>
              </tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['student_id'] . "</td>";
           
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['course'] . "</td>";
            echo "<td>" . $row['year'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_free_result($result);
    } else {
        echo "No student records found.";
    }
} else {
    echo "ERROR: Could not execute query: $sql. " . mysqli_error($conn);
}

// Close the connection
mysqli_close($conn);
?>