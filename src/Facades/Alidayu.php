<?php
/**
 * description:
 * date: 2017/4/1 10:41
 * author: fa.zeng
 * version: 1.0
 */
namespace Aliwuyun\Alidayu\Facades;

use Illuminate\Support\Facades\Facade;

class Alidayu extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'alidayu';
    }
}