<?php

namespace Zack\PhpAnnotation;

use Zack\PhpAnnotation\ValidationRoles\Required;

class User
{
    #[Required]
    private string $email;

    /**
     * Set the value of email
     *
     * @return  self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }
}
