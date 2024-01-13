<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Launch</title>
</head>
<body>
    <h1>MYGAME</h1>
    <h2>LAUNCH</h2>

    <?php
    // DYNAMIC PAGE


    // Option 1: Code Edit
    $OPEN = false;

    // Option 2: Based on the File
    $file = fopen('settings.txt', 'r'); // Read Only Mode
    $settings = fread($file, 1);
    // echo 'Settings: ' . $settings;
    $OPEN = ($settings == '1');
    fclose($file);

    
    // Option 3: Database-Driven
    $dbConn = new mysqli('localhost', 'root', '', 'launchpad_db', '3306');  // Port Number
    echo 'Database Connection: ' . $dbConn->stat();                      // Object-Oriented Programming (OOP)
    $result = $dbConn->query('SELECT * FROM settings');                     // Structured Query Language (SQL)
    $row = $result->fetch_assoc();                                          // Array
    // print_r($row);
    $OPEN = ($row['launch'] == '1');


    if ($OPEN == false) {
        ?>

        <p>We are not open yet. Please standby for X hours...</p>

        <?php
    } else {
        ?>

        <p>We are officially open! Welcome!</p>

        <?php
    }
    ?>

    <hr>
    <footer>
        &copy; 2023 <?= $row['id'] . ' v' . $row['version'] ?>
    </footer>
</body>
</html>