<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    selam {{$isim}}
    
@if ($isim=='Şeval')
   Hoşgeldinizzz
    
@else
    Hoşgeldin
@endif

@switch($isim)
    @case('Şeval')
        Hoşgeldin Şeval
        @break       
@endswitch
<hr>
@for ($i = 0; $i < 10; $i++)
    Döngü Değeri:{{$i}}
@endfor
<hr>
@php
    $i=0;
@endphp
@while ($i<=10)
   Döngü Değeri:{{$i}}
   @php
   $i++;
   @endphp 
@endwhile
@foreach ($isimler as $isim)
    <p>İsim: {{$isim}}</p>
@endforeach
<hr>
@foreach ($kullanicilar as $kullanici)
@continue($kullanici['id']==1)
    <li>
        {{$kullanici['id'].'-'.$kullanici['kullaniciadi']}}
    </li>
    @break($kullanici['id']==4)
@endforeach
{{--Yorum Satırı--}}
@php
    $html="<b>Test</b>";
@endphp
{!! $html!!}
</body>
</html>