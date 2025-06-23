<?php
$conn = mysqli_connect("localhost", "root", "", "ghost");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// INSERT
if (isset($_POST['insert'])) {
    $student_id = $_POST['student_id'];
    $name = $_POST['name'];
    $course = $_POST['course'];

    $sql = "INSERT INTO students (student_id, name, course)
            VALUES ('$student_id', '$name', '$course')";
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Record inserted successfully');</script>";
    } else {
        echo "<script>alert('Error inserting record: " . mysqli_error($conn) . "');</script>";
    }
}

// UPDATE   
if (isset($_POST['update'])) {
    $student_id = $_POST['student_id'];
    $name = $_POST['name'];
    $course = $_POST['course'];

    $sql = "UPDATE students SET 
            name='$name', course='$course'
            WHERE student_id='$student_id'";
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Record updated successfully');</script>";
    } else {
        echo "<script>alert('Error updating record: " . mysqli_error($conn) . "');</script>";
    }
}

// FETCH
$select_sql = "SELECT * FROM students";
$result = mysqli_query($conn, $select_sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Management</title>
</head>
<body>
    <h2>Insert Student</h2>
    <form method="post">
        <input type="text" name="student_id" placeholder="Student ID" required><br><br>
        <input type="text" name="name" placeholder="Name" required><br><br>
        <input type="text" name="course" placeholder="Course" required><br><br>
        <input type="submit" name="insert" value="Insert">
    </form>

    <hr>

    <h2>Update Student</h2>
    <form method="post">
        <input type="text" name="student_id" placeholder="Student ID to Update" required><br><br>
        <input type="text" name="name" placeholder="New Name" required><br><br>
        <input type="text" name="course" placeholder="New Course" required><br><br>
        <input type="submit" name="update" value="Update">
    </form>

    <hr>

    <h2>Student List</h2>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Course</th>
        </tr>
        <?php
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                    <td>{$row['student_id']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['course']}</td>
                </tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No records found.</td></tr>";
        }
        mysqli_close($conn);
        ?>
    </table>
</body>
</html>
