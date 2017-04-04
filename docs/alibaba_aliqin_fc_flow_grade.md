# 流量直充档位表

`\Aliwuyun\Alidayu\Alidayu\AlibabaAliqinFcFlowGrade`

## 1. 官方文档

http://open.taobao.com/docs/api.htm?apiId=26312

## 2. 参数、方法

无

## 3. 使用

```php
<?php
use Aliwuyun\Alidayu\AlibabaAliqinFcFlowGrade;
use Alidayu;

class TestController extends Controller
{
    public function send()
    {
        $res = Alidayu::send(new AlibabaAliqinFcFlowGrade());
        return $res;
    }
}
```
