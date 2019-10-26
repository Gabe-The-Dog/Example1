<?php

class Worker
{
    private $name, $age, $salary;

    function __construct(string $n, int $a, int $s)
    {
        $this->name = $n;
        $this->age = $a;
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

$cls = new Worker('Дима', 25, 1000);

echo $cls->getAge() * $cls->getSalary();