<?php

$message = '';
$Erreur ='';


if (isset($_POST["submit"])){
    if (empty($_POST["name"])){
        $Erreur = "<label class='text-danger'>slp entre votre nom</label>";

    } elseif( empty ($_POST["prénom"])){
        $Erreur = "<label class='text-danger'>slp entre votre prénom</label>";
    } elseif( empty ($_POST["phone"])){
        $Erreur = "<label class='text-danger'>slp entre votre téléphone</label>";
         } else {
             if (file_exists('EX4.json')){
                 $données_data = file_get_contents('EX4.json');
                 $array_data = json_decode($données_data,true);
                 $save = array(
                     'name'  => $_POST['name'],
                     'prénom' => $_POST['prénom'],
                     'phone' => $_POST['phone'],
                     'id' => date("dmYHis"),
                     'date' => date("d/m/Y à H:h:i")
                 );
                 $array_data[]=$save;
                 $thedata = json_encode($array_data);
                 if(file_put_contents('EX4.json',$thedata)){
                     $message ="<label class='text-success'>Votre donnée est enregistrer</p>";
                 }else {
                     $Erreur = "Votre donnée n 'est pas enregistrer";
                 }
             }
         }




}
?>





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
<body>
<!-- css -->




<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=phone] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=phone]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
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

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

</style>

<!-- Formulaire -->
<?php?>
<form action="EX4.php" method="post">
  <div class="container">
    <h1>Register</h1>
    <hr>

    <?php
    if (isset($Erreur)){
        echo $Erreur;
    }
    ?>
    <hr>

    <label for="name"><b>Nom </b></label>
    <input type="text" placeholder="entrer NOM" name="name" id="name" >

    <label for="prénom"><b>prénom</b></label>
    <input type="text" placeholder="Enterer prénom" name="prénom" id="prénom" >

    <label for="phone"><b>téléphone</b></label>
    <input type="phone" placeholder="entrer téléphone" name="phone" id="phone" >
    <hr>

    <?php if (isset($message)){
        echo $message;}
        ?>
    

    <input type="submit" name="submit" id="" class="registerbtn">

  </div>
  
</form><br><br><br><br>

<!-- affichage -->

<?php?>

<div class="container" style="width:500px;">
     <h3 >Affichage</h3><br />
     <div class="table-responsive">
          <table class="table table-bordered">
               <tr>
                    <th>Name</th>
                    <th>Prénom</th>
                    <th>Téléphone</th>
                    <th>id</th>
                    <th>date</th>
               </tr>
               <?php
              $done = file_get_contents("EX4.json");
              $done = json_decode($done, true);
              foreach ($done as $row){
              
                  echo '<tr><td>'.$row["name"].'</td><td>'.$row["prénom"].'</td><td>'.$row["phone"].'</td><td>'.$row["id"].'</td><td>'.$row["date"].'</td></tr>';
              }
              
              
              
               
               ?>
          </table>
     </div>
    
</body>
</html>