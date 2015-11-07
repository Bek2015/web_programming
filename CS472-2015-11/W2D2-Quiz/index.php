<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="submit.php" method="POST">
            <h1>Party Signup:</h1>
            <p>Name: <input type="text" name="name" placeholder="Your name" /></p>
            <p>Are you coming:
                <select name="coming">
                    <option>Yes</option>
                    <option>No</option>
                    <option>Maybe</option>
                </select>
            </p>
            <p>
                Food: <input type="radio" name="food" value="pizza" checked/>Pizza
                <input type="radio" name="food" value="burger"/>Burger
                <input type="radio" name="food" value="pancake"/>Pancake
            </p>
            <p><input type="submit" /></p>
        </form>
    </body>
</html>
