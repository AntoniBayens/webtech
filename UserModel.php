<?php

/**
 * @author Antoni Bayens
 * @package antonibayens\webtech
 */

namespace antonibayens\webtech;

use antonibayens\webtech\db\DbModel;

abstract class UserModel extends DbModel
{
    abstract public function getDisplayName(): string;

}