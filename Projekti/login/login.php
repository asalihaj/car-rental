<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include("../styles/styles.php");
    ?>
    <link rel="stylesheet" href="loginstyle.css?a">
    <title>Login</title>
</head>

<body>

    <header>
        <?php
        include("../header/header.php");
        if (isset($_SESSION['userId'])) {
            header("Location:../main/index.php");
        }
        ?>
    </header>
    <main>
        <div class="panel">
            <form class="login-form" action="../database/loginValidation.php" method="post">
                <label id="login-label">Member Login</label>
                <div class="user-input">
                    <img src="../icons/login/321.png" alt="User Icon">
                    <div class="user-info">
                        <input class="login-component input-area" type="text" name="email" id="email" placeholder="Email">
                        <!-- <span class="login-error">Test</span> -->
                    </div>
                </div>
                <div class="user-input">

                    <img src="../icons/login/123.png" alt="Password Icon">
                    <div class="user-info">
                        <input class="login-component input-area " type="password" name="password" id="password" placeholder="*******">
                        <!-- <span class="login-error">Test</span> -->
                    </div>
                </div>
                <input class="login-component" id="login-button" name="login-submit" type="submit" value="LOGIN">
                <div class="login-links">
                    <a href="../Register/register.php">Not a member yet?</br>Register</a>
                </div>
            </form>
        </div>
    </main>
    <footer>
        <?php
        include("../footer/footer.php");
        ?>
    </footer>
    <script src="validation.js?a"></script>
</body>

</html>