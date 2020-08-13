@extends('layouts.app')

@section('content')
    Данные с портала <br>
    {{$response}}
    @foreach($response['result'] as $res)
        ID = {{$res['ID']}}  <br> TITILE = {{$res['TITLE']}} <br>
    @endforeach

@endsection


