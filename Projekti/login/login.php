<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Styles/generic.css">
    <link rel="stylesheet" href="loginstyle.css?a">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>Login</title>
</head>

<body>
    <header>
        <?php
            include("../header/header.html");
        ?>
    </header>
    <main>
        <div class="panel">
            <form class="login-form" action="">
                <label id="login-label">Member Login</label>
                <div class="user-input">
                    <img src="../icons/login/321.png" alt="User Icon">
                    <input class="login-component input-area" type="text" name="username" id="email"
                        placeholder="Email">
                </div>
                <div class="user-input">
                    <img src="../icons/login/123.png" alt="Password Icon">
                    <input class="login-component input-area " type="password" name="password" id="password"
                        placeholder="*******">
                </div>
                <input class="login-component" id="login-button" type="button" value="LOGIN">
                <div class="login-links">
                    <a href="../Register/register.php">Not a member yet?Register</a>
                    <a href="#">Forgot password</a>
                </div>
            </form>
        </div>
    </main>
    <footer>
        <?php
            include("../footer/footer.html");
        ?>
    </footer>
    <script src="validation.js"></script>
</body>

</html>