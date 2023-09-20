<?php
$teamgenoten = [
    ["id" => 0, "naam" => "Jeroen", "rol" => "Ontwikkelaar", "leeftijd" => 20],
    ["id" => 1, "naam" => "Tim", "rol" => "Ontwikkelaar", "leeftijd" => 19],
    ["id" => 2, "naam" => "Meric", "rol" => "Ontwikkelaar", "leeftijd" => 21],
    ["id" => 3, "naam" => "Ashraf", "rol" => "Ontwikkelaar", "leeftijd" => 20]
];


// Functie om teamgenoten hun naam weer te geven op de pagina
function toonTeamgenoot($teamgenoot)
{

    echo "<a href='person.php?id={$teamgenoot['id']}'>{$teamgenoot['naam']}</a>";
//    echo "<p>Rol: {$teamgenoot['rol']}</p>";
//    echo "<p>Leeftijd: {$teamgenoot['leeftijd']}</p>";
    echo "<hr>";
}




function toonTeamgenootSpecifiek($teamgenoten)
{
    $id = $_GET["id"];
    foreach($teamgenoten[$id] AS $person) {
        echo $person . "<br>";
    }

}

// Functie om alle teamgenoten weer te geven
function toonAlleTeamgenoten($teamgenoten)
{

    $uniekeLijst = []; // array om dubbele vermeldingen te voorkomen

    echo "<div id='teamgenoten-container'>";

    foreach ($teamgenoten as $teamgenoot) {
        if (!in_array($teamgenoot['naam'], $uniekeLijst)) {
            array_push($uniekeLijst, $teamgenoot['naam']); // checkt of er niet dubbelen waardes worden weergegeven
            toonTeamgenoot($teamgenoot);
        }
    }

    echo "</div>";

//    return "Aantal unieke teamgenoten: " . count($uniekeLijst);
}


function dd($value){
    die(var_dump($value));
}

function changeColor() {
    // checkt de locale tijd
    date_default_timezone_set("Europe/Amsterdam");
    $Time = date("H:i:s");

    if($Time < '100000'){
        echo "<body style='background-color:red'>";
    } elseif($Time < '180000'){
        echo "<body style='background-color:orange'>";
    }
    else{
        echo "<body style='background-color:grey'>";
    }
}

function characterCounterType($value){
    echo $value . "<br/>";
    echo strlen($value) . "<br/>";
    echo gettype($value) . "<br/>";
}

function randomValue($value){
    $persoon = array_rand($value);
    echo $value[$persoon];
}