# 气球云 PHP SDK

## 环境需求

PHP 版本： 5.3.3及以上
PHP 扩展： php-curl

PHP 5.3以下用户，需自行修改代码。

## 短信服务

### 初始化服务类

```
use QiQiuYun\SDK\SmsService;

$service = new SmsService([
    'accessKey' => '<YOUR_ACCESS_KEY>',
    'secretKey' => '<YOUR_SECERT_KEY>',
]);
```

### 发送验证码

```
$service->sendAuthCode('<接收者手机号>', '<验证码>'， '<验证码分类>');
```

验证码分类有：

| 分类        | 描述              |
|-------------|-------------------|
| sms_bind    | 绑定用户          |
| sms_registration | 用户注册     |
| sms_forget_password | 找回密码  |
| sms_user_pay        | 用户支付  |
| sms_forget_pay_password | 找回支付密码 |

