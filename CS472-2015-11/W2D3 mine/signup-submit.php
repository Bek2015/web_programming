<?php include("top.html"); ?>
<?php include("db-connection.php"); ?>
<?php
    $name = filter_input(INPUT_POST, "name");
    $password = filter_input(INPUT_POST, "password");
    $pass_hash = password_hash($password, PASSWORD_DEFAULT);
    $gender = filter_input(INPUT_POST, "gender");
    $age = filter_input(INPUT_POST, "age");
    $personalitytype = filter_input(INPUT_POST, "personalitytype");
    $arrayPersonality = str_split($personalitytype);
    $type1 = $arrayPersonality[0];
    $type2 = $arrayPersonality[1];
    $type3 = $arrayPersonality[2];
    $type4 = $arrayPersonality[3];
    $favoriteos = filter_input(INPUT_POST, "favorite_os");
    $seekingagemin = filter_input(INPUT_POST, "seeking_min");
    $seekingagemax = filter_input(INPUT_POST, "seeking_max");

    $stmt = $db->prepare("INSERT INTO singles VALUES(NULL, :name, :pass_hash, :gender, 
            :age, :type1,:type2, :type3, :type4, :os, :min, :max)");
    $stmt->execute(array(':name' => $name,':pass_hash'=>$pass_hash,':gender'=>$gender,':age'=>$age,':type1'=>$type1,
            ':type2'=>$type2,':type3'=>$type3,':type4'=>$type4,':os'=>$favoriteos,':min'=>$seekingagemin,':max'=>$seekingagemax));

?>

<html>
<p><strong>Thank you!</strong></p>
<p>Welcome to NerdLuv,<strong><?= $name; ?></strong></p>
<p>Now <a href='matches.php'>log in to see your matches!</a></p>

</html>
<?php include("bottom.html"); ?>