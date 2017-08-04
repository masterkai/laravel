@extends('layouts.app')
@section('main')
<body>
    <ul>
        @foreach($markets as $market)
            <a href="{{ route('markets.show', $market) }}">
                {{ $market->name }}
            </a>
        @endforeach
    </ul>
    {{ $markets->links() }}
@endsection