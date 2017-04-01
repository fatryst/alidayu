<?php
namespace Aliwuyun\Alidayu;

/**
 * 阿里大于 - 请求接口类
 *
 */
interface AlidayuContracts
{
    /**
     * 获取接口名称
     * @return string
     */
    public function getMethod();

    /**
     * 获取请求参数
     * @return array 
     */
    public function getParams();
}
