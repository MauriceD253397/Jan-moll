@extends('templates.app')

@section('content')
    <div class="row">
        <ol>
            @foreach ($items as $item)
                <li class="item col-md-4"><h2>{{$item->name}}</h2><p>{{$item->description}}</p></li>
            @endforeach
        </ol>
    </div>
@stop
