@extends('layouts.layout')

@section('content')
@foreach ($kategori as $kat)

<div>{{$kat->nama}}</div>
    @foreach ($kat->dataTipe as $item)
    <div >
    <a style="margin-left:30px" href="{{url($kat->slug.'/'.$item->slug)}}" >{{$item->nama}} </a>
    <h1 style="margin-left:40px">{{$item->deskripsi}}</h1>
    </div>
@endforeach

@endforeach
@endsection