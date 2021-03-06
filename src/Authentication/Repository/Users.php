<?php

namespace Authentication\Repository;

use Authentication\Entity\User;

interface Users
{
    /**
     * @throws \UnexpectedValueException
     */
    public function get(string $emailAddress) : User;

    /**
     * @throws \InvalidArgumentException
     */
    public function add(User $user) : void;
}
