<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $Pizza = "Piece1 Piece2 Piece3 Piece4 Piece5 Piece6";
        $pieces = explode(" ", $Pizza);
        
        for($i = 0; $i < 5; $i++)
        {
            echo '<p>',$pieces[$i], '</p>';
        }
        //print_r($pieces);
        ?>
        
        <?php
        $password = "hello";
        $passwordHash = sha1($password);
        
        echo '<p>',$passwordHash,'</p>';
        
        if (sha1($password) === 'aaf4c61ddcc5e8a2dabede0f3b482cd9aea9434d')
        {
            echo '<p>','Your Password was ', $password, ' and the hash code was ', $passwordHash , '</p>' ;
        }
        ?>
        
        
    </body>
</html>
