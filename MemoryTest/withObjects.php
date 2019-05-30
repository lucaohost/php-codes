<?php

class Person
{

    public $name;
    public $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
}

echo "Memory usage in the start: " . memory_get_usage() / 1000000 . " MB <br>";
$averageAge = getAverageAge();
echo "Memory usage outside function: " . memory_get_usage() / 1000000 . " MB <br>";

function getAverageAge()
{
    $people = [];
    for ($i = 0; $i < 1000000; $i++) {
        $people[] = new Person("Lucas", 21);
    }
    $averageAge = 0;
    foreach ($people as $person) {
        $averageAge += $person->age;
    }
    echo "Memory usage inside function: " .  memory_get_usage() / 1000000 . " MB <br>";
    return $averageAge / count($people);
}
