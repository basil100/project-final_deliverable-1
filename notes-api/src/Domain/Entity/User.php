<?php
/**
 * Created by PhpStorm.
 * User: basil
 * Date: 11/10/15
 * Time: 9:30 PM
 */

namespace Notes\Domain\Entity;


class User
{
    /** @var  string */
    protected $username;
    /** @var  string */
    protected $firstName;
    /** @var  string */
    protected $lastName;
    /** @var  string */
    protected $email;

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }


    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }


    /**
     * @param $username
     * @return $this
     */
    public function setUsername($username) {
        $this->username = $username;
        return $this; // must be in every setters
    }

    /**
     * @param $firstName
     * @return $this
     */
    public function setFirstName($firstName) {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @param $lastName
     * @return $this
     */
    public function setLastName($lastName) {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * @param $email
     * @return $this
     */
    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }


}