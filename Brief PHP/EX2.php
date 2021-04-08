<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php?>
    <form action="EX2.php" method="post">
    <input type="password" name="password" id="">
    <input type="submit" value="confirmer" name="submit">
    </form>
    <?php


function verificationPassword($password){
  


 if (strlen($password) <= '8') {
    echo "your password not match";
}elseif(! ("#[0-9]+#",$password)) {
    echo "Your Password Must Contain At Least 1 Number!";
}
elseif(!preg_match("#[A-Z]+#",$password)) {
    echo "Your Password Must Contain At Least 1 Capital Letter!";
}elseif(!preg_match("#[a-z]+#",$password)) {
    echo "Your Password Must Contain At Least 1 Lowercase Letter!";
}
}


$password=$_POST["password"];
verificationPassword($password);

echo $password;
 ?>

 

    
</body>
</html>