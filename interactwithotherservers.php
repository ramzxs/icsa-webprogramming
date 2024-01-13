<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Fave Wikis</title>
</head>
<body>
    <h1>My Fave Wikis</h1>

    <form action="?" method="get">
        <select name="wiki" required>
            <option value="">(Select)</option>
            <option value="Artificial_intelligence">Artificial Intelligence</option>
            <option value="Machine_learning">Machine Learning</option>
            <option value="Artificial_life">Artificial Life</option>
        </select>

        <button type="submit">View</button>
    </form>
    <hr>

    <?php
    if ( isset($_GET['wiki'])) {
        // print_r($_GET);

        $url = "https://en.wikipedia.org/wiki/" . $_GET['wiki'];
        $result = file_get_contents($url);
        ?>
        <div style="width: 100%; height: 80vh; border: 2px solid green; overflow-y: scroll;">
            <?= $result ?>
        </div>
        <?php
    }
    ?>
</body>
</html>