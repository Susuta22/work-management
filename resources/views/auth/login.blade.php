@extends('layouts.app')

@section('content')
    <div class='text-center'>
        <h3>ログイン</h3>
    </div>
    <div class='row'>
        <div class='col-sm-6 offset-sm-3'>
            
            {!! Form::open(['route' => 'login.post']) !!}
                <div class='form-group'>
                    {!! Form::label('name', '配達者氏名') !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
                </div>
                <div class='form-group'>
                    {!! Form::label('password', 'パスワード') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>
            
                {!! Form::submit('ログイン', ['class' => 'btn btn-primary btn-sm']) !!}
            {!! Form::close() !!}
@endsection