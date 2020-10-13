<?php

namespace classes;

use DateTime;

class Event
{
    private $event;
    private $date;
    private $price;

    private $register;
    protected $vacancies;

    /**
     * Event constructor.
     * @param $event
     * @param $date
     * @param $price
     * @param $vacancies
     */
    public function __construct($event, DateTime $date, $price, $vacancies)
    {
        $this->event = $event;
        $this->date = $date;
        $this->price = $price;
        $this->vacancies = $vacancies;
    }

    public function register($fullName, $email)
    {
        if ($this->vacancies >= 1) {
            $this->vacancies -= 1;
            $this->setRegister($fullName, $email);
            echo "<p class='trigger accept'>Parabéns {$fullName}, vaga garantida!</p>";
        } else {
            echo "<p class='trigger error'>Desculpe {$fullName}, mas as vagas esgotaram!</p>";
        }
    }

    /**
     * @param mixed $register
     */
    protected function setRegister($fullName, $email): void
    {
        $this->register = [
            "name" => $fullName,
            "email" => $email
        ];
    }

    /**
     * @return mixed
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date->format("d/m/Y H:i");
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return number_format($this->price, "2", ",", ".");
    }

    /**
     * @return mixed
     */
    public function getRegister()
    {
        return $this->register;
    }

    /**
     * @return mixed
     */
    public function getVacancies()
    {
        return $this->vacancies;
    }
}