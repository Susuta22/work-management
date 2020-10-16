@extends('layouts.app')
@section('content')
    
    @if(Auth::check())
        <div class='ml-1'>配達者氏名 : {!! $user->name !!}</div>
        <div class='ml-1'>車両ナンバー : {!! $user->number !!}</div>
        
        <!--顧客一覧-->
        <table class='table table-bordered'>
            <thead>
                <tr>
                    <th>配達先一覧</th>
                </tr>
            </thead>
            <tbody>
                @foreach($customers as $customer)
                <tr>
                    <td>{{ link_to_route('management.show', $customer->name, ['id' => $customer->id]) }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        
        <div class='text-center'>    
            {!! link_to_route('monday.get', '月', ['id' => $user->id], ['class' => 'ml-4']) !!}
            {!! link_to_route('tuesday.get', '火', ['id' => $user->id], ['class' => 'ml-4']) !!}
            {!! link_to_route('wednesday.get', '水', ['id' => $user->id], ['class' => 'ml-4']) !!}
            {!! link_to_route('thursday.get', '木', ['id' => $user->id], ['class' => 'ml-4']) !!}
            {!! link_to_route('friday.get', '金', ['id' => $user->id], ['class' => 'ml-4']) !!}
        </div>
            
        <!--登録用フォーム-->
        @include('form')
        
        <p>{!! link_to_route('users.edit', '配達者変更', ['id' => $user->id]) !!}</p>
        <p>{!! link_to_route('logout.get', 'ログアウト') !!}</p>
    @else
        <p>{!! link_to_route('signup.get', '配達者を登録') !!}</p>
        <p>{!! link_to_route('login.get', 'ログイン') !!}</p>
    @endif

@endsection