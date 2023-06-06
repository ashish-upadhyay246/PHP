<html>

<head>

</head>

<body>
    <?php
    $myfile = fopen("revStr_source.txt", "r") or die("Unable to open the file.");
    $yourfile = fopen("revStr_desti.txt", "a") or die("Unable to open the file.");
    $content = "";
    echo "The given file has: </br>";
    while (!feof($myfile)) {
        $ans = "";
        $word = "";
        $line = fgets($myfile);
        $n = strlen($line);
        echo $line . "</br>";
        $i = 0;
        while ($i < $n) {
            if ($line[$i] == " " || $i == $n - 1) {
                $word = $word . $line[$i];
                $trim = trim($word);
                $rev = strrev($trim);
                $ans = $ans . $rev . " ";
                $word = "";
                $i++;
                continue;
            }
            $word = $word . $line[$i];
            $i++;
        }
        $content = $content . $ans . "\n";
    }
    fwrite($yourfile, $content);
    fclose($myfile);
    fclose($yourfile);
    echo "</br>File write complete.";
    ?>
</body>

</html>