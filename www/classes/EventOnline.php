<?php

namespace classes;

class EventOnline extends Event
{
    private $link;

    public function __construct($event, \DateTime $date, $price, $link, $vacancies = 0)
    {
        parent::__construct($event, $date, $price, $vacancies);
        $this->link = $link;
    }

    public function register($fullName, $email)
    {
        $this->vacancies += 1;
        $this->setRegister($fullName, $email);
        echo "<p class='trigger accept'>Show {$fullName}, cadastrado com sucesso!</p>";
    }
}