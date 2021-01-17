<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <?php
    include("../styles/styles.php");
    ?>
    <link rel="stylesheet" href="contactstyle.css">
</head>

<body>
    <header>
        <?php
        include("../header/header.php");
        ?>
    </header>
    <main>
        <div class="contact-panel">
            <form class="contact-form">
                <label for="message">Contact Us</label>
                <div class="user-info">
                    <input type="text" class="input" placeholder="Full Name">
                    <input type="text" class="input" placeholder="Email*">
                </div>
                <textarea name="message" id="message" maxlength="300" placeholder="Message*"></textarea>
                <a href="#" id="submit" onclick="validateContact()">Submit</a>
            </form>
        </div>
    </main>
    <footer>
        <?php
        include("../footer/footer.php");
        ?>
    </footer>
    <script src="contactvalidator.js"></script>
</body>

</html>