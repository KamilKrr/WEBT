<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Megahamster</title>
</head>

<style>
    table, th, td{
        font-family: arial;
        border: 1px solid black;
        border-collapse: collapse;
    }

    th, td{
        padding: 15px;
        text-align: left;
    }
</style>
<body>
<table>
    <caption>Real Estate</caption>
    <tr>
        <th>Name</th>
        <th>Price</th>
        <th>Special Equipment</th>
        <th>Dimensions</th>
        <th>Area</th>
    </tr>
<?php
include_once "classes/TrainingRoom.php";
include_once "classes/LivingRoom.php";

$realEstates[] = new LivingRoom("The Room", 49, [], 80, 50, 50);
$realEstates[] = new LivingRoom("The Flat", 149, ["Food jars"], 120, 80, 80);
$realEstates[] = new TrainingRoom("The Pit", 69, ["Hamster training gloves", "Hamster punching sack"], 20);


foreach ($realEstates as $realEstate){
    //build an unordered List with special Equipment
    $specialEquipmentAsHTMLList = "<ul>";

    foreach ($realEstate->getSpecialEquipmentAsArray() as $specialEquipment) {
        $specialEquipmentAsHTMLList.= <<<HTMLLIST
            <li>{$specialEquipment}</li>
HTMLLIST;
    }

    $specialEquipmentAsHTMLList.="</ul>";

    //build table row with Real Estate
    echo <<<REALESTATE
    <tr>
        <td>{$realEstate->getName()}</td>
        <td>{$realEstate->getPrice()}</td>
        <td>{$specialEquipmentAsHTMLList}</td>
        <td>{$realEstate->getDimensions()}</td>
        <td>{$realEstate->getArea()}</td>
    </tr>
REALESTATE;
}

?>
</table>
</body>
</html>