

<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
    </head>
    
    <body>
        <h1>Titre principal</h1>
        <?php
            require 'utilisateur.php'; // exporter mon fichier
            
            $pierre = new Utilisateur('nabil', 'abcdef');//new object
            $mathilde = new Utilisateur('Math', 123456);
            
            echo $pierre->getNom(). '<br>';
            echo $pierre->getpass(). '<br>'; //affichage
            echo $mathilde->getNom(). '<br>';
        ?>
        <p>Un paragraphe</p>
    </body>
</html>