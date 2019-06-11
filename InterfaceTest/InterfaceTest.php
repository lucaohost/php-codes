<?php

interface  IEletronic
{
    public function TurnOn();

    public function TurnOff();
}

class Smartphone implements IEletronic
{
    public function TurnOn()
    {
        echo "Turning on the Eletronic";
    }

    public function TurnOff()
    {
        echo "Turning off the Eletronic";
    }
}

interface ITechnicalAssistence
{
    public function Fix(IEletronic $eletronic);
}

class SmartphoneTechnicalAssistence implements ITechnicalAssistence
{
    public function Fix(IEletronic $smartphone)
    {
        echo "Fixing the smartphone";
    }
}

$smartphone = new Smartphone();
$smartphoneTechnicalAssistence = new SmartphoneTechnicalAssistence();
$smartphoneTechnicalAssistence->Fix($smartphone);
echo "<br>";
if ($smartphone instanceof IEletronic) {
    echo "The smartphone is a Eletronic";
}
