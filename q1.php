<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>Who Wants to Be a Millionaire </title>
	<link rel="stylesheet" href="style.css" />
</head>
<body class="background">
	<?php
	 $name='Score';
	 $value=0;
	 $expire=time()+(60*60*24*7);
	 setcookie($name,$value,$expire);
	 ?>
	<?php
		$_COOKIE['Score']=00;

	?>
	<?php
		$points=$_COOKIE['Score'];
		echo "
			<div class='question1-container'>
					
					<h3> Amount Earned </h3>
					<h3> $$points</h3>
			</div>
		";
		$num=rand(1,18);
		$fh = fopen("questions.txt", "r");
		while($line=fgets($fh)){
			$piece=explode("~", $line);
			if($piece[0]==$num){
				$question=$piece[1];
				$a=$piece[2];
				$b=$piece[3];
				$c=$piece[4];
				$d=$piece[5];
				$correct=$piece[6];
			}
		}
		fclose($fh);
		echo "<br>";
		echo"
			<div class='question1-container'>
				<h1> Question 1:</h1>
					<div>
						<h3> $question </h3>
					</div>
			</div>
		";
		if(strcmp($correct,$a)==2){
			echo "			
			<div class='answer-choices'>
				<div class='first-answer1-choices'>
					<p> <a href='q2.php'> $a </a></p>
					<p> <a href='wrong.html'> $b </a> <p>
				</div>
				<div class='second-answer1-choices'>
					<p> <a href='wrong.html'> $c </a> </p>
					<p> <a href='wrong.html'> $d </a><p>
				</div>
			</div>

		";
		}
		if(strcmp($correct,$b)==2){
			echo "
			
			<div class='answer-choices'>
				<div class='first-answer1-choices'>
					<p> <a href='wrong.html'> $a </a></p>
					<p> <a href='q2.php'> $b </a> <p>
				</div>
				<div class='second-answer1-choices'>
					<p> <a href='wrong.html'> $c </a> </p>
					<p> <a href='wrong.html'> $d </a><p>
				</div>
			</div>

		";
		}
		if(strcmp($correct,$c)==2){
			echo "
			
			<div class='answer-choices'>
				<div class='first-answer1-choices'>
					<p> <a href='wrong.html'> $a </a></p>
					<p> <a href='wrong.html'> $b </a> <p>
				</div>
				<div class='second-answer1-choices'>
					<p> <a href='q2.php'> $c </a> </p>
					<p> <a href='wrong.html'> $d </a><p>
				</div>
			</div>

		";
		}
		if(strcmp($correct,$d)==2){
			echo "
			
			<div class='answer-choices'>
				<div class='first-answer1-choices'>
					<p> <a href='wrong.html'> $a </a></p>
					<p> <a href='wrong.html'> $b </a> <p>
				</div>
				<div class='second-answer1-choices'>
					<p> <a href='wrong.html'> $c </a> </p>
					<p> <a href='q2.php'> $d </a><p>
				</div>

		";


		}
		echo "
		<div class='gif'>
				<img src='img/thinkingsun.gif' alt='thinkingsun'>
			</div> 
		";
	?>

</body>
</html>