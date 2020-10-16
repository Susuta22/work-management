@extends('layouts.app')

@section('content')
    <div class='text-center'>
        <h3>配達者登録</h3>
    </div>
    
    <div class='row'>
        <div class='col-sm-6 offset-sm-3'>
            {!! Form::open(['route' => 'signup.post']) !!}
                <div class='form-group'>
                    {!! Form::label('name', '配達者氏名') !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
                </div>
                
                <div class='form-group'>
                    {!! Form::label('number', '自動車ナンバー') !!}
                    {!! Form::number('number', old('number'), ['class' => 'form-control']) !!}
                </div>
                
                <div class='form-group'>
                    {!! Form::label('password', 'パスワード　※6文字以上') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>
                
                <div class='form-group'>
                    {!! Form::label('password_confirmation', 'パスワード再確認') !!}
                    {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
                </div>
                
                {!! Form::submit('登録', ['class' => 'btn btn-primary btn-sm']) !!}
            {!! Form::close() !!}
            
        </div>
    </div>

@endsection