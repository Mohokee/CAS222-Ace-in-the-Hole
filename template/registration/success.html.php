<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Annual Ace in the Hole MultiSport Weekend Registration</title>
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
                <p>Our records show you submitted the following:<br><br>
                  Name: <?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?><br><br>
                  Email: <?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?><br><br>
                  Phone:<?php echo htmlspecialchars($phone, ENT_QUOTES, 'UTF-8'); ?><br><br>
                  Status: <?php echo htmlspecialchars($aorv, ENT_QUOTES, 'UTF-8'); ?><br><br>
                  Saturday Event: <?php echo htmlspecialchars($event, ENT_QUOTES, 'UTF-8'); ?><br><br>
                  Sunday Event: <?php echo htmlspecialchars($event2, ENT_QUOTES, 'UTF-8'); ?><br><br>
                  T-Shirt Size: <?php echo htmlspecialchars($tshirt, ENT_QUOTES, 'UTF-8'); ?><br><br>
                  Gender: <?php echo htmlspecialchars($gender, ENT_QUOTES, 'UTF-8'); ?><br><br>
                  Emergency Contact: <?php echo htmlspecialchars( $emergname, ENT_QUOTES, 'UTF-8'); ?><br><br>
                  Emergency Phone Number: <?php echo htmlspecialchars( $emergphone, ENT_QUOTES, 'UTF-8'); ?><br><br>
                </p>
            </main>
            <?php include '../includes/footer.inc.html.php'; ?>
        </div>
    </body>
</html>