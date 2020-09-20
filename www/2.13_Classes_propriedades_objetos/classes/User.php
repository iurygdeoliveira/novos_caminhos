<?php

/**
 * Undocumented class
 */
class User
{
    /**
     * Undocumented variable
     *
     * @var [type]
     */
    private $firstName;
    public $lastName;
    public $email;

    /**
     * Obter o valor da propriedade firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Definir o valor da propriedade firstName
     *
     * @param string $firstName
     * @return object
     */
    public function setFirstName(string $firstName)
    {
        $this->firstName = filter_var($firstName, FILTER_SANITIZE_STRING);

        return $this;
    }

    /**
     * Obter o valor da propriedade lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Definir valor da propriedade lastName
     *
     * @param string $lastName
     * @return string
     */
    public function setLastName(string $lastName)
    {
        $this->lastName = filter_var($lastName, FILTER_SANITIZE_STRING);

        return $this;
    }

    /**
     * Obter valor da propriedade email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Definir valor da propriedade email
     *
     * @param string $email
     * @return bool
     */
    public function setEmail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->email = $email;
            return true;
        } else {
            $this->email = null;
            return false;
        }
        return $this;
    }
}