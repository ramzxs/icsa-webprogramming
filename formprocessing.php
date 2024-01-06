<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Processing using PHP</title>
</head>
<body>
    <h1>Form Processing using PHP</h1>

    <h2>CONTACT US NOW</h2>

    <?php
    // $_REQUEST
    // $_GET
    // $_POST

    if ( isset($_POST['name']) ) {
        echo 'PROCESSING YOUR INPUTS:<br>';

        echo $_POST['name'].'<br>';
        echo $_POST['email'].'<br>';
        echo $_POST['phone'].'<br>';
        echo '<pre>'. $_POST['msg'] .'</pre><br>';

        // Save it to file, record it to DB, or send via email
    } else {
        ?>

        <form action="?" method="post">
            <table border="0">
                <tr>
                    <td>Name:</td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="email" name="email"></td>
                </tr>
                <tr>
                    <td>Phone:</td>
                    <td><input type="tel" name="phone"></td>
                </tr>
                <tr>
                    <td>Message:</td>
                    <td><textarea cols="50" rows="10" name="msg"></textarea></td>
                </tr>
            </table>
            
            <button type="button">Help</button>
            <button type="reset">Reset</button>
            <button type="submit">Submit</button>
        </form>

        <?php
    }
    ?>

    
</body>
</html>