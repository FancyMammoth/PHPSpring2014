<?php include 'dependency.php'; ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo config::PAGE_TITLE; ?></title>
    </head>
    <body>
        <?php
            
            
            $db = new PDO(Config::DB_DNS, Config::DB_USER, Config::DB_PASSWORD);
            
            
            
            $dbs - $db->prepare('select * from signup');
            $dbs -> esecute();
            $results = $dbs->fetchAll();
            
            echo '<table>';
            foreach($results as $value)
            {
                echo'<tr>';
                echo '<td>', $value['id'],'</td>';
                echo '<td>', $value['email'],'</td>';
                echo '<td>', $value['username'],'</td>';
                echo '<td>', $value['password'],'</td>';
                echo'</tr>';
                 
            }
            echo '</table>'
        ?>
    </body>
</html>
