@extends('layouts.marketing')
@section('title', 'تواصل مع رواسي')
@section('content')
<section class="page-hero contact-hero"><div class="site-container narrow"><span class="eyebrow light">نحن هنا للإجابة</span><h1>لنبنِ تعاوناً<br>يصنع فرقاً</h1><p>للطلبات والشراكات الفنية والدعم، يسعدنا أن نسمع منك.</p></div></section>
<section class="section"><div class="site-container contact-layout"><div><span class="eyebrow">تواصل معنا</span><h2>ابدأ المحادثة</h2><p>أرسل تفاصيل طلبك وسيتواصل معك فريق رواسي خلال يومي عمل.</p><div class="contact-cards"><a href="tel:+970595676789"><span>☎</span><div><small>الهاتف</small><b dir="ltr">+970 59 567 6789</b></div></a><a href="mailto:rawasi.gaza@gmail.com"><span>✉</span><div><small>البريد الإلكتروني</small><b>rawasi.gaza@gmail.com</b></div></a><div><span>⌖</span><div><small>الموقع</small><b>غزة، فلسطين</b></div></div></div></div>
<form class="contact-form" method="POST" action="{{ route('contact.submit') }}">@csrf
@if(session('success'))<div class="success">{{ session('success') }}</div>@endif
<div class="field-row"><label>الاسم الكامل<input name="name" required value="{{ old('name') }}"></label><label>رقم الهاتف<input name="phone" required value="{{ old('phone') }}"></label></div>
<label>البريد الإلكتروني<input type="email" name="email" required value="{{ old('email') }}"></label>
<label>موضوع الرسالة<select name="subject"><option>طلب منتج</option><option>شراكة فنية</option><option>دعم المشروع</option><option>استفسار عام</option></select></label>
<label>رسالتك<textarea name="message" rows="5" required>{{ old('message') }}</textarea></label>
@if($errors->any())<div class="error">{{ $errors->first() }}</div>@endif
<button class="button primary" type="submit">إرسال الرسالة ←</button></form></div></section>
@endsection
