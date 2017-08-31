<?php
/**
 * Created by PhpStorm.
 * User: CGPep
 * Date: 24/08/2017
 * Time: 14:37
 */


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link type="text/css" rel="stylesheet" href="inc/clock_assets/flipclock.css" />
    </head>
<body>

    <h2>Hoe wist Anton dat Diederik met Celia afgesproken had?</h2>

    <img src="https://media.giphy.com/media/3o6UBil4zn1Tt03PI4/giphy.gif" alt="">

    <?php if(time() > 1504182600) {

        echo "<p><b>Proet zei aan de telefoon:</b> Sorry ik moet gaan. Had afgesproken met Celia en ze is net aangekomen.</p>";

    } else { ?>

        <div class="clock-builder-output"></div>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script type="text/javascript" src="inc/clock_assets/flipclock.js"></script>
        <style text="text/css">body .flip-clock-wrapper ul li a div div.inn, body .flip-clock-small-wrapper ul li a div div.inn { color: #CCCCCC; background-color: #333333; } body .flip-clock-dot, body .flip-clock-small-wrapper .flip-clock-dot { background: #323434; } body .flip-clock-wrapper .flip-clock-meridium a, body .flip-clock-small-wrapper .flip-clock-meridium a { color: #323434; }</style>
        <script type="text/javascript">
            $(function(){
                FlipClock.Lang.Custom = { days:'Days', hours:'Hours', minutes:'Minutes', seconds:'Seconds' };
                var opts = {
                    clockFace: 'DailyCounter',
                    countdown: true,
                    language: 'Custom'
                };
                var countdown = 1504182600 - ((new Date().getTime())/1000); // from: 08/31/2017 02:30 pm +0200
                countdown = Math.max(1, countdown);
                $('.clock-builder-output').FlipClock(countdown, opts);
            });
        </script>

    <?php } ?>


</body>
</html>



