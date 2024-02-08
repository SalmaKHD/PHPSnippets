<?php
// define and use variables
/*
$name = "Salma\n";
echo $name;
$name = "Soheil\n";
echo $name;
// define constant variables
define('NAME', "Mahdi\n");
echo NAME;
*/

// data types
/*
// string
$fistName = "Mahdi ";
$lastName = "Kazemi";
echo $fistName.$lastName; // string concat
// double quote vs single quote: '' -> will escape special characters

// string functions
echo strlen($fistName)." ";
echo strtolower($fistName)." ";
echo strtoupper($lastName)." ";
echo str_replace('M', 'n',$fistName)."<br>";

// number
    $age = 25;
    $rate = 3.9;
    echo "age is ".$age."<br>"; 
    $age--;
    echo "age is ".$age."<br>"; 
    $age+= 10;
    echo "age is ".$age."<br>"; 
    echo floor($rate)."<br>";
    echo ceil($rate)."<br>";
    
    // boolean
    $flag = false;
    echo intval($flag)."<br>";
    */

    // arrays
    /*
    // indexed arrays
    $poepleOne = ['Mahdi', 'Bahram', 'Nader'];
    $peopleTwo = array('Arefe', 'Maryam');
    echo $poepleOne[1]."<br>";
    echo $peopleTwo[0]."<br>";
    // print all members
    print_r($poepleOne)."<br>";

    // add new elements
    $peopleTwo[] = "Salma";
    print_r($peopleTwo)."<br>";
    array_push($peopleTwo, 1234);
    print_r($peopleTwo)."<br>"; 
    // merge 2 arrays
    $mergedArray = array_merge($poepleOne, $peopleTwo);
    print_r($mergedArray);
    // remove an element
    array_pop($mergedArray);
    print_r($mergedArray);
    // print size
    echo count($mergedArray)."<br>";
    
    // associative arrays (key-value pairs)
    $teamOne = ["0" => "Salma", "1" => "Soheil"];
    echo $teamOne["1"]."<br>";

    // multi-dimentional arrays
    $children = [["Salma", "Soheil", "Melika"], ["child1" => "Philippe", "child2" => "Jackson"]];
    print_r($children);
    echo $children[0][2]."<br>";
    echo $children[1]["child2"]."<br>";
    */

    // conditional statements
    /*
    echo intval(2>9)."<br>";
    echo intval(2<9)."<br>";
    echo intval(2<=9)."<br>";
    echo intval(2>=9)."<br>";
    echo intval(2==9)."<br>";
    echo intval(2!=9)."<br>";
    echo intval(!2>=9)."<br>";
    echo intval(true && false)."<br>";
    echo intval(false || true)."<br>";

    // strict-equal operator, for type checking
    echo intval("person" === "person")."<br>";
    $name = "person";
    $nameTwo = "person";
    echo intval($name == $nameTwo)."<br>";
    echo intval($name === $nameTwo)."<br>";
    echo intval(2 === "2")."<br>";
    echo intval(2 == "2")."<br>";

    // conditional statements
    if(2>5) {
        echo "yes!"."<br>";
    } else if(2 == 5) {
        echo "Maybe!"."<br>";
    }
     else {
        echo "Nope!"."<br>";
    }
    */

    // loops
    



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title> My PHP project</title>
</head>

<body>
    <?php
    echo "Hello World!"
    ?>
    <br>
    <button><?php echo "Click me!"; ?></button>
</body>

</html>