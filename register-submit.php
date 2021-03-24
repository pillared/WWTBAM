<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register!</title>
    <link rel="shortcut icon" href="favi/lock.png" type="image/x-icon" />
    <link rel="stylesheet" href="register.css" />
  </head>
  <body class="body">
    <div class="navbar">
      <div style="margin-left: 1%; float: left">
        <a class="buttons" href="home.html">Home</a>
      </div>
      <div style="width: 90%; text-align: center">
        <h1>Submission</h1>
      </div>
      <div style="margin-right: 1%; float: right">
        <a class="buttons" href="login.html">Login</a>
      </div>
    </div>
    <div class="centerpre">
        <!-- <dl>
            <dt>First Name</dt>
            <dd><?= $_POST["fname"]; ?></dd>
            <dt>Last Name</dt>
            <dd><?= $_POST["lname"]; ?></dd>
            <dt>Email Address</dt>
            <dd><?= $_POST["email"]; ?></dd>
            <dt>Confirm Email Address</dt>
            <dd><?= $_POST["cemail"]; ?></dd>
            <dt>Username</dt>
            <dd><?= $_POST["uname"]; ?></dd>
            <dt>Password</dt>
            <dd><?= $_POST['pword'];?></dd>
            <dt>Confirm Password</dt>
            <dd><?= $_POST['cpword'];?></dd>
        </dl> -->
        <?php
            if(isset($_POST["fname"]) && isset($_POST["lname"]) && isset($_POST["email"]) && isset($_POST["cemail"]) && isset($_POST["uname"]) && isset($_POST["pword"]) && isset($_POST["cpword"])){
                echo "<pre>";
                $error = "false";
                if (is_numeric($_POST["fname"])) {
                    echo "Error: First name must not be a number.\n";
                    $error = "true";
                }
                if (is_numeric($_POST["lname"])) {
                    echo "Error: Last name must not be a number.\n";
                    $error = "true";
                }
                if( strcmp($_POST["email"] , $_POST["cemail"]) != 0){
                    echo "Error: Emails provided do not match.\n";
                    $error = "true";
                }
                if( strcmp($_POST["pword"] , $_POST["cpword"]) != 0){
                  echo "Error: Passwords provided do not match.\n";
                  $error = "true";
                }
                $fh=fopen("data.html","r");
                $count = 0;
                $nametaken = "false";
                while($line=fgets($fh)){
                    $piece=explode(",",$line);
                    if(strcmp(trim($piece[3]),trim($_POST["uname"])) == 0){
                        $error = "true";
                        $nametaken = "true";
                        
                    }
                }
                if($nametaken == "true"){
                    echo "Error: Username already taken!<br>";
                }
                if($error == "true"){
                    echo "Please try again.<br>";
                }else{
                    $data = $_POST["fname"] . "," .$_POST["lname"] . "," .$_POST["email"] . "," .$_POST["uname"] . "," . $_POST["pword"] . "\r\n"; 
                    echo $data . "<br><br>";
                    $saved = file_put_contents("data.html", $data, FILE_APPEND | LOCK_EX);
                    //echo $saved;
                    echo "First Name, Last Name, Email, Username, Password <br>";
                    echo file_get_contents("data.html") . "<br>";
                }
                echo "</pre>";
            }else{

            }
        ?>
    </div>
    

  </body>
</html>
