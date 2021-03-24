
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Dashboard!</title>
        <link rel="shortcut icon" href="favi/unlock.png" type="image/x-icon" />
        <link rel="stylesheet" href="register.css" />
      </head>
    <div class="navbar">
        <div style="margin-left: 1%; float: left">
          <a class="buttons" href="home.html">Logout</a>
        </div>
        <div style="width: 90%; text-align: center">
          <?php 
            $user = $_GET["uname"]; 
          ?>
          <h1>Welcome back, <?php echo $user; ?>!</h1>
          
    
        </div>
        <img src="img/wwtbam.png" alt="million" class="pic" width="100px">
        
    </div>
    <body class="home_background" style="background-color: lightblue;">
      <div class="rule-set">
        <h2> How to Play: <h2>
        <ul>
          <li> There are 10 questions in total that each have four different answer choices. </li>
          <li> If you answer a question correctly, you can either choose to go to the next question to earn more money or quit. </li>
          <li> If you answer a question incorrectly, you lose the game. </li>
          <li> Try to answer as many questions as possible. If you answer all 10 questions correctly, you win! </li> 
        </ul>  
      </div>
      <div class="right" style="display:flex; justify-content:center;">
        <div class="leaderboard">
          <h2> Leaderboard </h2>
          <ul>
            <li> Jonathan: $1000000 </li>
            <li> Hiren: $1000000 </li>
            <li> Noah: $1000000 </li>
            </ul>
        </div>
      </div>
      <div class="centerpre">
        <a class="buttons" href="q1.php"> Start Game! </a>
      </div>
  </body>
</html>