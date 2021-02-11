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
    <link rel="stylesheet" href="profile.css?sd">
</head>

<body>
    <header>
        <?php
        include("../header/header.php");
        ?>
    </header>
    <main>
        <div class="title">
            <h1>User's Profile</h1>
        </div>
        <div class="type">
            <div class="account-label">
                <h2>Account</h2>
            </div>
            <div class="reservations-label">
                <h2>Reservations</h2>
            </div>
        </div>
        <form class="user-data">

            <div class="top">
                <div class="textarea-container">
                    <label>First name <span>*</span></label>
                    <input type="text" name="name" id="name">
                </div>
                <div class="textarea-container">
                    <label>Last name<span>*</span> </label>
                    <input type="text" name="lastname" id="lastName">
                </div>
                <div class="textarea-container">
                    <label>Birthday<span>*</span> </label>
                    <input type="date" name="lastname" id="lastName">
                </div>
                <div class="textarea-container">
                    <label>Gender<span>*</span> </label>
                    <select name="gender">
                        <option value="m">M</option>
                        <option value="f">F</option>
                    </select>
                </div>
                <div class="textarea-container">
                    <label>Country<span>*</span> </label>
                    <select name="country">
                        <option value="ks">Kosovo</option>
                    </select>
                </div>
                <div class="textarea-container">
                    <label>City<span>*</span> </label>
                    <input type="text" name="lastname" id="lastName">
                </div>
                <div class="textarea-container">
                    <label> Username<span>*</span> </label>
                    <input type="text" name="username" id="username">
                </div>
                <div class="textarea-container">
                    <label> Email address<span>*</span> </label>
                    <input type="email" name="email" id="email">
                </div>
                <div class="textarea-container">
                    <label> Phone number <span>*</span></label>
                    <input type="tel" name="phone" id="phone">
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
        <div class="reservations hidden">
            <table class="reservations-table">
                <thead>
                    <tr class="reservation-info">
                        <th>Car</th>
                        <th>Pick up address</th>
                        <th>Drop off address</th>
                        <th>Start date</th>
                        <th>End date date</th>
                        <th>Price/day</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="reservation-data">
                        <td>Test</td>
                        <td>Test</td>
                        <td>Test</td>
                        <td>Test</td>
                        <td>Test</td>
                        <td>Test</td>
                        <td>Test</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
    <script src="profile.js?s"></script>
</body>

</html>