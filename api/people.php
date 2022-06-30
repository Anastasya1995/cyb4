<?php
// Симуляция - обычно здесь програмнный кодб который извлекает данные, 
//например из базы данных 
$people = [
    array("firstName" => "Yuri", "lastName" => "Andrienko", "salary" => 123456),
    array("firstName" => "Vasya", "lastName" => "Pupkin", "salary" => 777777),
    array("firstName" => "Yulia", "lastName" => "Yulkina", "salary" => 300000),
    array ("firstName" =>"Andrey", "lastName" => "Andreev", "salary" => 345678),

];

$letters = strtolower($_REQUEST["letters"]);
$results = [];
foreach ($people as $person){
    if (str_starts_with (strtolower($person["lastName"]), $letters)) {
        array_push($results, $person);
    }
}
echo (json_encode($results));