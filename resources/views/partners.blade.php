@extends('layouts.app')

@section('content')
    @foreach($response as $resKey => $resVal)
        {{$resKey}} - {{$resVal['on time']}} - {{$resVal['off time']}} - {{$resVal['not on time']}} <br><br>
    @endforeach
@endsection

