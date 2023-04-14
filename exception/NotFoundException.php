<?php

namespace antonibayens\webtech\exception;

/**
 * Class NotFoundException
 * @author Antoni Bayens
 * @package antonibayens\webtech\exception
 */

class NotFoundException extends \Exception
{
    protected $message = 'Page not found';
    protected $code = 404;
}