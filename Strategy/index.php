<?
//FlyInterface.php
interface FlyInterface 
{
    public function fly();
}

//QuackInterface.php
interface QuackInterface 
{
    public function Quack();
}

//FlyWithWings.php 
class FlyWithWings implements FlyInterface 
{
    public function fly() 
    {
        echo 'Полет с крыльями';
    }
}

//FlyWithoutWings.php 
class FlyWithoutWings implements FlyInterface 
{
    public function fly() 
    {
        echo 'А я не могу летать';
    }
}

//Duck.php
class Duck 
{
    private $flyBehavior;

    public function setFly($flyBehavior)
    {
        $this->flyBehavior = $flyBehavior;
    }

    public function fly() 
    {
        $this-flyBehavior->fly();
    }
}

//RedHeadDuck.php
class RedHeadDuck extends Duck
{
    public function __constructor() 
    {
        $this->setFly(new FlyWithWings);
    }
}

//index.php
// include(FlyInterface.php);
// include(FlyWithoutWings.php);
// include(FlyWithWings.php);
// include(Duck.php);
// include(RedHeadDuck.php);

$red_head_duck = new RedHeadDuck();