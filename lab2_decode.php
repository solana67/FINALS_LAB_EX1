<?php

$jsonString = '{"name":"Maria","age":21,"email":"maria@example.com"}';

$object = json_decode($jsonString);

$array = json_decode($jsonString, true);

echo "Object: " . $object->name . "<br>";
echo "Object Email: " . $object->email . "<br><br>";

echo "Array: " . $array["name"] . "<br>";
echo "Array Email: " . $array["email"];

?>