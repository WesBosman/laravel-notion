<?php

namespace WesBosman\LaravelNotion\Exceptions;

use Exception;

class InvalidUserIdException extends Exception
{
    protected $message = "Invalid user id given.";
}