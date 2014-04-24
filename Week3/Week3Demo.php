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
        if ( !empty ($_POST)){        
        echo"<p> Please fill out all fields"; // this will check if data has been put into the boxes and if not it will display the error message
        }
        ?>
        
        <h2> My Form Demo </h2>
       <form name="mainform" action="#" method="post">            
            Email: <input type="text" name="email" /> <br />           
            Username: <input type="text" name="username" /> <br />          
            Password: <input type="password" name="password" /> <br />           
            <input type="submit" value="Submit" />                        
        </form>
    </body>
</html>
