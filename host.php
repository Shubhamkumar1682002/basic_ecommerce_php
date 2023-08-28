!DOCTYPE html>
<html>
<head>
    <title>Student Dashboard</title>
    <link rel="stylesheet" type="text/css" href="dashboard.css">
</head>
<body>
    <div class="container">
        <h1>Welcome to Student Dashboard</h1>
        <?php
        // Function to fetch attendance data for a student
        function fetchAttendanceData($studentId) {
            $host = "localhost";
            $username = "root";
            $password = "";
            $database = "attendance_management";

            // Create a connection
            $conn = new mysqli($host, $username, $password, $database);

            // Check the connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Prepare and execute a SQL query to fetch attendance data
            $stmt = $conn->prepare("SELECT present, absent, total FROM attendance WHERE student_id = ?");
            $stmt->bind_param("s", $studentId);
            $stmt->execute();
            $result = $stmt->get_result();

            // Fetch and display attendance data
            if ($result->num_rows === 1) {
                $row = $result->fetch_assoc();
                $present = $row["present"];
                $absent = $row["absent"];
                $total = $row["total"];

                echo "<h3>Your Attendance:</h3>";
                echo "<table>";
                echo "<tr><th>Present</th><th>Absent</th><th>Total</th></tr>";
                echo "<tr><td>" . $present . "</td><td>" . $absent . "</td><td>" . $total . "</td></tr>";
                echo "</table>";
            } else {
                echo "<p>No attendance records found.</p>";
            }

            $stmt->close();
            $conn->close();
        }

        // Check if the student ID is set in the URL parameters
        if (isset($_GET["student_id"])) {
            $studentId = $_GET["student_id"];

            // Fetch and display attendance data for the student
            fetchAttendanceData($studentId);
        } else {
            echo "<p>No student ID found.</p>";
        }
        ?>
    </div>
</body>
</html>