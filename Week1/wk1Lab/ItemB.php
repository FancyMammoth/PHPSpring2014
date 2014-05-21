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
        $fruits = array (
            "fruits"  => array("a" => "orange", "b" => "banana", "c" => "apple"),
            "numbers" => array(1, 2, 3, 4, 5, 6),
            "holes"   => array("first", 5 => "second", "third")
        );
        
        //array_count_values()
        //array_count_values() returns an array using the values of array 
        //as keys and their frequency in array as values.
       print_r(array_count_values($fruits));
        
        //array_flip()
       //array_flip() returns an array in flip order, i.e. 
       //keys from array become values and values from array become keys.
       print_r(array_flip($fruits));
       
       //array_key_exists()
       //array_key_exists() returns TRUE if the given key is set in the array. 
       //key can be any value possible for an array index.
       if(array_key_exists(2, $fruits));
       
       //array_map()
       //array_map() returns an array containing all the elements of array1 
       //after applying the callback function to each one. The number of 
       //parameters that the callback function accepts should match the number 
       //of arrays passed to the array_map()
       $map = array_map(null, $fruits);
       print_r($map);
       
       //array_rand()
       //Picks one or more random entries out of an array, and returns the 
       //key (or keys) of the random entries.
       $rand_keys = array_rand($fruits, 1);
       echo $fruits[$rand_keys[0]];
       
       //array_push()
       //array_push() treats array as a stack, and pushes the passed variables 
       //onto the end of array. The length of array increases by the number of 
       //variables pushed.
       array_push($fruits, "mango");
       print_r($fruits);
       
       //in_array
       //Searches haystack for needle using loose comparison unless strict 
       //is set.
       if (in_array("mango", $fruits)) {
       echo "Got mango";
       }
       
       //shuffle
       //This function shuffles (randomizes the order of the elements in) 
       //an array.
       shuffle($fruits);
       foreach ($fruits as $fruits) {
            echo "$fruits ";
       }
       
       //count/sizeof
       //Counts all elements in an array, or something in an object.
       $count = count($fruits);
       echo $count;
       
       //sort
       //This function sorts an array. Elements will be arranged from lowest 
       //to highest when this function has completed.
       
       $sorted = sort($fruits);
       echo $sorted;
       
       //in_array
       //
        ?>
    </body>
</html>
