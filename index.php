<?php

function hello()
{
    echo"Hello World"; 
}

hello(); // Hello World

echo PHP_EOL;

function is_mike()

{
    $current_usser="Mike";
    if($current_usser=="Mike")
    {
        echo "You is Mike";
    }else 
    {
        echo "Nope, You not Mike";
    }
}

is_mike();

echo PHP_EOL;

function helloName($name)
{
    if(is_array($name) && !empty($name))
    {
        foreach($name as $key)
        {
            echo ("Hello, $key \n");
        }
    }else{
        echo("Hello friend !");
    }

}

helloName(["Mike","Mohede","Hompton"]);


function get_info($name,$title=Null)
{
    if($title)
    {
        echo("$name was arrived, and came as $title");
    }else{
        echo "$name was arrived, welcome";
    }
}

get_info("mike","frong");


function addUp($a,$b)
{
    return[$a,$b,$a+$b];
}

print_r(addUp(2,4));

function sumArray($data)
{
    $result=0;
    foreach($data as $key)
    {
        $result += $key;
    }

    return $result;
}

echo sumArray([1,4,5,5]);


function answer()
{
    return "you answer the question";
}

$answer=answer(); // save n Variable

echo PHP_EOL;

//callback Function

$answer_cal="answer";

echo $answer_cal()."!!"; // call the function

// Anoymous Function

$askName="What is your name";
$name="buddy";

echo PHP_EOL;

$ask=function()use($askName,$name)
{
    return "Ask the question , $askName $name?";
};

echo $ask();


function br()
{
    echo PHP_EOL;
}

br();
// Built-in sring function

$magang="Magang TOP jos";

echo strlen($magang);


br();

echo substr($magang,7); // top jos

br();

echo substr($magang,7,6); // top jo

br();

echo strpos($magang,"jos"); //11

br();

echo $magang[11]; // j

br();

$team=["Mike"=>"Developer","Crish"=>"designer","Hompton"=>"Manager"];

print_r(array_keys($team));

var_dump(array_key_exists("John",$team));

if(array_key_exists("Mike",$team))
{
    echo "Mike Found in \$team";
}else{
    echo "Key not found in \$team";
}

br();

array_walk($team,function($value,$key){

    echo "$key is a $value \n";
});