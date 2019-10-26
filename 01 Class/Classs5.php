<?php

class User
{
    protected $name, $age;

    public function setName(string $n)
    {
        $this->name = $n;
    }

    public function setAge(int $a)
    {
        $this->age = $a;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

}

class Worker extends User
{
    private $salary;

    public function setSalary(int $s)
    {
        $this->salary = $s;
    }

    public function getSalary()
    {
        return $this->salary;
    }
}

class Student extends User
{
    private $grant, $course;

    public function setGrant(int $g)
    {
        $this->grant = $g;
    }

    public function getGrant()
    {
        return $this->salary;
    }

    public function setCourse(int $c)
    {
        $this->course = $c;
    }

    public function getCourse()
    {
        return $this->course;
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