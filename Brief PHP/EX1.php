<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Document</title>
</head>
<body>
    
<?php
function capital($p){
    switch($p){
        case "france":
         echo "paris";
         break;
         case "Allemagne":
         echo "Berlin";
         break;

         case "Italie":
         echo "Rome";
            break;
            case "Maroc":
                echo "Rabat";
                break;
                case "Espagne":
                    echo "Madrid";
                    break;
                    case "Portugal":
                        echo "Lisbonne";
                        break;
                        case "Angleterre":
                            echo "Londres";
                            break;
       
    
    default:
    echo "inconnu";

}
}
capital("Portugal");
?>

</body>
</html>