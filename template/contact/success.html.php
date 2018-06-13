<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="
Ace in the Hole Multisport Events is proud to offer running and triathlon events to athletes of all shapes and sizes, national origins, sexual orientations and cultural backgrounds. We offer Events for Every Body..">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
    <title>Ace in the Hole Multisport Events</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/helper.css">
    <link rel="stylesheet" href="../css/grid.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
    <body>
        <div class="wrapper">
            <?php include '../includes/nav.inc.html.php'; ?>
            <?php include '../includes/header.inc.html.php'; ?>
            <main>
                <h1>Thank you!</h1>
                <p>We will get in touch with you soon!<br>
                  Name: <?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?><br>
                  Email: <?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?><br>
                  I am an: <?php echo htmlspecialchars($select, ENT_QUOTES, 'UTF-8'); ?><br>
                  Question / Comment:<?php echo htmlspecialchars($question, ENT_QUOTES, 'UTF-8'); ?><br>
                </p>
            </main>
            <?php include '../includes/footer.inc.html.php'; ?>
        </div>
    </body>
</html>