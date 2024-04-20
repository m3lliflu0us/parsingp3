<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your weather | Data</title>
    <link rel="stylesheet" href="styles/syles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body>
    <main>
        <div class="main-content">
            <div class="info-wrapper">
                <span>Upload een bestand om uit te lezen</span>
                <span>Upload een .txt bestand</span>
            </div>
            <div class="form-wrapper">
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    <div>
                        <label for="fileToUpload">
                            <input type="file" name="fileToUpload" id="fileToUpload" onchange="updateFilename()">
                            <img src="img/file.svg" draggable="false">
                            <div class="divider"></div>
                            <span id="filename">Bestand</span>
                        </label>
                    </div>


                    <div>
                        <label for="submit">
                            <input type="submit" value="Upload Bestand" name="submit">
                            <img src="img/check.svg" draggable="false">
                            <div class="divider"></div>
                            <span>Voeg toe</span>
                        </label>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>

<script>
    document.querySelector('label[for="submit"]').addEventListener('click', function() {
        document.querySelector('input[name="submit"]').click();
    });


    function updateFilename() {
        var input = document.getElementById('fileToUpload');
        var filenameSpan = document.getElementById('filename');
        if (input.files.length > 0) {
            var filename = input.files[0].name;
            filenameSpan.textContent = filename;
        } else {
            filenameSpan.textContent = 'Bestand';
        }
    }
</script>

</html>