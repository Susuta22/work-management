@extends('layouts.app')
@section('content')

    {!! Form::open(['route' => ['management.update', 'id' => $customer->id], 'method' => 'put']) !!}
        <div class='form-group'>
                {!! Form::label('name', '※配達先') !!}
                {!! Form::text('name', $customer->name, ['class' => 'form-control']) !!}
            </div>
            
            <div class='form-group'>
                {!! Form::label('address', '※住所') !!}
                {!! Form::text('address', $customer->address, ['class' => 'form-control']) !!}
            </div>
            
            <div class='form-group'>
                {!! Form::label('telephone', '※電話番号') !!}
                {!! Form::text('telephone', $customer->telephone, ['class' => 'form-control']) !!}
            </div>
            
            <div class='form-group'>
                {!! Form::label('email', 'Eメール') !!}
                {!! Form::email('email', $customer->email, ['class' => 'form-control']) !!}
            </div>
            
            <div class='form-inline'>
                {!! Form::label('day_of_the_week', '曜日を選択', ['class' => 'col-sm-2']) !!}
                {!! Form::select('day_of_the_week', ['月', '火', '水', '木', '金'], $customer->day_of_the_week, ['class' => 'form-control']) !!}
            </div>
            
            <div class='form-inline mt-2'>
                {!! Form::label('coffee_a_large', '森のコーヒー・豆', ['class' => 'col-sm-2']) !!}
                {!! Form::select('coffee_a_large', ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10'], $customer->coffee_a_large, ['class' => 'form-control']) !!}
            </div>    
            
            <div class='form-inline mt-2'>
                {!! Form::label('coffee_a_small', '森のコーヒー・粉', ['class' => 'col-sm-2']) !!}
                {!! Form::select('coffee_a_small', ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10'], $customer->coffee_a_small, ['class' => 'form-control']) !!}
            </div>
            
            <div class='form-inline mt-2'>
                {!! Form::label('coffee_b_large', 'サファリ・豆', ['class' => 'col-sm-2']) !!}
                {!! Form::select('coffee_b_large', ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10'], $customer->coffee_b_large, ['class' => 'form-control']) !!}
            </div>
            
            <div class='form-inline mt-2'>
                {!! Form::label('coffee_b_small', 'サファリ・粉', ['class' => 'col-sm-2']) !!}
                {!! Form::select('coffee_b_small', ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10'], $customer->coffee_b_small, ['class' => 'form-control']) !!}
            </div>
            
            <div class='form-inline mt-2'>
                {!! Form::label('coffee_c_large', 'ブレンド・豆', ['class' => 'col-sm-2']) !!}
                {!! Form::select('coffee_c_large', ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10'], $customer->coffee_c_large, ['class' => 'form-control']) !!}
            </div>
            
            <div class='form-inline mt-2'>
                {!! Form::label('coffee_c_small', 'ブレンド・粉', ['class' => 'col-sm-2']) !!}
                {!! Form::select('coffee_c_small', ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10'], $customer->coffee_c_small, ['class' => 'form-control']) !!}
            </div>
            
            <div class='form-inline mt-2'>
                {!! Form::label('chocolate_a', 'チョコレート', ['class' => 'col-sm-2']) !!}
                {!! Form::select('chocolate_a', ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10'], $customer->chocolate_a, ['class' => 'form-control']) !!}
            </div>
            
            <div class='form-inline mt-2'>
                {!! Form::label('chocolate_b', 'ケーキ', ['class' => 'col-sm-2']) !!}
                {!! Form::select('chocolate_b', ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10'], $customer->chocolate_b, ['class' => 'form-control']) !!}
            </div>
            
            <div class='form-group'>
                {!! Form::label('information', '備考') !!}
                {!! Form::textarea('information', $customer->information, ['class' => 'form-control']) !!}
            </div>
            {!! Form::submit('更新', ['class' => 'btn btn-primary']) !!}
            
    {!! Form::close() !!}
        
        {!! Form::open(['route' => ['management.destroy', $customer->id], 'method' => 'delete']) !!}
            {!! Form::submit('削除', ['class' => 'btn btn-danger mt-3']) !!}
        {!! Form::close() !!}
@endsection