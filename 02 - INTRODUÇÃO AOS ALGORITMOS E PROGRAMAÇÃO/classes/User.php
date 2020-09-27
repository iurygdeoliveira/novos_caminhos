<?php

namespace classes;

class User
{
    private $job;
    private $firstName;
    private $lastName;

    /**
     * User constructor.
     * @param $job
     * @param $firstName
     * @param $lastName
     */
    public function __construct($job, $firstName, $lastName)
    {
        $this->job = $job;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    /**
     * @return mixed
     */
    public function getJob()
    {
        return $this->job;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }
}