@extends('layouts.app')
@section('content')
    {!! Form::open(['route' => ['users.update', 'id' => $user->id], 'method' => 'put']) !!}
        <div class='form-group'>
            {!! Form::label('name', '配達者氏名') !!}
            {!! Form::text('name', $user->name, ['class' => 'form-control']) !!}
        </div>
        <div class='form-group'>
            {!! Form::label('number', '自動車ナンバー') !!}
            {!! Form::number('number', $user->number, ['class' => 'form-control']) !!}
        </div>
        {!! Form::submit('更新', ['class' => 'btn btn-primary mb-3']) !!}
    {!! Form::close() !!}
    
    @if(Auth::id() === $user->id)
        {!! Form::open(['route' => ['users.destroy', 'id' => $user->id], 'method' => 'delete']) !!}
            {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    @endif

@endsection