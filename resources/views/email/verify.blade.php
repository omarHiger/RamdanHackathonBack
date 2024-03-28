<!-- resources/views/emails/verify.blade.php -->

<!DOCTYPE html>
<html dir="rtl">
<head>
    <title>التحقق من البريد الإلكتروني</title>
</head>
<body>
<h2>مرحباً بك في تطبيقنا!</h2>

<p>
    شكراً لتسجيلك. الرجاء الضغط على الرابط أدناه للتحقق من عنوان بريدك الإلكتروني:
</p>

<a href="{{env('APP_URL').'/'. $donorUrl }}">التحقق من عنوان البريد الإلكتروني</a>

<p>
    إذا لم تقم بإنشاء حساب، فلا يلزم اتخاذ أي إجراء آخر.
</p>
</body>
</html>
