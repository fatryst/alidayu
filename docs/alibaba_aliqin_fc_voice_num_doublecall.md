# 多方通话

`\Aliwuyun\Alidayu\Alidayu\AlibabaAliqinFcVoiceNumDoublecall`

## 1. 官方文档

http://open.taobao.com/docs/api.htm?apiId=25443

## 2. 参数、方法

|官方参数|对应方法|类型|是否必须|默认值|说明|
|----|----|----|----|----|----|
|`session_time_out`|`setSessionTimeOut($value)`|string|可选| |通话超时时长|
|`extend`|`setExtend($value)`|string|可选| |公共回传参数|
|`caller_num`|`setCallerNum($value)`|string|**必须**| |主叫号码|
|`caller_show_num`|`setCallerShowNum($value)`|string|**必须**| |主叫号码侧的号码显示|
|`called_num`|`setCalledNum($value)`|string|**必须**| |被叫号码|
|`called_show_num`|`setCalledShowNum($value)`|string|**必须**| |被叫号码侧的号码显示|

## 3. 使用

```php
<?php
use Aliwuyun\Alidayu\AlibabaAliqinFcVoiceNumDoublecall;
use Alidayu;

class TestController extends Controller
{
    public function send()
    {
        $message = (new AlibabaAliqinFcVoiceNumDoublecall())
            ->setCallerNum('12345678910')
            ->setCallerShowNum('12345678910')
            ->setCalledNum('12345678910')
            ->setCalledShowNum('12345678910');

        $res = Alidayu::send($message);
        return $res;
    }
}
```
