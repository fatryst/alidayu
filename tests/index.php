<?php
use Aliwuyun\Alidayu\Alidayu;
use Aliwuyun\Alidayu\AlibabaAliqinFcSmsNumSend;
use Aliwuyun\Alidayu\AlibabaAliqinFcTtsNumSinglecall;
use Aliwuyun\Alidayu\AlibabaAliqinFcVoiceNumSinglecall;
use Aliwuyun\Alidayu\AlibabaAliqinFcSmsNumQuery;
use Aliwuyun\Alidayu\AlibabaAliqinFcFlowGrade;
use Aliwuyun\Alidayu\AlibabaAliqinFcVoiceNumDoublecall;
use Aliwuyun\Alidayu\AlibabaAliqinFcFlowCharge;
use Aliwuyun\Alidayu\AlibabaAliqinFcFlowQuery;
use Aliwuyun\Alidayu\AlibabaAliqinFcFlowChargeProvince;

/**
 * Class AlidayuTest
 * @author fa.zeng
 */
class AlidayuTest
{
    /**
     * 短信发送
     * @return array|false
     */
    public function SendSms()
    {
        $message = new AlibabaAliqinFcSmsNumSend;
        $message->setCalledNum('13312311231')
            ->setRecNum('13312311231')
            ->setSmsParam(['number' => rand(100000, 999999)])
            ->setSmsFreeSignName('叶子坑')
            ->setSmsTemplateCode('SMS_15105357');

        $res = (new Alidayu())->execute($message);
        return $res;
    }

    /**
     * 文本转语音通知
     * @return array|false
     */
    public function TtsNumSinglecall()
    {
        $message = new AlibabaAliqinFcTtsNumSinglecall;
        $message->setCalledNum('13312311231')
            ->setTtsParam(['username' => 'admin',
                'time' => date('Y-m-d'),
                'client' => '微网站'])
            ->setCalledShowNum('051482043270')
            ->setTtsCode('TTS_15230020');

        $res = (new Alidayu())->execute($message);
        return $res;
    }

    /**
     * 语音通知
     * @return array|false
     */
    public function VoiceNumSinglecall()
    {
        $message = new AlibabaAliqinFcVoiceNumSinglecall;
        $message->setCalledNum('13312311231')
            ->setCalledShowNum('051482043270')
            ->setVoiceCode('08559b5f-0573-4e30-89ca-b82a9f4b94f8.wav');

        $res = (new Alidayu())->execute($message);
        return $res;
    }

    /**
     * 短信发送记录查询
     * @return array|false
     */
    public function SmsNumQuery()
    {
        $message = new AlibabaAliqinFcSmsNumQuery;
        $message->setBizId('')
            ->setRecNum('13312311231')
            ->setQueryDate('20160920')
            ->setCurrentPage(1)
            ->setPageSize(10);

        $res = (new Alidayu())->execute($message);
        return $res;
    }


    /**
     * 多方通话
     * @return array|false
     */
    public function VoiceNumDoublecall()
    {
        $message = new AlibabaAliqinFcVoiceNumDoublecall;
        $message->setCallerNum('13312311231')
            ->setCallerShowNum('13312311231')
            ->setCalledNum('13312311231')
            ->setCalledShowNum('13312311231');

        $res = (new Alidayu())->execute($message);
        return $res;
    }


    /**
     * 流量直充档位表
     * @return array|false
     */
    public function FlowGrade()
    {
        $message = new AlibabaAliqinFcFlowGrade;
        $res = (new Alidayu())->execute($message);
        return $res;
    }


    /**
     * 流量直充
     * @return array|false
     */
    public function FlowCharge()
    {
        $message = new AlibabaAliqinFcFlowCharge;
        $message->setPhoneNum('13312311231')
            ->setGrade('50')
            ->setOutRechargeId('111111');

        $res = (new Alidayu())->execute($message);
        return $res;
    }

    /**
     * 流量直充查询
     * @return array|false
     */
    public function FlowQuery()
    {
        $message = new AlibabaAliqinFcFlowQuery;
        $message->setOutId('111111');

        $res = (new Alidayu())->execute($message);
        return $res;
    }


    /**
     * 流量直充分省接口
     * @return array|false
     */
    public function FlowChargeProvince()
    {
        $message = new AlibabaAliqinFcFlowChargeProvince;
        $message->setPhoneNum('13312311231')
            ->setGrade('50')
            ->setOutRechargeId('111111');

        $res = (new Alidayu())->execute($message);
        return $res;
    }

}
