<?php

/**
 * @author Antoni Bayens
 *
 */

namespace antonibayens\webtech\middlewares;

use antonibayens\webtech\Application;
use antonibayens\webtech\exception\ForbiddenException;

/**
 * Class AuthMiddleware
 * @package antonibayens\webtech\middlewares
 */

class AuthMiddleware extends BaseMiddleware
{
    public array $actions = [];

    /**
     * @param array $actions
     */
    public function __construct(array $actions = [])
    {
        $this->actions = $actions;
    }

    public function execute()
    {
        if (Application::isGuest()){
            if (empty($this->actions) || in_array(Application::$app->controller->action, $this->actions)) {
                throw new ForbiddenException();
            }
        }
    }
}