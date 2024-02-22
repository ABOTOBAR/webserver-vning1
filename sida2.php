<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sida nmr 2</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #000;
            color: #fff;
            text-align: center;
            padding: 1em 0;
        }
        footer {
            background-color: #000;
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
    <header>
        <h1>Sida nmr 2</h1>
    </header>

    <div>
        <p>Enkel HTML-sida med PHP-funktionalitet.</p>

        <?php
        $farmAnimals = array();

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $farmAnimals[] = $_POST['animal1'];
            $farmAnimals[] = $_POST['animal2'];
            $farmAnimals[] = $_POST['animal3'];

            echo "<pre>";
            print_r($farmAnimals);
            echo "</pre>";

            $farmAnimals[2] = "Struts";

            $farmAnimals[] = "Alpacka";

            array_shift($farmAnimals);

            echo "<pre>";
            print_r($farmAnimals);
            echo "</pre>";

            echo "Djuret på andra platsen är: " . $farmAnimals[1];
        }
        ?>
    </div>

    <?php include 'footer.php'; ?>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="animal1">Haiwan 1:</label>
        <input type="text" name="animal1" required>

        <label for="animal2">Haiwan 2:</label>
        <input type="text" name="animal2" required>

        <label for="animal3">Haiwan 3:</label>
        <input type="text" name="animal3" required>

        <button type="submit">Tryck</button>
    </form>
</body>
</html>
