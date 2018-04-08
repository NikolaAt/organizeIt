<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="form.css">
    <link rel='shortcut icon' type='image/x-icon' href='../favicon.ico'/>
</head>
<body>
<a id="homepageRedir" href="../index.php">Home page</a>
<form method="post" id="form">
    <fieldset>
        <legend>Register your new notebook</legend>
        <div id="message"><?= $_SESSION['messageFormError']?></div>
        <div>

            <input type="text" name="firstName" placeholder="FirstName" id="firstName" required >
        </div>
        <div>

            <input type="text" name="lastName" placeholder="LastName" id="lastName" required >
        </div>
        <div>

            <input type="text" name="username" placeholder="Username" id="username" required >
        </div>
        <div>

            <input type="password" name="password" placeholder="Password" id="password" required >
        </div>
        <div>

            <input type="password" name="confirm" placeholder="Confirm Password" id="confirm" required >
        </div>
        <div>

            <input type="email" name="email" placeholder="Email" id="email" required >
        </div>
        <div >
            <label for="birthDate" id="birthLabel">Birth Date</label>
            <input  type="date" name="birthDate" placeholder="Birth Date" id="birthDate" required >
        </div>

        <div>
            <button type="submit" name="submit">Register</button>
            <button type="reset" name="reset">Clear!</button>
        </div>
    </fieldset>
</form>

</body>
</html>

<!--
<div>
                <label for="firstName">First Name:</label>
                <input type="text" name="firstName" placeholder="FirstName" id="firstName" required >
            </div>
            <div>
                <label for="lastName">Last Name:</label>
                <input type="text" name="lastName" placeholder="LastName" id="lastName" required >
            </div>
            <div>
                <label for="username">Username:</label>
                <input type="text" name="username" placeholder="Username" id="username" required >
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" name="password" placeholder="Password" id="password" required >
            </div>
            <div>
                <label for="confirm">Confirm Password:</label>
                <input type="password" name="confirm" placeholder="Confirm Password" id="confirm" required >
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" placeholder="Email" id="email" required >
            </div>
            <div>
                <label for="birthDate">Birth Date</label>
                <input type="date" name="birthDate" placeholder="Birth Date" id="birthDate" required >
            </div>
--!>
