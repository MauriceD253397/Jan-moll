@extends('templates.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <h4>Welkom bij uw reserverings-overzicht, {{$user->name}}</h4>
                {{-- admin only --}}
                @if($user->role == 1)
                    <div class="admin-content">
                        <h3>Nieuw poduct aanmaken</h3>
                        {!! Form::open(['route' => 'products.store']) !!}
                            {!! Form::text('name', 'Naam',['class' => 'form-control', 'rows' => 2]) !!}
                            {!! Form::textarea('description', 'Beschrijving',['class' => 'form-control', 'rows' => 2]) !!}
                            {!! Form::submit('Maken') !!}
                        {!! Form::close() !!}
                    </div>
                @endif
                <div class="user-content">

                    <ol>
                        @foreach($user->items as $item)
                            <div class="col-md-4">
                                <div class="item">
                                    <li>
                                        <h2>{{$item->name}}</h2>
                                        <p>{{$item->description}}</p>
                                        <a href={{route('products.update', ['item' => $item->id])}}>Stop met reserveren</a>
                                    </li>
                                </div>
                            </div>
                        @endforeach
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection
