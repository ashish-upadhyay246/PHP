<!DOCTYPE html>
<html>

<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "employees";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM basicinfo";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        echo "<table border=1>";
        echo "<tr>";
        echo "<th>NAME</th>";
        echo "<th>CODE</th>";
        echo "<th>DESIGNATION</th>";
        echo "<th>SALARY</th>";
        echo "</tr>";
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['Name'] . "</td>";
            echo "<td>" . $row['Code'] . "</td>";
            echo "<td>" . $row['Designation'] . "</td>";
            echo "<td>" . $row['Salary'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_free_result($result); // close the resultset.
    } else {
        echo "No matching records are found.";
    }
    mysqli_close($conn);
    ?>
</body>

</html>