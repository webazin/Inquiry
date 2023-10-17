### Inquiry system for iranian with laravel package - national code card number sheba shahkar , ....

### سرویس احراز هویت لاراول جهت استعلام کد ملی کارت بانکی نام و نام خانوادگی استعلام شبا و ...

## install

```
composer require webazin/inquiry
```
add this codes to `config/app.php`

```
\Webazin\Inquiry\InquiryServiceProvider::class
```

```
'Inquiry' => \Webazin\Inquiry\InquiryFacade::class,
```

## Use

### Examples

#### Get iban from cad number
```
Inquiry::cardToSheba(['number' => '6104.......','iban' => true])
```
