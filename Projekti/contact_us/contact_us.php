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
                    <input type="text" class="input" <?php
                                                        if (isset($_SESSION['userId'])) {
                                                            include_once('../database/userMapper.php');
                                                            $mapper = new UserMapper();
                                                            $user = $mapper->getUserByID($_SESSION['userId'])['email'];
                                                            echo "value=\"$user\" disabled";
                                                        } else {
                                                            echo 'placeholder="Email*"';
                                                        }
                                                        ?>>
                </div>
                <textarea name="message" id="message" maxlength="255" placeholder="Message*"></textarea>
                <input href="#" id="submit" name="contact-submit" onclick="validateContact()" value="Submit">
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