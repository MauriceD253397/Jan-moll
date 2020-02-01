@extends('templates.app')

@section('content')
    <ol>
        @foreach ($items as $item)
            <li><h2>{{$item->name}}</h2><p>{{$item->description}}</p></li>
        @endforeach
    </ol>

@stop
