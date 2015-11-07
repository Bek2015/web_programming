<?php
session_start();

if (isset($_SESSION['error'])) {
    $error = $_SESSION['error'];
    unset($_SESSION['error']);
}
//$error = filter_input(INPUT_SESSION, 'error');
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

            <form action="submitHW.php" method="post">
            <fieldset>
                <legend>About you:</legend>
                <p>Student ID: <input typ="text" name="sid" placeholder="Student ID"></p>

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

            </fieldset>

            <input type="submit" value="Submit" />
        </form>
    </body>
</html>
