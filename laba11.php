<?php
class Animal
{
    public $food, $location, $animal, $noise;
    function __construct($food, $location, $animal, $noise)
    {
        $this->food = $food;
        $this->location = $location;
        $this->animal = $animal;
        $this->noise = $noise;
    }
    function makeNoise()
    {
        echo $this->animal." издает такие звуки ".$this->noise."<br>";
    }
    function eat()
    {
        echo $this->animal." ест это ".$this->food."<br>"; 
    }
    function sleep()
    {
        echo $this->animal." спит здесь ".$this->location."<br>";
    }  
}
class Dog extends Animal
{
    public $poroda, $nameDog;
    function __construct($poroda, $nameDog, $food, $location, $animal, $noise)
    {
        $this->poroda = $poroda;
        $this->nameDog = $nameDog;
        parent::__construct($food, $location, $animal, $noise);
    }
    function Info()
    {
        echo "Имя ".$this->animal." : ".$this->nameDog."<br>"."Порода: ".$this->poroda."<br>";
        parent::makeNoise();
        parent::eat();
        parent::sleep();
    }
}
class Horse extends Animal
{
    public $age, $nameHorse;
    function __construct($age, $nameHorse, $food, $location, $animal, $noise)
    {
        $this->age = $age;
        $this->nameHorse = $nameHorse;
        parent::__construct($food, $location, $animal, $noise);
    }
    function Info()
    {
        echo "Имя ".$this->animal." : ".$this->nameHorse."<br>"."Возраст: ".$this->age."<br>";
        parent::makeNoise();
        parent::eat();
        parent::sleep();
    }
}
class Cat extends Animal
{
    public $dlinaCat, $nameCat;
    function __construct($dlinaCat, $nameCat, $food, $location, $animal, $noise)
    {
        $this->dlinaCat = $dlinaCat;
        $this->nameCat = $nameCat;
        parent::__construct($food, $location, $animal, $noise);
    }
    function Info()
    {
        echo "Имя ".$this->animal." : ".$this->nameCat."<br>"."длина кота: ".$this->dlinaCat."<br>";
        parent::makeNoise();
        parent::eat();
        parent::sleep();
    }
}
$dog = new Dog("хаски", "Иван", "мясо", "пол", "собака", "гав-гав");
$dog->Info();
$horse = new Horse("старая-лет 5","Димос","траву","на крыше","конь в пальто","кто такой комик");
$horse->Info();
$cat = new Cat("da","такая классная","корм(обжора)","на лотке","котейка-гав", "кринж-кринж");
$cat->Info();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>