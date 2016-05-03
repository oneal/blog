<?php

namespace AppBundle\Entity\Form;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;


class Login
{
    /**
     * @Assert\NotBlank(message = "El nombre debe estar relleno",)
     */
    private $username;

    /**
     * @Assert\NotBlank(message = "El nombre debe estar relleno",)
     */
    private $plainPassword;

    /**
     * Set username
     *
     * @param string $username
     *
     * @return Login
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set plainPassword
     *
     * @param string $plainPassword
     *
     * @return Login
     */
    public function setPlainPassword($plainPassword)
    {
        $this->plainPassword = $plainPassword;

        return $this;
    }

    /**
     * Get plainPassword
     *
     * @return string
     */
    public function getPlainPassword()
    {
        return $this->plainPassword;
    }
}

