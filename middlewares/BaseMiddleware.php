<?php

/**
 * @author Antoni Bayens
 */

namespace antonibayens\webtech\middlewares;

/**
 * Classh BaseMiddleware
 * @package antonibayens\webtech\middlewares
 */

abstract class BaseMiddleware
{
    abstract public function execute();
}