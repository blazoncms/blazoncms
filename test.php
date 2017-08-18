<?php

class person
{
    private $name;

    public function setName($name, person $object = null)
    {
        if ($object) {
            $object->name = $name;
            return;
        }

        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}

class personB extends person
{
    public $name;

    public function getName()
    {
        return $this->name;
    }
}

$personOne = new person();
$personTwo = new personB();

$personOne->setName('Bob');
$personTwo->setName('Bobb');
$personTwo->setName('George', $personOne);

echo $personTwo->getName();