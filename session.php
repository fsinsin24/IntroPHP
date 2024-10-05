<?php


$color = array();


//           0        1       2
$color = ["green", "blue", "red"];
echo $color[2];


//add item in array
$color[] = "black";


echo json_encode($color), "<br>";


//replace item in array
$color[0] = "yellow";


echo json_encode($color), "<br>";




//delete a specific item in array
echo json_encode($color), "<br>";
unset ($color[1]);
echo json_encode($color), "<br>";


$data = ["john doe", 23, "Bacoor, Cavite", "BSIT", 4102, "09999999999"];
echo json_encode($color), "<br>";


//associative arrays
$kotse = ["toyota" => "vios", "honda" => "city", "hyundai" => "yamaha"];
echo json_encode($kotse), "<br>";


//adding arrays
$student = ["name" => "John Doe",
            "course" => "BSIT",
            "email" => "jdoe@test.com"];


echo json_encode($student), "<br>";

// foreach Loop
foreach($student as $row){
    echo $row, "<br>";
}

function showName($name, $number){
    echo "HELLO THERE, ",$name,", your total amount due is ",$number;
   
}

$amount = "3500";
showName("Moo Deng",$amount);

//echo computerFare(200,20);



?>