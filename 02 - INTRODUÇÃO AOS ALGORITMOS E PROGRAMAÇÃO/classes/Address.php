<?php

namespace classes;

class Address
{
    private $street;
    private $number;
    private $complement;

    /**
     * Address constructor.
     * @param $street
     * @param $number
     * @param $complement
     */
    public function __construct($street, $number, $complement)
    {
        $this->street = $street;
        $this->number = $number;
        $this->complement = $complement;
    }

    /**
     * @return mixed
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @return mixed
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @return mixed
     */
    public function getComplement()
    {
        return $this->complement;
    }
}