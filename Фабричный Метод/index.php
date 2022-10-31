<?php
/*
Фабричный метод - паттерн, который определяет интерфейс в суперклассе (PhoneFactory),
позволяя классам изменять тип создаваемых объектов.
*/

//PhoneInterface.php
interface Phone
{
    public function call();
}

//PhoneFactory.php
class PhoneFactory
{
    public function createCellPhone(): Phone
    {
        return new CellPhone();
    }

    public function createSmartPhone(): Phone
    {
        return new SmartPhone();
    }
}

//CellPhone.php
class CellPhone implements Phone
{
    public function call()
    {
        echo 'call on Cell Phone';
    }
}

//SmartPhone.php
class SmartPhone implements Phone
{
    public function call()
    {
        echo 'call on Smart Phone';
    }
}

//index.php
//include ("PhoneInterface.php");
//include ("CellPhone.php");
//include ("SmartPhone.php");
//include ("PhoneFactory.php");

$factory = new PhoneFactory();
$cell_phone = $factory->createCellPhone();
$smart_phone = $factory->createSmartPhone();