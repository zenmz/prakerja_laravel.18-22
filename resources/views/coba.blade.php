@extends('template')
@section('main')
    <h1>Ini menggunakan View Laravel</h1>

    @for ($i = 1; $i <= 10; $i++)
        @if ($i % 2)
            {{-- <h1>Ini menggunakan blade</h1> --}}
            <img src="{{ asset('img/photo-1525373698358-041e3a460346.jpeg') }}" alt="" width="200px">
        @endif
    @endfor
@endsection
