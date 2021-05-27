@extends('layouts.main-layout')

@section('content')
    <h1>
        Emplyees
    </h1>

    <ul>
        @foreach ($employees as $employee)
            <li>
                <span>
                    {{ $employee -> lastname }} {{ $employee -> firstname }}
                </span>
                <a href="{{ route('editEmployee', $employee -> id) }}">
                    &#9998;
                </a>
            </li>
        @endforeach
    </ul>
@endsection