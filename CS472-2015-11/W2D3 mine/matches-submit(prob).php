<?php
//$name = "Bill";
//$name = filter_input(INPUT_POST, 'name');
//$file = 'singles.txt';
//$lines = file($file);
//$full_data = "";
//$example = array('An example','Another example','One Example','Last example');
//$searchword = 'last';
//$matches = array();
//foreach($lines as $k=>$v) {
//    if(preg_match("/\b$name\b/i", $v)) {
//        $matches[$k] = $v;
//    }
//}
//
//if(strpos($matches, ""))
//
//print_r($opposite_gender);

$member = filter_input(INPUT_POST, 'name');
$lines = file('singles.txt');

$success = FALSE;
$member_data1 = array();
foreach ($lines as $line) {

    if (strpos($line, $member) !== false) {
        //echo "You have a chance" . '<br>' . "Please wait...";
        $success = TRUE;
        //$member_data1 = $line;
        list($Mname, $Mgender, $Mage, $Mpersonality, $Mfavorite_os, $Mseeking_min, $Mseeking_max) = explode(',', $line);
    }
}

if ($success == FALSE) {
    echo "Sorry, you are not signup yet.";
    ?>
    <a href='signup.php'>Sign-up</a>
    <?php
}

//print_r($user_data);
//echo count($user_data);
//$member_data = explode(',', $member_data1);
//list($Mname, $Mgender, $Mage, $Mpersonality, $Mfavorite_os, $Mseeking_min, $Mseeking_max) = $member_data;

//$candidate_data = array();
//foreach ($lines as $line) {
//    $candidate_data = explode(',', $line);
//    list($name, $gender, $age, $personality, $favorite_os, $seeking_min, $seeking_max) = $candidate_data;
//    if ($member != $name && $Mgender != $gender && $age > $Mseeking_min && $age < $Mseeking_max && $Mfavorite_os = $favorite_os && 
//       ($Mpersonality[0] == $personality[0] || $Mpersonality[1] == $personality[1] || $Mpersonality[2] == $personality[2] || $Mpersonality[3] == $personality[3])) {
//        //array_push($candidates, $line);
//        echo $line . '<br>';
//    }
//}
////foreach($candidates as $candidate){
////    echo $candidate . '<br>';
////}
//

foreach (file("singles.txt") as $singlesFile) {
	list($name,$gender,$age,$personality,$favorite_os,$min,$max) = explode(",", $singlesFile);
	if($Mname!== $name && $Mgender != $gender &&$age>=$Mseeking_min && $age<=$Mseeking_max &&$Mfavorite_os == $favorite_os){
		$counter=0;
		for ($i=0; $i <4 ; $i++) { 
			if($Mpersonality[$i] ==$personality[$i]){
				$counter++;
			}
		}
		if($counter>=2){?>

		<div class="match">
			<p>
				<img src="./images/user.jpg" alt="User Profile"/>
				<?=$name?>
			</p>
			<ul>
				<li><strong>gender:</strong> <?=$gender?></li>
				<li><strong>age:</strong> <?=$age?></li>
				<li><strong>type:</strong> <?=$personality?></li>
				<li><strong>OS:</strong> <?=$favorite_os?></li>
			</ul>	
		</div>

		<?php }

	}
}

?>

<h1>Matches for <?=$userName?></h1>



<?php include("bottom.html"); ?>
