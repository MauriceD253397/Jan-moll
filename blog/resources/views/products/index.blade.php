@extends('templates.app')

@section('content')
    <div class="row">
        <ol>
            @foreach ($items as $item)
                @if($item->isReserved == 0)
                    <div class="col-md-4">
                        <div class="item">
                            <li>
                                <h2>{{$item->name}}</h2>
                                <p>{{$item->description}}</p>
                                <a href={{route('products.show', ['item' => $item->id])}}>Reserveren</a>
                                @if($user->role == 1)
                                    <a href={{route('products.delete', ['item' => $item->id])}}>Delete</a>
                                @endif
                            </li>
                        </div>
                    </div>
                @endif
            @endforeach
        </ol>
    </div>
@stop
