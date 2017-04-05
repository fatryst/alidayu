# 流量直充分省接口


## 1. 官方文档

http://open.taobao.com/docs/api.htm?apiId=26477

## 2. 参数、方法

|官方参数|对应方法|类型|是否必须|默认值|说明|
|----|----|----|----|----|----|
|`phone_num`|`setPhoneNum($value)`|string|**必须**| |手机号|
|`reason`|`setReason($value)`|string|可选| |充值原因|
|`grade`|`setGrade($value)`|string|**必须**| |需要充值的流量|
|`out_recharge_id`|`setOutRechargeId($value)`|string|**必须**| |唯一流水号|

## 3. 使用

```php
<?php
use Aliwuyun\Alidayu\AlibabaAliqinFcFlowChargeProvince;
use Alidayu;

class TestController extends Controller
{
    public function charge()
    {
        $message = (new AlibabaAliqinFcFlowChargeProvince())
            ->setPhoneNum('12345678910')
            ->setGrade('50')
            ->setOutRechargeId('123456');

        return Alidayu::send($message);
    }
}
```
