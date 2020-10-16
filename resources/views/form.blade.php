<div class='row'>
    <div class='col-sm-12 mt-5'>
        <div class='text-center'>
            <h4>登録用フォーム</h4>
        </div>
        {!! Form::open(['route' => 'management.store']) !!}
            <div class='form-group'>
                {!! Form::label('name', '※配達先') !!}
                {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
            </div>
            
            <div class='form-group'>
                {!! Form::label('address', '※住所') !!}
                {!! Form::text('address', old('address'), ['class' => 'form-control']) !!}
            </div>
            
            <div class='form-group'>
                {!! Form::label('telephone', '※電話番号') !!}
                {!! Form::text('telephone', old('telephone'), ['class' => 'form-control']) !!}
            </div>
            
            <div class='form-group'>
                {!! Form::label('email', 'Eメール') !!}
                {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
            </div>
            
            <div class='form-inline'>
                {!! Form::label('day_of_the_week', '曜日を選択', ['class' => 'col-sm-2']) !!}
                {!! Form::select('day_of_the_week', ['月', '火', '水', '木', '金'], '月', ['class' => 'form-control']) !!}
            </div>
            
            <div class='form-inline mt-2'>
                {!! Form::label('coffee_a_large', '森のコーヒー・豆', ['class' => 'col-sm-2']) !!}
                {!! Form::select('coffee_a_large', ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10'], 0, ['class' => 'form-control']) !!}
            </div>    
            
            <div class='form-inline mt-2'>
                {!! Form::label('coffee_a_small', '森のコーヒー・粉', ['class' => 'col-sm-2']) !!}
                {!! Form::select('coffee_a_small', ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10'], 0, ['class' => 'form-control']) !!}
            </div>
            
            <div class='form-inline mt-2'>
                {!! Form::label('coffee_b_large', 'サファリ・豆', ['class' => 'col-sm-2']) !!}
                {!! Form::select('coffee_b_large', ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10'], 0, ['class' => 'form-control']) !!}
            </div>
            
            <div class='form-inline mt-2'>
                {!! Form::label('coffee_b_small', 'サファリ・粉', ['class' => 'col-sm-2']) !!}
                {!! Form::select('coffee_b_small', ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10'], 0, ['class' => 'form-control']) !!}
            </div>
            
            <div class='form-inline mt-2'>
                {!! Form::label('coffee_c_large', 'ブレンド・豆', ['class' => 'col-sm-2']) !!}
                {!! Form::select('coffee_c_large', ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10'], 0, ['class' => 'form-control']) !!}
            </div>
            
            <div class='form-inline mt-2'>
                {!! Form::label('coffee_c_small', 'ブレンド・粉', ['class' => 'col-sm-2']) !!}
                {!! Form::select('coffee_c_small', ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10'], 0, ['class' => 'form-control']) !!}
            </div>
            
            <div class='form-inline mt-2'>
                {!! Form::label('chocolate_a', 'チョコレート', ['class' => 'col-sm-2']) !!}
                {!! Form::select('chocolate_a', ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10'], 0, ['class' => 'form-control']) !!}
            </div>
            
            <div class='form-inline mt-2'>
                {!! Form::label('chocolate_b', 'ケーキ', ['class' => 'col-sm-2']) !!}
                {!! Form::select('chocolate_b', ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10'], 0, ['class' => 'form-control']) !!}
            </div>
            
            <div class='form-group'>
                {!! Form::label('information', '備考') !!}
                {!! Form::textarea('information', old('information'), ['class' => 'form-control']) !!}
            </div>    
            
            {!! Form::submit('登録', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
</div>