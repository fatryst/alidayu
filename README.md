# Alidayu
Alidayu SMS Service SDK for PHP



## 功能

- [短信发送](docs/alibaba_aliqin_fc_sms_num_send.md)
- [短信发送记录查询](docs/alibaba_aliqin_fc_sms_num_query.md)
- [文本转语音通知](docs/alibaba_aliqin_fc_tts_num_singlecall.md)
- [语音通知](docs/alibaba_aliqin_fc_voice_num_singlecall.md)
- [多方通话](docs/alibaba_aliqin_fc_voice_num_doublecall.md)
- [流量直充](docs/alibaba_aliqin_fc_flow_charge.md)
- [流量直充查询](docs/alibaba_aliqin_fc_flow_query.md)
- [流量直充分省接口](docs/alibaba_aliqin_fc_flow_charge_province.md)
- [流量直充档位表](docs/alibaba_aliqin_fc_flow_grade.md)
- [辅助方法](docs/support.md)



## 环境

- PHP >= 5.4
- [composer](https://getcomposer.org/)

## 安装

```
composer require aliwuyun/alidayu
```

##配置
> 1. 编辑 config 文件夹下的 `app.php`文件  
> 2. 在 `providers` 中添加 `Aliwuyun\Alidayu\AlidayuServiceProvider::class,`
> 3. 在 `aliases` 中添加 `'Alidayu' => Aliwuyun\Alidayu\Facades\Alidayu::class,`
> 4. 运行 `php artisan vendor:publish` 命令，在 config 文件夹中生成 `alidayu.php` 文件
> 5. 在生成的 `alidayu.php` 文件中填写你的 `app_key` 和 `app_secret`

## 使用

```php
<?php
use Alidayu;
use Aliwuyun\Alidayu\AlibabaAliqinFcSmsNumSend;

class AlidayuTest
{
    public function SendSms()
    {
        $message = new AlibabaAliqinFcSmsNumSend;
            ->setRecNum('13888888888')
            ->setSmsParam(['number' => rand(100000, 999999)])
            ->setSmsFreeSignName('支付吧')
            ->setSmsTemplateCode('SMS_00000001');
        return Alidayu::send($message);
    }
}
```



## 支持

- 官方网址： https://www.alidayu.com/
- 官方API文档： https://api.alidayu.com/doc2/apiList.htm
- composer： https://getcomposer.org/

## License

MIT
