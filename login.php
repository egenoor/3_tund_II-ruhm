<?php
	
	echo hash("sha512", "Ege");
	
	//<?php echo $m;? >
	//<?=$m;? >



	
	//var_dump($_GET);
	//echo "<br>";
	//var_dump($_POST);
	
	//MUUTUJAD	
	$signupEmailError = "";
	$signupPasswordError = "";
	$signupCommentError = "";
	$signupEmail = "";
	$signupGender = "";
	$signupWebsite = "";
	
	// kas e/post oli olemas
	if ( isset ( $_POST["signupEmail"] ) ) {
		
		if ( empty ( $_POST["signupEmail"] ) ) {
			
			// oli email, kuid see oli tühi
			$signupEmailError = "See väli on kohustuslik!";
			
		} else {
			
			//email olemas
			$signupEmail = $_POST["signupEmail"];
			
		}
		
	}
	
	
	if ( isset ( $_POST["signupPassword"] ) ) {
		
		if ( empty ( $_POST["signupPassword"] ) ) {
			
			// oli password, kuid see oli tühi
			$signupPasswordError = "See väli on kohustuslik!";
			
		} else {
			
			// tean et parool on ja see ei olnud tühi
			// VÄHEMALT 8
			
			if ( strlen($_POST["signupPassword"]) < 8 ) {
				
				$signupPasswordError = "Parool peab olema vähemalt 8 tähemärkki pikk";
				
			}
			
		}
		
		if (isset ( $_POST["comment"] ) ) {
		
		if ( empty ( $_POST["comment"] ) ) {
			
			//kommentaar oli tühi
			$signupCommentError = "See väli on kohustuslik!" ;
		}
		
	}
		
		
	}
	
	if ( isset ( $_POST["signupGender"] ) ) {
		
		if (!empty ( $_POST["signupGender"] ) ) {
			
			
			$signupGender = $_POST["signupGender"];
			
		}
		
	}
	
	if ( isset ( $_POST["signupWebsite"] ) ) {
		
		if (!empty ( $_POST["signupWebsite"] ) ) {
			
			
			$signupWebsite = $_POST["signupWebsite"];
			
		}
		
	}
	
	
	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Sisselogimise lehekülg</title>
	</head>
	<body>

		<h1>Logi sisse</h1>
		
		<form method="POST">
			
			<label>E-post</label><br>
			<input name="loginEmail" type="text">
			
			<br><br>
			
			<input name="loginPassword" type="password" placeholder="Parool">
			
			<br><br>
			
			<input type="submit" value="Logi sisse">
			
		</form>
		
		<h1>Loo kasutaja</h1>
		
		<form method="POST">
			
			<label>E-post</label><br>
			<input name="signupEmail" type="text" value="<?=$signupEmail;?>"> <?php echo $signupEmailError; ?>
			
			<br><br>
			
			<input name="signupPassword" type="password" placeholder="Parool"> <?php echo $signupPasswordError; ?>
			
			<br><br>
			
			<label>Lehekülg</label><br>
			<input name="signupWebsite" type="text" value="<?=$signupWebsite;?>">
			
			<br><br>
			
			<label>Kommentaar</label><br>
			<textarea name="comment" rows="5" cols="40"></textarea> <?php echo $signupCommentError; ?>
			
			<br><br>
			
			<label>Vanus</label><br>
			<input name="signupAge" type="age">
			
			<br><br>
			<label>Sugu</label><br>
			
			<?php if($signupGender == "male") { ?>
			<input type="radio" name="signupGender" value="male" checked> Mees<br>
			<?php }else { ?>
			
			<input type="radio" name="signupGender" value="male"> Mees<br>
			<?php } ?>
		
			<?php if($signupGender == "female") { ?>
			<input type="radio" name="signupGender" value="female" checked> Naine<br>
			<?php }else { ?>
			<input type="radio" name="signupGender" value="female"> Naine<br>
			<?php } ?>
			
			
			<br><br>
			
			<input type="submit" value="Loo kasutaja">
			
		</form>
		
		
	</body>
</html>