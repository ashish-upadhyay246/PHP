<!DOCTYPE html>
<html>

<body>
    <?php
    if (isset($_POST['submit'])) {
        $ename = $_POST['nm'];
        $ecode = $_POST['cd'];
        $edesig = $_POST['ds'];
        $esal = $_POST['sal'];
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "employees";
        //create connection 
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $sql = "INSERT INTO BasicInfo VALUES ('$ename','$ecode','$edesig','$esal')";
        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
    ?>
</body>

</html>