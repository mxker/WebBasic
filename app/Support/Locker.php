<?php

namespace App\Support;

use Latrell\Lock\Facades\Lock;

class Locker
{
    private $lockKey;

    public function __construct($lockKey)
    {
        $this->lockKey = 'JC_LOCK_' . $lockKey;
    }

    public static function getLock($type, $key)
    {
        return new Locker($type . '_' . $key);
    }

    public function lock()
    {
        Lock::acquire($this->lockKey);
    }

    public function unlock()
    {
        Lock::release($this->lockKey);
    }


    public function guard($func)
    {
        call_user_func($func);
    }
}