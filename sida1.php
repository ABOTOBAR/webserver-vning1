<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=>, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #7FFF00;
            color:#7FFF00;
            text-align: center;
            padding: 1em 0;
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em 0;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

    <h1>Min Första övning för att förstå konceptet</h1>

    <p>Den här är en html sida med olika PHP funktioner.</p>

    <?php
        echo "<p>Denna text är genererad med utskriftskommandot i PHP</p>";

        if(isset($_POST['submit'])){
            $strName = !empty($_POST['name']) ? $_POST['name'] : "Dittnamn";

            echo "<p>Hej $strName</p>";
            echo "<p>Baklänges: " . strrev($strName) . "</p>";
            echo "<p>Gemener: " . strtolower($strName) . "</p>";
            echo "<p>Versaler: " . strtoupper($strName) . "</p>";
            echo "<p>Antal tecken: " . strlen($strName) . "</p>";
        }
    ?>

    <form method="post" action="">
        <label for="name">Ange ditt namn:</label>
        <input type="text" id="name" name="name">
        <input type="submit" name="submit" value="Skicka">
    </form>

    <?php include 'footer.php'; ?>

</body>
</html>