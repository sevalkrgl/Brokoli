@extends('layouts.master')
@section('title','Ürün')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="{{route('urunCreate')}}>
        @csrf

        <div class="">

            <label>Ürün adı</label>
            <input name='name' type="text">
        </div>
        <div class="">
            <label>Fiyatı</label>
            <input name='price' type="numeric">
        </div>
        <div class="">
            <label>Sepet</label>
            <input name='sepet' type="numeric">
        </div>
     <button type="submit">Kaydet</button>

    </form>


    ---------------------------------------------------------------------------------------------------
    
    @foreach ($urunler as $urun)
    <br>
        Adı:{{$urun->urun_adi}}
        Fiyatı:{{$urun->fiyati}}

    @endforeach
   

</body>
</html>
@endsection