
@extends('layout.master')

@section('title','Blog Saya!')

@section('content')
    <h1>Selamat datang di Laravel gw</h1>
    <h2> {{$coba}} !!</h2>
    <h3> {{$user}}</h3>

    @foreach ($name as $namauser)
        <li>{{$namauser}}</li>
    @endforeach
<br>
    {{-- ambil data dari database --}}
    @foreach ($test as $users)
        <li>{{$users->username .' '. $users->pasword}}</li>
    @endforeach

    <br>
    @foreach ($test2 as $users)
        <li>{{$users->username .' '. $users->pasword}}</li>
    @endforeach

    <h5>{{$pass}}</h5>

    {!! $unescaped !!}

    @if(count($name)>5)
        <p>Usernya Lebih dari lima</p>
        @else
        <p>Usernya tidak Lebih dari lima</p>
    @endif

@endsection


