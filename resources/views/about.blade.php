@extends('app')
@section('title','Home')

@section('sidebar')
    @parent

    <p>Este es un codigo en el ABOUT side bar</p>

@endsection

@section('content')
    <p>Esto es parte del cuerpo del ABOUT</p>
@endsection
