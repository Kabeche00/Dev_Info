<!DOCTYPE html>
<html>
    <head>
        <title>Génération du mot de passe</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <h2>Génération du mot de passe</h2>
        
       
        <ul>
        
        </ul>
        
        <?php
        
       function GenereMdp()
       {
           $resultat = '';
           $alphabet = '!"#$%&\'()*+,-./0123456789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\\]^_`abcdefghijklmnopqrstuvwxyz{|}~';
           
          
           
           
           for($i =0; $i<15;$i++)
    {
       
        $alea  = rand(0,strlen($alphabet)-1);
        $resultat = $resultat.$alphabet[$alea];
    }
           echo "<br/>";
           echo $resultat;
       }
        
        GenereMdp();
        ?>
    </body>
</html>