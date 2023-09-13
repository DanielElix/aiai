<?php
  include("classes/connect.php");
  include("classes/signup.php");
  
  $first_name = "";
  $last_name = "";
  $gender = "";
  $email = "";
  
  if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
    $signup = new Signup();
    $result = $signup->evaluate($_POST);

    if($result != ""){
      echo "<div style='text-align:center;font-size:12px;color:white;background-color:grey;'>";
      echo "<br>The following errors occured<br><br>";
      echo $result;
      echo "<br>";
      echo "</div>";
    }
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];

  }


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>AiAi ♥ - Sign up</title>
    <link rel="stylesheet" href="view/style.css">
  </head>
  <body style="font-family: tahoma; background-color: #e9ebee;">
<div id="bar">
<div style="font-size: 40px"class=""> Sylla </div>
<div id="signup-button"> Login </div>


</div>
<div id="bar2">
 Sign up to Sylla <br><br>
<form method="post" action="">
<input type="text" name="first_name" id="text" value="<?php echo $first_name; ?>" placeholder="First name" name=""><br><br>
<input type="text" name="last_name" id="text" value="<?php echo $last_name; ?>" placeholder="Last name" name=""><br><br>
<span style="font-weight: normal;" class="">
  Gender:
</span><br>
<select class="" id="text" name="gender">
  <option><?php echo $gender; ?></option>
  <option>Male</option>
  <option>Female</option>
  <option>Other</option>
</select><br><br>
<input type="text" name="email" id="text" value="<?php echo $email; ?>" placeholder="Email" name=""><br><br>
<input type="password" name="password" id="text" value="" placeholder="password" name=""><br><br>
<input type="password" name="password2" id="text" value="" placeholder="retype password" name=""><br><br>
<input type="submit" name="" value="Sign up"  id="submit-button" > <br><br><br>
</form>
</div>

</body>
</html>
