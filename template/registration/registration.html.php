<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/png" href="../images/favicon.png">
    <title>Registration</title>
    <meta name="description" content="Reserve your spot in the Annual Ace in the Hole MultiSport Weekend. Prices range from $50 to $240.">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
    <title>Registration</title>
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
            <h1>ANNUAL ACE IN THE HOLE MULTISPORT WEEKEND REGISTRATION</h1>


            <table style="width:100%">
                <tr>
                    <td>
                        <h2>EVENT PRICING</h2>
                    </td>
                    <td>
                        <h2>PRICE</h2>
                    </td>
                </tr>
                <tr>
                    <td>Long Course</td>
                    <td>$240</td>
                </tr>
                <tr>
                    <td>Olympic</td>
                    <td>$110</td>
                </tr>
                <tr>
                    <td>10K</td>
                    <td>$50</td>
                </tr>
                <tr>
                    <td>Half Marathon</td>
                    <td>$75</td>
                </tr>
                <tr>
                    <td>Sprint</td>
                    <td>$90</td>
                </tr>
                <tr>
                    <td>Try-a-Tri</td>
                    <td>$65</td>
                </tr>
                <tr>
                    <td>Splash N' Dash</td>
                    <td>$25, or free with adult registration</td>
                </tr>
            </table>

            <h2>COST INCLUDES:</h2>
            <ul>
                <li>Food &amp; Beer </li>
                <li>Access to the weekend’s live entertainment &amp; Fitness Expo</li>
                <li>Commemorative Finisher medal</li>
                <li>Accurate Chip Timing for competitive races</li>
                <li>Ace in the Hole MultiSport Weekend Tech Shirt</li>
                <li>Post-event party &amp; entertainment</li>
            </ul>

            <h2>PACKET PICK UP</h2>

            <p>All packet pick up will occur at Why Worry Racing, 123 NW Everett, Portland OR. Packet pick up hours: Thursday 8-5, Friday 9-noon. No day of event packet pick up.</p>

            <h2>WHAT TO BRING</h2>

            <p>Watch the weather closely. The show goes on no matter what the weather is doing.</p>

            <p>You must wear your chip timing piece during the entire event. You will be given a band that will hold your chip timing piece around your ankle throughout the entire event. Be sure that it is snapped tightly. Be sure to have your Chip Timing piece on before you start the race and be sure to step over the timing mats after each segment of the race. If you are wearing a wet-suit, make sure the timing piece goes under your wetsuit otherwise, you will have a very difficult time getting off your wet suit.</p>

            <p>Swim: Wetsuits are optional for the swim but will provide buoyancy and warmth. However, many people opt for no wetsuit for a triathlon so no worries. We will provide you with a swim cap but you will want to bring your own goggles.</p>

            <p>Bike: A biking helmet is mandatory. You will also receive 2 stickers in your package with your race number on them. The small sticker should go on the front of your helmet. The bigger sticker will wrap around your bike frame. Road or mountain bikes are acceptable. For safety reasons, be sure to have end-caps on the end of your handle-bars.</p>

            <p>Run: You must finish the race with your bib number on the front of you. Some people choose to pin it on at the beginning of the race and have it on for the whole event so they don’t have to worry about it. Others pin it on a singlet that they put on once they finish the swim before they head out for the bike. Others use an elastic racing strap that they pin their bib number to and then quickly strap it on before they leave for the run. Use whatever option feels best for you.</p>

            <p>Remember to bring a change of clothing so you can enjoy the post-event festivities.</p>
            <h2>REGISTER</h2>
            <div id="registration">
                <form method="post" action=" ">
                    <input type="text" name="honeypot" id="honeypot" value="" alt="if you fill this field out then your email will not be sent" />
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" required>

                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" required>

                    <label for="phone">Phone:</label>
                    <input type="tel" name="phone" id="phone">

                    <select size="1" name="aorv" id="aorv">
                        <option>Athlete or Volunteer?</option>
                        <option value="Athlete">Athlete</option>
                        <option value="Volunteer">Volunteer</option>
                    </select>

                    <select size="1" name="event" id="event">
                        <option>Choose Your Event for Saturday, June 23</option>
                        <option value="Long Course">Long Course - $240</option>
                        <option value="Olympic">Olympic - $110</option>
                        <option value="10k">10k - $50</option>
                        <option value="Half Marathon">Half Marathon - $75</option>
                    </select>

                    <select size="1" name="event2" id="event2">
                        <option>Choose Your Event for Sunday, June 24</option>
                        <option value="Sprint">Sprint - $90</option>
                        <option value="Try a tri">Try-a-Tri - $65</option>
                        <option value="Try a tri">Splash N' Dash - $25 (free with adult registration)</option>
                    </select>

                    <select size="1" name="tshirt" id="tshirt">
                        <option>Pick your T-shirt size</option>
                        <option value="xs">XS</option>
                        <option value="s">S</option>
                        <option value="m">M</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>
                        <option value="XXL">XXL</option>
                        <option value="XXXL">XXXL</option>
                        <option value="XXXXL">XXXXL</option>
                        <option value="XXXXXL">XXXXXL</option>
                    </select>

                    <select size="1" name="gender" id="gender">
                        <option>Gender</option>
                        <option value="non binary">Non-Binary</option>
                        <option value="female">Female</option>
                        <option value="male">Male</option>
                    </select>

                    <label for="emergname">Emergency Contact Name:</label>
                    <input type="text" name="emergname" id="emergname" required>

                    <label for="emergphone">Emergency Contact's Phone Number:</label>
                    <input type="tel" name="emergphone" id="emergphone">


                    <input id="mysubmit" type="submit" value="Submit">
                </form>
            </div>

        </main>
        <?php include '../includes/footer.inc.html.php'; ?>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script id="menuScript" src="../scripts/hamburger3.js"></script>
</body>

</html>
