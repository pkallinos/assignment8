<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
    </head>
    <body>
        <h1></h1>

        <p></p>
        <!-- f pattern  -->

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
        <footer></footer>

    </body>
</html>
