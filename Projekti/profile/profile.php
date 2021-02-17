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
    <link rel="stylesheet" href="profile.css?s">
</head>

<body>
    <header>
        <?php
        include_once("../header/header.php");
        include('../database/mappers/userMapper.php');
        if (!isset($_SESSION['userId'])) {
            header('Location:../main/index.php');
        }
        ?>
    </header>
    <main>
        <div class="title">
            <h1>User's Profile</h1>
        </div>
        <div class="type">
            <div class="account-label">
                <h1>Account</h1>
            </div>
        </div>
        <form class="user-data">

            <div class="top">
                <div class="textarea-container">
                    <label> Username<span>*</span> </label>
                    <input type="text" name="username" id="username" value="<?php
                                                                            $mapper = new UserMapper();
                                                                            $username = '';
                                                                            if (isset($_SESSION['userId'])) {
                                                                                $username = $mapper->getUserByID($_SESSION['userId'])['username'];
                                                                            }
                                                                            echo $username;
                                                                            ?>" readonly>

                </div>

                <div class="textarea-container">
                    <label> Email address<span>*</span> </label>
                    <input type="email" name="email" id="email" value="<?php
                                                                        $mapper = new UserMapper();
                                                                        $email;
                                                                        if (isset($_SESSION['userId'])) {
                                                                            $email = $mapper->getUserByID($_SESSION['userId'])['email'];
                                                                        }
                                                                        echo $email;
                                                                        ?>" readonly>
                </div>
                <div class="textarea-container">
                    <label> Password <span>*</span></label>
                    <input type="password" name="password " id="password" value="what's here?">
                    <span class="pw-change">Change</span>
                </div>
            </div>
            <div class="bottom hidden">
                <h3>Change Password</h3>
                <div class="current">
                    <label>Current password <span>*</span></label>
                    <input type="password" name="currentpw" id="current-pw">
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
            </div>
            <div class="button-div">
                <button class="button">Save changes</button>
            </div>
        </form>
    </main>
    <script src="profile.js?"></script>
</body>

</html>