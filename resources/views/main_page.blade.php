@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading text-center">Painel principal</div>

                <div class="panel-body">
                    <div class="text-centered"><h1>Postagens</h1></div>
                    <hr/>
                    @foreach($posts as $post)
                        <h2>{{ $post -> title }} #{{$post -> id}}</h2>
                        <h4>Criado em : {{$post -> created_at }}</h4>
                        <p>{{ $post -> content }}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
