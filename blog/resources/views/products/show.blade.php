@extends('templates.app')

@section('content')
    <h2>{{$item->name}}</h2>
    <div class="row">
        <div class="col-md-4">
            {{$item->description}}
            <a href={{route('products.update', ['item' => $item->id])}}>Reserveer</a>
        </div>
    </div>
@stop
