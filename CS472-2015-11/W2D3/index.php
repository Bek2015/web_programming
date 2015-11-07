<?php 
$error = filter_input(INPUT_GET, "error"); 
$username = filter_input(INPUT_COOKIE, "username");

?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>SQL Inject Example</title>
        <style>
            #container {
                width: 230px;
                position: absolute;
                left: 50%;
                top: 40%;
                margin-left: -125px;
            }
            h1 {
                margin-bottom: 0px;
            }
            #form_border {
                padding: 20px;
                border: 1px solid black;
                line-height: 1.5em;
            }
            .error {
                color: red;
            }
        </style>
    </head>
    <body>
        <div id="container">
            <h1>Please Login:</h1>
            <div id="form_border">
                <form action="login.php" method="post">
                    <div class="error"><?= $error ?></div>
                    <input type="text" name="user" placeholder="username" 
                           value="<?= $username ?>" /><br />
                    <input type="password" name="pass" placeholder="password" /> <br />
                    <label>Remember me: <input type="checkbox" name="remember" 
                            <?= $username ? 'checked' : "" ?> /></label> <br />
                    <input type="submit" />
                </form>
            </div>
        </div>
    </body>
</html>
