<html>

<body>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Name: <input type="text" name="name"><br>
        Basic Salary: <input type="number" name="sal"><br>
        Code: <input type="text" name="cod"><br>
        Designation: <input type="text" name="desi"><br>
        <input type="submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $name = $_POST['name'];
        $sal = (float)$_POST['sal'];
        $desi=$_POST['desi'];

        $da = ($sal * 0.16) / 100;
        $hra = (0.5 * ($sal + $da));
        $pf = (0.12 * ($sal + $da));
        echo "Employee name: ".$name."<br>";
        echo "Designation: ".$desi."<br>";
        echo "HRA in INR ".$hra."<br>";
        echo "DA in INR  ".$da."<br>";
        echo "EPF in INR ".$pf."<br>";
    }
    ?>

</body>

</html>