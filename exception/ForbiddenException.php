<?php

namespace antonibayens\webtech\exception;

/**
 * Class Forbidden Exception
 *
 * @author Antoni Bayens
 * @package antonibayens\webtech\exception
 */

class ForbiddenException extends \Exception
{
    protected $message = 'You don\'t have permission to access this page';
    protected $code = 403;
}