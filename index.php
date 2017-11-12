<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Linkin Park</title>
    </head>
    <body>
        <h1>Linkin Park</h1>

        <h2>Bio</h2>
        <!-- Image from https://blackgirlnerds.com/linkin-park-meant-depressed-black-girl-nerd/ -->
        <img src="images/band.jgp" alt="Linkin_Park">

        <p>Linkin Park is an American rock band.They formed in 1996, in the Los Angeles suburb of Agoura Hills, around the core of high school friends Mike Shinoda, Brad Delson, and Rob Bourdon. Joe Hahn and Dave Farrell soon joined, as well as a singer named Mark Wakefield, who left by 1999, when the group was called Hybrid Theory. He was replaced by Chester Bennington, an Arizonan who'd been in a group called Grey Daze..</p>

        <h2>Album</h2>

        <h3>Hybrid Theory</h3>
        <!-- Image from https://en.wikipedia.org/wiki/Hybrid_Theory -->
        <img src="images/hybrid_theory.jpg" alt="Hybrid_Thoery_Art">

        <p>Hybrid Theory is the debut studio album by American rock band Linkin Park, released on October 24, 2000 through Warner Bros. Records. As of 2017, the album has been certified diamond by the RIAA for sales in the United States of over eleven million units, and peaking at number two on the US Billboard 200.</p>

        <h4>Singles</h4>
        <ul>
            <li>"One Step Closer"</li>
            <li>"Crawling"</li>
            <li>"Papercut"</li>
            <li>"In the End"</li>
        </ul>



        

        <form method="POST" action="survey-processor.php">
            
            <h2>Basic Information</h2>

            <label for="name">First Name:</label>
            <input type="text" name="firstname" id="firstname">
            <br>
            <br>

            <label for="name">Last Name:</label>
            <input type="text" name="lastname" id="lastname">
            <br>
            <br>
            
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
            
            <br>

            <fieldset>
                <h2>Which Linkin Park songs do you like?</h2>

                <input type="checkbox" name="crawling-check" id="crawling-check" value="crawling">
                <label for="crawling-check">Crawling</label>
                <br>
                <br>

                <input type="checkbox" name="intheend-check" id="intheend-check" value="intheend">
                <label for="intheend-check">In the End</label>
                <br>
                <br>

                <input type="checkbox" name="faint-check" id="faint-check" value="faint">
                <label for="faint-check">Faint</label>
                <br>
                <br>

                <input type="checkbox" name="numb-check" id="numb-check" value="numb">
                <label for="numb-check">Numb</label>
                <br>
                <br>

                <input type="checkbox" name="what-check" id="what-check" value="what">
                <label for="what-check">What I've Done</label>
                <br>
                <br>

                <h2>Which song is your favorite?</h2>

                <input type="radio" name="favorite" id="crawling-radio" value="crawling">
                <label for="crawling-radio">Crawling</label>
                <br>
                <br>

                <input type="radio" name="favorite" id="intheend-radio" value="intheend">
                <label for="intheend-check">In the End</label>
                <br>
                <br>

                <input type="radio" name="favorite" id="faint-radio" value="faint">
                <label for="faint-check">Faint</label>
                <br>
                <br>

                <input type="radio" name="favorite" id="numb-radio" value="numb">
                <label for="numb-check">Numb</label>
                <br>
                <br>

                <input type="radio" name="favorite" id="what-radio" value="what">
                <label for="what-radio">What I've Done</label>
                <br>
                <br>

            </fieldset>

            <label for="message">Why is this song your favorite?</label>
            <br>
            <textarea name="message" id="message"></textarea>
            <br>
            <br>

            <input type="submit" name="submit" id="submit" value="Submit">

        </form>

        <!-- site source of our info -->
        <footer>
            <h2>Source</h2>
            <ul>
                <li><a href = 'http://www.rollingstone.com/music/artists/linkin-park/biography</li>' target = _blank>Bio</a></li>
            </ul>
            
        </footer>

    </body>
</html>
