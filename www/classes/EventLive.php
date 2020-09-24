<?php

namespace classes;

use classes\Address;
use DateTime;

class EventLive extends Event
{
    /**
     * @var Address
     */
    private $address;

    public function __construct($event, DateTime $date, $price, $vacancies, Address $address)
    {
        parent::__construct($event, $date, $price, $vacancies);
        $this->address = $address;
    }

    /**
     * @return Address
     */
    public function getAddress()
    {
        return $this->address;
    }
}
