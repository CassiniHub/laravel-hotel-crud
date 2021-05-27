@extends('layouts.main-layout')

@section('content')
    <h1>
        Emplyees
    </h1>

    <ul>
        @foreach ($employees as $employee)
            <li>
                {{ $employee -> lastname }} {{ $employee -> firstname }}
            </li>
        @endforeach
    </ul>
@endsection