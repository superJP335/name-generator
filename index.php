<?php
function RandName(){
//array for names
$names = [
'Daniel',
'John',
'Mary',
'Catherine',
'Mark'
];

//array for adjectives
$adjectives = [
'Serious',
'Orange',
'Red',
'Super',
'Ultra',
'Cool'
];

//choose between random name & adjective
$randomName = $names[ Rand(0, count($names)-1) ];
$randomAdj = $adjectives[ Rand(0, count($adjectives)-1) ];

//makes the name suggestion
$suggestion = $randomAdj . $randomName . rand(1, 99999);

//echoes name out
echo $suggestion;
}
?>
