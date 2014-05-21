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
        //explode()
        //Creates an array of strings, each of which is a substring of string formed by splitting it on the boundries formed by the 
        //string dellimiter
        $Pizza = "Piece1 Piece2 Piece3 Piece4 Piece5 Piece6";
        $pieces = explode(" ", $Pizza);
        
        for($i = 0; $i < 5; $i++)
        {
            echo '<p>',$pieces[$i], '</p>';
        }
        //print_r($pieces);
        ?>
        
        <?php
        //sha1()
        //calculets the sha1 hash of a string using the US Secure Hash Algrorithm 1
        $password = "hello";
        $passwordHash = sha1($password);
        
        echo '<p>',$passwordHash,'</p>';
        
        if (sha1($password) === 'aaf4c61ddcc5e8a2dabede0f3b482cd9aea9434d')
        {
            echo '<p>','Your Password was ', $password, ' and the hash code was ', $passwordHash , '</p>' ;
        }
        ?>
        
        
        <?php
        //htmlentities
        //The description of this one on PHP.net is rather confusing and this code does not seem to work
        //string htmlentities ( string $string [, int $flags = ENT_COMPAT | ENT_HTML401 [, string $encoding = "UTF-8" [, bool $double_en        code = true ]]] )
        ?>
        
        <?php
        trim($hello = " Hello M8 ");
        ?>
        
        <?php
        //ucwords()
        //capatalizes the first letter of each word in a string
        
        $hello = "hello world";
        ucwords($hello);
        
        ?>
        
        <?php
        //md5()
        //Calculates the MD5 hash of str using the » RSA Data Security, Inc. 
        //MD5 Message-Digest Algorithm, and returns that hash.
        $str = 'apple';

        if (md5($str) === '1f3870be274f6c49b3e31a0c6728957f') {
            echo "Would you like a green or red apple?";
        }
        ?>
        
        <?php
        // strip_tags()       
        //This function tries to return a string with all NULL bytes, HTML and
        //PHP tags stripped from a given str. It uses the same tag stripping
        //state machine as the fgetss() function.
        
        $text = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';
        echo strip_tags($text);
        echo "\n";

        // Allow <p> and <a>
        echo strip_tags($text, '<p><a>');
        ?>
        
        <?php
        //strlen
        //Returns the length of the given string.
        $length = "how long is this string?";
        echo "your string is " , strlen($length), " characters long";
        ?>
        
        <?php
        //str_shuffle()
        //str_shuffle() shuffles a string. One permutation of
        //all possible is created.
        echo str_shuffle($length);
        ?>
        
        <?php
        //ord
        //Returns the ASCII value of the first character of string.
        echo ord($length);
        ?>
        
    </body>
</html>

