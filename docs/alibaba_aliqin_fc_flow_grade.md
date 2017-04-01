# 流量直充档位表

`\Aliwuyun\Alidayu\Alidayu\AlibabaAliqinFcFlowGrade`

## 1. 官方文档

http://open.taobao.com/docs/api.htm?apiId=26312

## 2. 参数、方法

无

## 3. 使用

```php
<?php
use Aliwuyun\Alidayu\Client;
use Aliwuyun\Alidayu\App;
use Aliwuyun\Alidayu\Requests\AlibabaAliqinFcFlowGrade;

// 配置信息
$config = [
    'app_key'    => '*****',
    'app_secret' => '************',
];

$client = new Client(new App($config));
$req    = new AlibabaAliqinFcFlowGrade;

print_r($client->execute($req));
?>
```
