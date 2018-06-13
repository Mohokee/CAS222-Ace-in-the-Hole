<!doctype html>
<html lang="en">

<head>
    <link rel="icon" type="image/png" href="images/favicon.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
    <title>Ace in the Hole Multisport Events</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/helper.css">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Facebook code -->
    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));

    </script>

    <div class="wrapper">
        <?php include 'includes/nav.inc.html.php'; ?>
        <?php include 'includes/header.inc.html.php'; ?>
        <main>
            <h1>ANNUAL ACE IN THE HOLE MULTISPORT WEEKEND</h1>

            <!-- Slideshow container -->
            <div class="slideshow-container">

                <!-- Full-width images with number and caption text -->
                <div class="mySlides fade">
                    <div class="numbertext">1 / 3</div>
                    <img src="images/cycle.jpg" style="width:100%" alt="Cyclists">
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">2 / 3</div>
                    <img src="images/swim%20(2).jpg" alt="Swimmers in Open Water" style="width:100%">
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">3 / 3</div>
                    <img src="images/run.JPG" alt="Runners in the marathon" style="width:100%">
                </div>

                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <br>

            <!-- The dots/circles -->
            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>

            <p>The Annual Ace in the Hole MultiSport Weekend is a legendary event in the Oregon triathlon and running community. It has become a traditional destination race for athletes from across the nation. </p>
            <p>There is something for every level of athletic ability. The weekend includes a first timer triathlon, a sprint, Olympic, and Half-Iron triathlons and 10K and Half marathon runs. Come to experience your first race or come to compete to win, but make sure you come to have fun!</p>


            <section id="features" class="section group">
                <div class="col span_4_of_12">
                    <h2>CURRENT WEATHER</h2>
                    <a href="https://www.accuweather.com/en/us/portland-or/97209/weather-forecast/350473" class="aw-widget-legal">
                    </a>
                    <div id="awcc1527701568417" class="aw-widget-current" data-locationkey="350473" data-unit="f" data-language="en-us" data-useip="false" data-uid="awcc1527701568417"></div>
                    <script type="text/javascript" src="https://oap.accuweather.com/launch.js"></script>

                </div>
                <div class="col span_4_of_12">
                    <h2>TWITTER</h2>
                    <blockquote class="twitter-tweet tw-align-center" data-lang="en">
                        <p lang="en" dir="ltr">Fantastic weather for training! Can&#39;t wait to get in the water for open water swims!</p>&mdash; CAS 222 (@pcccas222) <a href="https://twitter.com/pcccas222/status/994599695136653312?ref_src=twsrc%5Etfw">May 10, 2018</a></blockquote>


                </div>

                <div class="col span_4_of_12">
                    <h2>FACEBOOK</h2>
                    <div class="fb-post" data-href="https://www.facebook.com/cas222cascade/posts/406694239794303" data-width="auto" data-show-text="true">
                        <blockquote cite="https://www.facebook.com/cas222cascade/posts/406694239794303" class="fb-xfbml-parse-ignore">
                            <p>Looking forward to seeing completed sites!</p>Posted by <a href="https://www.facebook.com/cas222cascade/">CAS 222</a> on&nbsp;<a href="https://www.facebook.com/cas222cascade/posts/406694239794303">Thursday, May 10, 2018</a></blockquote>
                    </div>

                </div>
            </section>

            <h1>ABOUT ACE IN THE HOLE MULTISPORT EVENTS</h1>
            <p>

                Ace in the Hole Multisport Events is proud to offer running and triathlon events to athletes of all shapes and sizes, national origins, sexual orientations and cultural backgrounds. We offer Events for Every Body.
            </p>

        </main>

        <?php include 'includes/footer.inc.html.php'; ?>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script id="menuScript" src="scripts/hamburger3.js"></script>
    <script src="scripts/slideshow.js"></script>
    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

</body>

</html>
