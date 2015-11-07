
<?php include("top.html"); ?>

<?php
session_start();
$error = filter_input(INPUT_SESSION, 'error');
if (isset($_SESSION['error'])) {
    $error = $_SESSION['error'];
    echo $error;
    unset($_SESSION['error']);
}

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
    

        <?php if ($error) : ?>
            <div class="error"><?= $error ?> </div>
        <?php endif; ?>


    <div>
        <form action = "login-submit.php" method="post">
            <fieldset>
                <legend> Returning User: </legend>
                <p> <strong>Name:</strong>
                    <input type ="text" name ="name" size='16' />
                </p>
                
                <p> <strong>Password:</strong>
                    <input type ="password" name ="password" size='16' />
                </p>

                <p>
                    <input type="submit" value="View My Matches"/>
                </p>
            </fieldset>
        </form>
    </div>
<?php include("bottom.html"); ?>