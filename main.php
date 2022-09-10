<?php


if (isset($_POST["list"])) {
    $file = fopen("myList.txt", "a");
    fwrite($file, $_POST["list"] . "\n");
    fclose($file);
    echo '<script type="text/javascript">
    window.location.replace = "localhost/toto"
    </script>';
}

$file = fopen("myList.txt", "r");
if ($file) {
    while(($line = fgets($file)) !== false) {
        echo "<li>$line</li>";
    }
    fclose($file);
}


?>