<?php


class Circle
{
    public $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    /**
     * @return mixed
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * @param mixed $radius
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    public function Area()
    {
        return pi() * pow($this->radius, 2);
    }

    public function Par()
    {
        return pi() * $this->radius * 2;
    }

    public function toString()
    {
        echo "Circle Area: " . $this->Area();
        echo "<br>";
        echo "Circle Par: " . $this->Par();
        echo "<br>";
    }
}