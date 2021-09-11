<?php
//array numerik
$array = [];
$array[] = 'One';
$array[] = 'Two';
$array[] = 'Three';
$array[] = 'Four';
echo '<pre>';
print_r($array);


$employee = [
    'name' => 'John',
    'email' =>'John@xample.com  ',
    'phone' => '1234567890',
];

//get the value of employee name
echo $employee['name'];

//get all values
foreach ($employee as $key => $value) {
    echo $key . ':' . $value;
    echo '<br>';
}



?>