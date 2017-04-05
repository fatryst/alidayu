# 流量直充查询


## 1. 官方文档

http://open.taobao.com/docs/api.htm?apiId=26305

## 2. 参数、方法

|官方参数|对应方法|类型|是否必须|默认值|说明|
|----|----|----|----|----|----|
|`out_id`|`setOutId($value)`|string|**必须**| |唯一流水号|

## 3. 使用

```php
<?php
use Aliwuyun\Alidayu\AlibabaAliqinFcFlowQuery;
use Alidayu;

class TestController extends Controller
{
    public function send()
    {
        $message = (new AlibabaAliqinFcFlowQuery())
            ->setOutId('123456');

        return Alidayu::send($message);
    }
}
```
