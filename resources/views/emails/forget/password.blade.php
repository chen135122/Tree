@component('mail::message')
# 重置密码邮件

这是一封重置密码的邮件，请点击下方按钮访问，或者复制链接{{ $url }}打开浏览器访问，进行重置密码操作。

@component('mail::button', ['url' => $url])
重置密码
@endcomponent

十分感谢！<br>
{{ config('app.name') }}
@endcomponent
