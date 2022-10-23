<?php
class Frog extends Animal
{
    // Properties
    public $name;
    public $legs;
    public $cold_blooded;
    public $jump;

    // Methods
    function __construct($name, $legs, $cold_blooded, $jump)
    {
        $this->name = $name;
        $this->legs = $legs;
        $this->cold_blooded = $cold_blooded;
        $this->jump = $jump;

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

    function set_jump($jump) 
    {
        $this->jump = $jump;
    }
    function get_jump() 
    {
        return $this->jump;
    }
}

$kodok = new Frog ("Kodok", "4", "No", "Plak plak plak");
echo "Name : " . $kodok->get_name();
echo "<br>";
echo "Legs : " . $kodok->get_legs();
echo "<br>";
echo "Cold Blooded : " . $kodok->get_cold_blooded();
echo "<br>";
echo "Jump : " . $kodok->get_jump();
echo "<br>";


?>