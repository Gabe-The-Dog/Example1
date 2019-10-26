<?php

class Worker
{
    private $name, $age, $salary;

    public function setName(string $n)
    {
        $this->name = $n;
    }

    public function setAge(int $a)
    {
        $this->age = $a;
    }

    public function setSalary(int $s)
    {
        $this->salary = $s;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getSalary()
    {
        return $this->salary;
    }
}

$cls1 = new Worker();
$cls1->setName('Иван');
$cls1->setAge(25);
$cls1->setSalary(1000);

$cls2 = new Worker();
$cls2->setName('Вася');
$cls2->setAge(26);
$cls2->setSalary(2000);

echo $cls1->getSalary() + $cls2->getSalary();
echo '<br>';
echo $cls1->getAge() + $cls2->getAge();