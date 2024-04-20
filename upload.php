<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/syles.css">
</head>

<body>
    <div class="data-wrapper">
        <?php
        $target_dir = "uploads/";

        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "Het bestand " . basename($_FILES["fileToUpload"]["name"]) . " is geüpload.";

            $file = fopen($target_file, "r");

            $data = [];

            while (($line = fgets($file)) !== false) {
                array_push($data, $line);
            }

            fclose($file);


            echo "<table class='data-table'";
            foreach ($data as $line) {
                echo "<tr>";
                $parts = explode(',', $line);
                foreach ($parts as $part) {
                    echo "<td>" . htmlspecialchars($part) . "</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "Sorry, er was een fout bij het uploaden van uw bestand.";
        }
        ?>
    </div>
</body>

</html>