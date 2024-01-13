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

    if ( !isset($_POST['Name']) ) {
        ?>

        <form action="?" method="post">
            <table border="0">
                <tr>
                    <td>Name:</td>
                    <td><input type="text" name="Name"></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="email" name="Email"></td>
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
    } else {
        // PROCESSING
        ?>

        <h3>FORWARDING THIS MESSAGE OF YOURS NOW...</h3>

        <?php
        $emailBody =
        '<table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <td>Name:</td>
                <td><b>' . $_POST['Name'] . '</b></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><b>' . $_POST['Email'] . '</b></td>
            </tr>
            <tr>
                <td>Phone:</td>
                <td><b>' . $_POST['phone'] .'</b></td>
            </tr>
            <tr>
                <td>Message:</td>
                <td><b><pre>' .$_POST['msg'] . '</pre></b></td>
            </tr>
        </table>

        <p>Thank you!</p>';

        echo $emailBody;

        // Save it to file, record it to DB, or send via email
        mail($_POST['Email'].', ramzxs@gmail.com', 'Web Form', $emailBody, 'From: me@phising.com');
    } ?>    
</body>
</html>