<?php
class Animal 
{
    // Properties
    public $name;
    public $legs;
    public $cold_blooded;
    public $yell;

    // Methods
    function __construct($name, $legs, $cold_blooded, $yell)
    {
        $this->name = $name;
        $this->legs = $legs;
        $this->cold_blood = $cold_blooded;
        $this->yell = $yell;
    }
    function get_name() 
    {
        return $this->name;
    }

    function set_legs($legs) 
    {
        $this->legs = $legs;
    }
    function get_legs() 
    {
        return $this->legs;
    }

    function set_cold_blooded($cold_blooded) 
    {
        $this->cold_blooded = $cold_blooded;
    }
    function get_cold_blooded() 
    {
        return $this->cold_blooded;
    }

    function set_yell($yell) 
    {
        $this->yell = $yell;
    }
    function get_yell() 
    {
        return $this->yell;
    }
}

 $sheep = new Animal("Domba", "4", "cold blooded", "Embeeeee");
 echo "Name : " . $sheep->get_name();
 echo "<br>";
 echo "Legs : " . $sheep->get_legs();
 echo "<br>";
 echo "Cold Blooded : " . $sheep->get_cold_blooded(), "No";
 echo "<br>";
 echo "Yell : " . $sheep->get_yell();
 echo "<br>";


?>