@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
                <div class="text-center"><h1>ADMISTRAÇÃO DE POSTAGENS</h1></div>
                <hr/>

                    {!!Form::open(['url' => 'admin/store'])!!}

                    {{ Form::hidden('user_id', Auth::user()->id ) }}
                    

                    <!--Título Form-->
                    <div class="form-group">
                             {!! Form::label('title', 'Título :') !!}

                            {!! Form::text('title', null , ['class' => 'form-control']) !!}

                    </div>

                    <!--Conteúdo Form-->
                    <div class="form-group">
                            {!! Form::label('body', 'Conteúdo :') !!}

                            {!! Form::textarea('content', null , ['class' => 'form-control']) !!}
                    </div>

                    <!--Submit Form-->

                    <div class="form-group">
                        {!! Form::submit('Enviar',['class'=> 'btn btn-primary form-control']) !!}
                    </div>

                    {!!Form::close()!!}

            </div>
    </div>
</div>
@endsection
