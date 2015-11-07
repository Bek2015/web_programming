<?php
//if (isset($_GET['error'])) {
//    $error = $_GET['error'];
//}
$error = filter_input(INPUT_GET, 'error');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Retrieve Grade</title>
        <meta charset="utf-8" />
        <style>
            .error {
                color: red;
            }
        </style>
            
    </head>
    <body>
        <h1>Retrieve your grade</h1>

        <?php if ($error) : ?>
            <div class="error"><?= $error ?> </div>
        <?php endif; ?>

            <form action="submitHW.php" method="post" enctype="multipart/form-data">
            <fieldset>
                <legend>About you:</legend>
                <p>Name: <input type="text" name="name" placeholder="Your name"/></p>

                <p>Student ID: <input typ="text" name="sid" placeholder="Student ID"></p>

                <p>Password: <input type="password" name="pass" /></p>

                <p>
                    <label><input type="radio" name="entry" value="2015/05" /> 2015/05</label>
                    <label><input type="radio" name="entry" value="2015/07" /> 2015/07</label>
                    <label><input type="radio" name="entry" value="2015/08" /> 2015/08</label>
                </p>
            </fieldset>

            <fieldset>
                <legend>About assignment</legend>
                <p>Assignment
                    <select name="assignment">
                        <option>W1D1</option>
                        <option>W1D2</option>
                        <option>W1D3</option>
                        <option>W1D4</option>
                        <option>W1D5</option>
                    </select>
                </p>

                <p>
                    <textarea name="hw_report" placeholder="Homework report"></textarea>
                </p>

                <p>
                    Attach your homework here:
                    <input type="file" name="hw" />
                </p>
                
                <p>
                    <input id="honest" type="checkbox" name="honest" />
                    <label for="honest">Trust me!</label>
                </p>
            </fieldset>

            <input type="submit" value="Submit" />
        </form>
    </body>
</html>
