@extends('layouts.app')
@section('content')

    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>{{ $customer->name }}</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>住所</th>
                <td>{{ $customer->address }}</td>
            </tr>
            <tr>
                <th>電話</th>
                <td>{{ $customer->telephone }}</td>
            </tr>
            @if($customer->email == null)
            
            @else
            <tr>
                <th>Eメール</th>
                <td>{{ $customer->email }}</td>
            </tr>
            @endif
            <tr>
                @if($customer->day_of_the_week == 0)
                    <th>曜日</th>
                    <td>月曜日</td>
                @elseif($customer->day_of_the_week == 1)
                    <th>曜日</th>
                    <td>火曜日</td>
                @elseif($customer->day_of_the_week == 2)
                    <th>曜日</th>
                    <td>水曜日</td>
                @elseif($customer->day_of_the_week == 3)
                    <th>曜日</th>
                    <td>木曜日</td>
                @else
                    <th>曜日</th>
                    <td>金曜日</td>
                @endif
            <tr>
                <th>配達物</th>
                <td>
                    @if($customer->coffee_a_large == 0)
                        
                    @else
                        森のコーヒー・豆×{{ $customer->coffee_a_large }}<br>
                    @endif
                    
                    @if($customer->coffee_a_small == 0)
                    
                    @else
                        森のコーヒー・粉×{{ $customer->coffee_a_small }}<br>
                    @endif
                    
                    @if($customer->coffee_b_large == 0)
                    
                    @else
                        サファリ・豆×{{ $customer->coffee_b_large }}<br>
                    @endif
                    
                    @if($customer->coffee_b_small == 0)
                    
                    @else
                        サファリ・粉×{{ $customer->coffee_b_small }}<br>
                    @endif
                    
                    @if($customer->coffee_c_large == 0)
                    
                    @else
                        ブレンド・豆×{{ $customer->coffee_c_large }}<br>
                    @endif
                    
                    @if($customer->coffee_c_small == 0)
                    
                    @else
                        ブレンド・粉×{{ $customer->coffee_c_small }}<br>
                    @endif
                    
                    @if($customer->chocolate_a == 0)
                    
                    @else
                        チョコレート×{{ $customer->chocolate_a }}</br>
                    @endif
                    
                    @if($customer->chocolate_b == 0)
                        
                    @else
                        ケーキ×{{ $customer->chocolate_b }}
                    @endif
                </td>
            </tr>
            <tr>
                <th>備考</th>
                <td>{{ $customer->information }}</td>
            </tr>
        </tbody>
    </table>
    {{ link_to_route('management.edit', '内容を変更する', ['id' => $customer->id], ['class' => 'mr-3']) }}
    {{ link_to_route('management.index', 'TOPページ') }}
@endsection