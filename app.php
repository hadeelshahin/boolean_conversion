<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //it is a built in function 
    //
    //all of these values give false
    echo "test";
    echo "<br> "," ========================================================================================================= " ,"<br>";
    var_dump((bool)"");
    echo "<br> "," ========================================================================================================= " ,"<br>";
    var_dump((bool)array());
    echo "<br> "," ========================================================================================================= " ,"<br>";
    var_dump((bool)[]);
    echo "<br> "," ========================================================================================================= " ,"<br>";
    var_dump((bool)0);

    //all of these values give true 
    echo "<br> "," ========================================================================================================= " ,"<br>";
    var_dump((bool)'anyValueWillGibeTRUE');
    echo "<br> "," ========================================================================================================= " ,"<br>";
    var_dump((bool)array("anyItem"));
    echo "<br> "," ========================================================================================================= " ,"<br>";
    var_dump((bool) [1]);
    echo "<br> "," ========================================================================================================= " ,"<br>";
    var_dump((bool)100);
    echo "<br> "," ========================================================================================================= " ,"<br>";
    var_dump((bool)-100);
    echo "<br> "," ========================================================================================================= " ,"<br>";
    var_dump((bool)10.5);
    echo "<br> "," ========================================================================================================= " ,"<br>";
    var_dump((bool)-10.5);
    echo "<br> "," ========================================================================================================= " ,"<br>";
    $var = (bool)"1";
    echo $var;  //output:1
    $var2= (bool)"";
    echo "<br> "," ========================================================================================================= " ,"<br>";
    echo $var2 , "will output nothing ";  // output nothing that is why we use var_dump
    echo "<br> "," ========================================================================================================= " ,"<br>";
    $var3 = (bool)array(3); 
    echo $var3  ; //output = 1 
    echo "<br> "," ========================================================================================================= " ,"<br>";
    $var4 = (bool)10.5;
    echo $var4;  // also output 1 

    //so with *empty arrays  *emptystrings *0 value will give false and we have to use var_dump()
    //any array with any values , any number , any string will give TRUE and 1 
    echo "<br> "," ========================================================================================================= " ,"<br>";
$variable = array("foo" => "bar", 42 => 24);
var_dump($variable);  // the output will show the type, keys, and values of the array,

#the most importance of var_dump :
/*
   var_dump will show the class type and the properties, including their visibility (public, protected, private) and values
   **This helps to understand the object’s state at any given point in time.

   -use as debug tool 

*/
echo "<br> "," ========================================================================================================= " ,"<br>";

class Person {
    public $name = "John";
    private $age = 30;
}

$person = new Person();
var_dump($person);   // output object(Person)#1 (2) { ["name"]=> string(4) "John" ["age":"Person":private]=> int(30) }


        ?>
</body>
</html>