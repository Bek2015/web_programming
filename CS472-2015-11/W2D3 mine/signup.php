<?php include("top.html"); ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>


    <body>

        <div>
            <form action = "signup-submit.php" method="post">
                <fieldset>
                    <legend> New User Signup: </legend>
                    <p> <strong>Name:</strong>
                        <input type ="text" name ="name" size='16'/>
                    </p>
                    <p> <strong>Password:</strong>
                        <input type ="password" name ="password" size='16'/>
                    </p>
                    <p><strong>Gender:</strong>
                        <input type ="radio" name="gender" value="M"/> Male
                        <input type ="radio" name="gender" value="F"/> Female
                    </p>
                    <p><strong>Age:</strong>
                        <input type ="text" name ="age" size="6" maxlength="2"/>
                    </p>
                    <p><strong>Personality type:</strong>
                        <input type ="text" name ="personalitytype" size="6" maxlength="4"/> <a href="http://www.humanmetrics.com/cgi-win/jtypes2.asp">(Don't know your type?)</a>
                    </p>
                    <p><strong>Favorite OS:</strong>
                        <select name="favorite_os">
                            <option selected>Windows</option>
                            <option>Mac OS X</option>
                            <option>Linux </option>

                        </select>
                    </p>
                    <p><strong>Seeking age:</strong>
                        <input type ="text" name="seeking_min" placeholder="min" size="6" maxlength="2"/> to 
                        <input type ="text" name="seeking_max" placeholder="max" size="6" maxlength="2"/> 
                    </p>
                    
                    <p>
                        <input type="submit" value="Sign Up"/>
                    </p>
                </fieldset>
            </form>
        </div>
    </body>
</html>
<?php include("bottom.html"); ?>