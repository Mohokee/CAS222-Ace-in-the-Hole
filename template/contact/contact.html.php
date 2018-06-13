<!doctype html>
<html lang="en">

<head>
    <link rel="icon" type="image/png" href="../images/favicon.png">
    <meta charset="UTF-8">
    <meta name="description" content="
Ace in the Hole Multisport Events is proud to offer running and triathlon events to athletes of all shapes and sizes, national origins, sexual orientations and cultural backgrounds. We offer Events for Every Body..">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
    <title>Contact</title>
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
            <h1>Questions? We'd love to hear from you!</h1>
            <form method="post" action=" " id="inquiryForm">
                <input type="text" name="honeypot" id="honeypot" value="" alt="if you fill this field out then your email will not be sent" />
                <label for="name">Name:</label>
                <input type="text" name="name" id="name">
                <label for="email">E-mail:</label>
                <input type="text" name="email" id="email">
                <label for="select" name="select" id="select">I am contacting because I am an...</label>
                <select name="select" id="select" required>
                    <option value="Athlete">Athlete</option>
                    <option value="Volunteer">Volunteer</option>
                    <option value="Interested">Interested Party</option>>
                </select>
                <label for="question">Question / Comment:</label> 
                <textarea form="inquiryForm" rows="10" cols="50" name="question" id="question"></textarea>
                <input id="submit" type="submit" value="Submit">
            </form>
        </main>

        <?php include '../includes/footer.inc.html.php'; ?>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script id="menuScript" src="../scripts/hamburger3.js"></script>

</body>

</html>
