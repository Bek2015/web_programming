<?php include("top.html"); ?>
<?php include("db-connection.php"); ?>

<!-- CSE 190 M, Homework 4 (NerdLuv)
     This provided file is the front page that links to two of the files you are going
     to write, signup.php and matches.php.  You don't need to modify this file. -->
<?php
	$name=filter_input(INPUT_POST,'name');
	$password=filter_input(INPUT_POST,'password');
	$stmt=$db->prepare("SELECT * FROM singles WHERE name=:name");
	$stmt->execute(array(":name"=>$name));
	foreach($stmt as $row){
		$hash=$row['pass'];
		$gender=$row['gender'];
		$min=$row['min'];
		$max=$row['max'];
		$type1=$row['type1'];
		$type2=$row['type2'];
		$type3=$row['type3'];
		$type4=$row['type4'];
		$os=$row['os'];
	}
?>
<strong>Matches for <?= $name ;?></strong>
<?php 
	if(password_verify($password,$hash)){
		$stmt1=$db->prepare("SELECT * FROM singles WHERE gender <> :gender
		AND age >= :min AND age <= :max AND os = :os AND
		(type1 = :type1 OR type2 = :type2 OR type3 = :type3 OR type4 = :type4)");
		$stmt1->execute(array(":gender"=>$gender,":min"=>$min,":max"=>$max,":os"=>$os,":type1"=>$type1,":type2"=>$type2,":type3"=>$type3,":type4"=>$type4));
		foreach($stmt1 as $row){
?>
			<div class="match">
				<p><?=$row['name'];?>
					<img src="images/user.jpg"/>
					<ul>
						<li><strong>gender:</strong><?=$row['gender'];?></li>
						<li><strong>age:</strong><?=$row['age'];?></li>
						<li><strong>type:</strong><?=$row['type1'] . $row['type2'] . $row['type3'] . $row['type4']; ?></li>
						<li><strong>os:</strong><?=$row['os'];?></li>
					</ul>
				</p>
			</div>
<?php
		}
	}
        
        else{
            header("Location: login.php? error = error");
        }
?>
<?php include("bottom.html"); ?>
