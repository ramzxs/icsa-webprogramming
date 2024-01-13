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
    // Option 1: Code Edit
    $OPEN = false;

    // Option 2: Based on the File
    $file = fopen('settings.txt', 'r');
    $settings = fread($file, 1);
    // echo 'Settings: ' . $settings;
    $OPEN = ($settings == '1');


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
</body>
</html>