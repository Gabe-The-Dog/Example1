<?php

class Worker
{
    public $name, $age, $salary;
}

$man1 = new Worker();
$man1->name = 'Иван';
$man1->age = 25;
$man1->salary = 1000;

$man2 = new Worker();
$man2->name = 'Вася';
$man2->age = 26;
$man2->salary = 2000;

echo $man1->salary + $man2->salary;
echo '<br>';
echo $man1->age + $man2->age;

//Gabe