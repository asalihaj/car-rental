<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <?php
    include("../styles/styles.php");
    ?>
    <link rel="stylesheet" href="profile.css?as">
</head>
<body>
<header>
        <?php
        include("../header/header.php");
        ?>
    </header>
    <div class="title">
        <h1>User's Profile</h1>
    </div>
   <div class="profile">
        <div class="top">
            <div class="left">
                <label > First name <span>*</span></label>
                <input type="text" name="name" id="name">
                <label > Email address<span>*</span>  </label>
                <input type="email" name="email" id="email">
                <label > Username<span>*</span> </label>
                <input type="text" name="username" id="username">
            </div>
            <div class="right">
                <label > Last name<span>*</span> </label>
                <input type="text" name="lastname" id="lastName">
                <label > Phone number <span>*</span></label>
                <input type="tel" name="phone" id="phone">
                <label > Password <span>*</span></label>
                <input type="password" name="password " id="password">
            </div>
        </div>
        <div class="bottom">
            <h3>Change Password</h3>
            <div class="current">
                <label>Current password <span>*</span></label>
                <input type="text" name="currentpw" id="current-pw">
            </div>
            <div class="change-pw">
                <div class="new-pw">
                <label>New password <span>*</span></label>
                <input type="password" name="new-pw" id="new-pw">
                    </div>
                    <div class="confirm-pw">
                        <label>Confirm password <span>*</span></label>
                        <input type="password" name="confirm-pw" id="confirm-pw">
                    </div>
            </div>
            <div class="button-div">
                <a href="" class="button">Save changes</a>
                
            </div>
        </div>
    </div>
    <footer>
        <?php
        include("../footer/footer.php");
        ?>
    </footer>
</body>
</html>