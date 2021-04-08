<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<style>
body{
    background-color: black;
}

.container {
 padding: 16px;
 margin-top: 50px;
 background-color: white;
}


input[type=number], select {
 width: 100%;
 padding: 15px;
 margin: 5px 0 22px 0;
 display: inline-block;
 border: none;
 background: #f1f1f1;
}
.resulta{
    width: 30%;
padding: 15px;
margin-left: 540px;
display: inline-block;
border: none;
background: #72f582;
}
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}


</style>
<body>
    <?php?>
    <div class="container" style="width:500px;">
    <form action="EX3.php" method="POST">

        <input type="number" name="nbr1">
        <select name="opération" id="">
            <option value="Non">selectioner</option>
            <option value="Addition">Addition</option>
            <option value="soustraction">soustraction</option>
            <option value="multiplication">multiplication</option>
            <option value="division">division</option>
        </select>
        <input type="number" name="nbr2">
        <input type="submit" value="calculer" name="submit" class="registerbtn"><br><br><br>
        <div name="res"><?php
        if(isset($res)){
            echo $res;
        }
        
        ?></div>
       
        
        
        
    </form>
    </div>
    <?php
    
  if(isset($_POST["submit"])){
      $num1 = $_POST["nbr1"];
      $num2 = $_POST["nbr2"];
      $opération = $_POST["opération"];
        switch($opération)
        {
                case "Non":
                echo '<div class="resulta">'." Il faut selectioner un opération".'</div>';
                break;
                case "Addition":
                   echo '<div class="resulta">'.$num1 + $num2.'</div>' ;
                    break;
                    case "soustraction":
                        echo '<div class="resulta">'.$num1 - $num2.'</div>';
                        break;
                        case "multiplication":
                            echo '<div class="resulta">'. $num1 * $num2.'</div>';
                            break; 
                            case "division":
                                echo '<div class="resulta">'. $num1 / $num2.'</div>';
                                break;               
                        
        }
  }

    

    ?>
</body>
</html>