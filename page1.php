<!DOCTYPE html>
<html>
    <head>
        <title>Ceci est une page de test avec des balises PHP</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <h2>Page de test</h2>
        
        <p>
            Cette page contient du code HTML avec des balises PHP.<br />
            <?php /* Insérer du code PHP ici */ ?>
            Voici quelques petits tests :
        </p>
        
        <ul>
        <li style="color: blue;">Texte en bleu</li>
        <li style="color: red;">Texte en rouge</li>
        <li style="color: green;">Texte en vert</li>
        </ul>
        
        <?php
        
        $a =10;
        $b = 2;
        $c = 10/3;
        echo "il y a ".$a." et ".$b." et enfin : ".$c;
        
        if( $a == 10 && $b == 2)
        {
            
            echo "<br>bien vu bg";
        }
        
        try
{
	$bdd = new PDO('mysql:host=localhost;dbname=Utilisateurs;charset=utf8', 'root', 'root');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
        
        $reponse = $bdd->query('SELECT * FROM Utilisateurs');
        echo "<br/>";
        
        while($donnees = $reponse->fetch())
        {
            
            echo "Id : ".$donnees['id']." email : ".$donnees['email']." mdp : ".$donnees['mdp'];
             echo "<br/>";
            
        }
        
        
        ?>
    </body>
</html>