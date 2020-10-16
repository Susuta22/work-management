@extends('layouts.app')
@section('content')

    <table class='table table-bordered'>
            <thead>
                <tr>
                    <th>{{ $text }}配達先一覧</th>
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

@endsection