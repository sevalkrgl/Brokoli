@extends('layouts.master')
@section('title','Reyon')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reyon</title>
</head>
<body>
    <form method="POST" action="{{route('reyonCreate')}}">
        @csrf

        <div class="">

            <label>Reyon Ad</label>
            <input name='name' type="text">
        </div>        
        <div class="">
            <label>Reyon ID</label>
            <input name='reyon_id' type="numeric">
        </div>
        <div class="">
            <label>Ürün</label>
            <input name='urun_adi' type="name">
        </div>

     <button type="submit">Kaydet</button>

    </form>
    ---------------------------------------------------------------------------------------------------
    
    @foreach ($reyonlar as $reyon)
    <br>
       <table>
        <tr>
            <th>{{$reyon->reyon_adi}}</th>
            <th>{{$reyon->reyon_id}}</th>
        </tr>
        <tr>
            <td>{{$reyon->urun_adi}}</td>
        </tr>
        
       </table>

    @endforeach
</body>
</html>
@endsection