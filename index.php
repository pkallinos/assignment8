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
        <img src="images/band.jpg" alt="Linkin_Park">

        <p>Linkin Park is an American rock band.They formed in 1996, in the Los Angeles suburb of Agoura Hills, around the core of high school friends Mike Shinoda, Brad Delson, and Rob Bourdon. Joe Hahn and Dave Farrell soon joined, as well as a singer named Mark Wakefield, who left by 1999, when the group was called Hybrid Theory. He was replaced by Chester Bennington, an Arizonan who'd been in a group called Grey Daze.</p>

        <h2>Album</h2>

        <h3>Hybrid Theory</h3>

        <!-- Image from https://en.wikipedia.org/wiki/Hybrid_Theory -->
        <img src="images/hybrid_theory.jpg" alt="Hybrid_Thoery_Art">

        <p>Hybrid Theory is the debut studio album by American rock band Linkin Park, released on October 24, 2000 through Warner Bros. Records. As of 2017, the album has been certified diamond by the RIAA for sales in the United States of over eleven million units, and peaking at number two on the US Billboard 200.</p>

        <h4>Singles</h4>
        <ul>
            <li>"One Step Closer"</li>
            <li>"Crawling"</li>
            <li>"In the End"</li>
        </ul>

        <h3>Meteora</h3>

        <!-- Image from https://en.wikipedia.org/wiki/Meteora_(album) -->
        <img src="images/meteora.jpg" alt="Meteora_Art">

        <p>Meteora is the second studio album by American rock band Linkin Park. It was released on March 25, 2003 through Warner Bros. Records. The album was produced by the band alongside Don Gilmore.</p>

        <h4>Singles</h4>
        <ul>
            <li>"Somewhere I belong"</li>
            <li>"Faint"</li>
            <li>"Numb"</li>
        </ul>

        <h3>Minutes to Midnight</h3>

        <!-- Image From https://en.wikipedia.org/wiki/Minutes_to_Midnight_(Linkin_Park_album) -->
        <img src="images/minutes_to_midnight.jpg" alt="Minutes_to_Midnight_Art">

        <p>Minutes to Midnight is the third studio album by American rock band Linkin Park, released on May 14, 2007, through Warner Bros. Records. The album was produced by Mike Shinoda and Rick Rubin.</p>

        <h4>Singles</h4>
        <ul>
            <li>"What I've Done"</li>
            <li>"Bleed It Out"</li>
            <li>"Shadow of the Day"</li>
        </ul>

        <h3>A Thousand Suns</h3>

        <!-- Image From https://en.wikipedia.org/wiki/A_Thousand_Suns -->
        <img src="images/a_thousand_suns.jpg" alt="A_Thousand_Suns_Art">

        <p>A Thousand Suns is the fourth studio album by American rock band Linkin Park. It was released on September 8, 2010, by Warner Bros. Records. The album was written by the band and was produced by Linkin Park vocalist Mike Shinoda and Rick Rubin, who worked together to produce the band's previous studio album Minutes to Midnight (2007).</p>

        <h4>Singles</h4>
        <ul>
            <li>"The Catalyst"</li>
            <li>"Waiting for the End"</li>
            <li>"Burning in the Skies"</li>
        </ul>

        <h3>Living Things</h3>

        <!-- Image From https://en.wikipedia.org/wiki/Living_Things_(Linkin_Park_album) -->
        <img src="images/living_things" alt="Living_Things_Art">

        <p>Living Things is the fifth studio album by American rock band Linkin Park. It was released under Warner Bros. Records and Machine Shop Recordings on June 20, 2012, in Japan, and throughout the rest of the world during the following week. Production was handled by vocalist Mike Shinoda and Rick Rubin.</p>

        <h4>Singles</h4>
        <ul>
            <li>"Burn it Down"</li>
            <li>"Lost in the Echo"</li>
            <li>"Powerless"</li>
        </ul>

       <h3>The Hunting Party</h3>

        <!-- Image From https://en.wikipedia.org/wiki/The_Hunting_Party_(album) -->
        <img src="images/the_hunting_party.jpg" alt="The_Hutning_Party_Art">

        <p>The Hunting Party is the sixth studio album by American rock band Linkin Park. The album, produced by band members Mike Shinoda and Brad Delson, was released by Warner Bros. Records and Machine Shop on June 13, 2014. It is the first album since Meteora (2003) not to be produced with Rick Rubin, after producing the band's previous three studio albums.</p>

        <h4>Singles</h4>
        <ul>
            <li>"Guitly All the Same"</li>
            <li>"Until It's Gone"</li>
            <li>"Wastelands"</li>
        </ul>

        <h3>One More Light</h3>

        <!-- Image From https://en.wikipedia.org/wiki/One_More_Light -->
        <img src="images/one_more_light.jpg" alt="One_More_Light_Art">

        <p>One More Light is the seventh studio album by American rock band Linkin Park. It was released on May 19, 2017 through Warner Bros. and Machine Shop. It is the last Linkin Park record produced before lead vocalist Chester Bennington's death on July 20, 2017.</p>

        <h4>Singles</h4>
        <ul>
            <li>"Heavy"</li>
            <li>"Talking to Myself"</li>
            <li>"One More Light"</li>
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
                <li><a href="http://www.rollingstone.com/music/artists/linkin-park/biography</li>" target=_blank>Bio</a></li>
                <li><a href="https://en.wikipedia.org/wiki/Hybrid_Theory" target="_blank"></a>Hybrid Theory</li>
                <li><a href="https://en.wikipedia.org/wiki/Meteora_(album)" target="_blank"></a>Meteora</li>
                <li><a href="https://en.wikipedia.org/wiki/Minutes_to_Midnight_(Linkin_Park_album)" target="_blank"></a>Minutes to Midnight</li>
                <li><a href="https://en.wikipedia.org/wiki/A_Thousand_Suns" target="_blank"></a>A Thousand Suns</li>
                <li><a href="https://en.wikipedia.org/wiki/Living_Things_(Linkin_Park_album)" target="_blank"></a>Living Things</li>
                <li><a href="https://en.wikipedia.org/wiki/The_Hunting_Party_(album)" target="_blank"></a>The Hunting Party</li>
                <li><a href="https://en.wikipedia.org/wiki/One_More_Light" target="_blank"></a>One More Light</li>
            </ul>
            
        </footer>

    </body>
</html>
