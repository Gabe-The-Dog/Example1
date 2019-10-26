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

class Driver extends Worker
{
    private $exp, $rank;

    public function setExp(int $e)
    {
        $this->exp = $e;
    }

    public function getExp()
    {
        return $this->exp;
    }

    public function setRank(string $r)
    {
        $this->rank = $this->checkRank($r);
    }

    public function getRank()
    {
        return $this->rank;
    }

    private function checkRank(string $rank)
    {
        if ($rank == 'A' || $rank == 'B' || $rank == 'C') {
            return $rank;
        }
    }
}

$man1 = new Driver();
$man1->setName('Вова');
$man1->setExp(5);
$man1->setRank('A');
echo $man1->getRank();