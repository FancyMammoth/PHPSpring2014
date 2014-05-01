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
        $state_list = array('AL'=>"Alabama",  
			'AK'=>"Alaska",  
			'AZ'=>"Arizona",  
			'AR'=>"Arkansas",  
			'CA'=>"California",  
			'CO'=>"Colorado",  
			'CT'=>"Connecticut",  
			'DE'=>"Delaware",  
			'DC'=>"District Of Columbia",  
			'FL'=>"Florida",  
			'GA'=>"Georgia",  
			'HI'=>"Hawaii",  
			'ID'=>"Idaho",  
			'IL'=>"Illinois",  
			'IN'=>"Indiana",  
			'IA'=>"Iowa",  
			'KS'=>"Kansas",  
			'KY'=>"Kentucky",  
			'LA'=>"Louisiana",  
			'ME'=>"Maine",  
			'MD'=>"Maryland",  
			'MA'=>"Massachusetts",  
			'MI'=>"Michigan",  
			'MN'=>"Minnesota",  
			'MS'=>"Mississippi",  
			'MO'=>"Missouri",  
			'MT'=>"Montana",
			'NE'=>"Nebraska",
			'NV'=>"Nevada",
			'NH'=>"New Hampshire",
			'NJ'=>"New Jersey",
			'NM'=>"New Mexico",
			'NY'=>"New York",
			'NC'=>"North Carolina",
			'ND'=>"North Dakota",
			'OH'=>"Ohio",  
			'OK'=>"Oklahoma",  
			'OR'=>"Oregon",  
			'PA'=>"Pennsylvania",  
			'RI'=>"Rhode Island",  
			'SC'=>"South Carolina",  
			'SD'=>"South Dakota",
			'TN'=>"Tennessee",  
			'TX'=>"Texas",  
			'UT'=>"Utah",  
			'VT'=>"Vermont",  
			'VA'=>"Virginia",  
			'WA'=>"Washington",  
			'WV'=>"West Virginia",  
			'WI'=>"Wisconsin",  
			'WY'=>"Wyoming");
        ?>
        
        
        
        <form>
            
            First Name: <input type="text" name="firstname"> <br/>
            <br/>
            Last Name: <input type="text" name="lastname"> <br/>
            <br/>
            State: <select name="States"><?php foreach($state_list as $key => $value) { ?>
                        <option value="<?php echo $key ?>">
                            <?php echo $value ?>
                        </option>
            <?php } ?>
                    </select> <br/>
            <br/>
            Comments: <input type="text" name="comments"> <br/>
            <br/>
            <input type="submit" value="Submit">
            
            
                             
        </form>
        
        <?php
        
        $FirstName = filter_input(INPUT_POST, 'firstname');
        $LastName = filter_input(INPUT_POST, 'lastname');
        $State = filter_input(INPUT_POST, 'States');
        $Comments = filter_input(INPUT_POST, 'comments');
        
        var_dump($FirstName);
        var_dump($LastName);
        var_dump($State);
        var_dump($Comments);
        
        
        
        /*
        echo $FirstName;
        echo $LastName;
        echo $State;
        echo $Comments;
        */
        ?>
        
    </body>
</html>
