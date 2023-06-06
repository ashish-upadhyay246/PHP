<<html>

    <head>

    </head>

    <body>
        <?php
        $myfile = fopen("file1.txt", "r") or die("Unable to open file.");
        $content1 = fread($myfile, filesize("file1.txt"));
        fclose($myfile);

        $yourfile = fopen("file2.txt", "r") or die("Unable to open file.");
        $content2 = fread($yourfile, filesize("file2.txt"));
        fclose($yourfile);

        $myfile = fopen("file1.txt", "w") or die("Unable to open file.");
        fwrite($myfile, $content2);
        fclose($myfile);

        $yourfile = fopen("file2.txt", "w") or die("Unable to open file.");
        fwrite($yourfile, $content1);
        fclose($yourfile);

        echo "Exchange complete.";
        ?>
    </body>

    </html>