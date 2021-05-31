@extends('layouts.main-layout')
@section('title')
    Dettagli Employee
@endsection
@section('content')

    <main>
        <h1>
            dettagli employee
        </h1>
        <table>
            <tr>
                <th>
                    id
                </th>
                <th>
                    firstname
                </th>
                <th>
                    lastname
                </th>
                <th>
                    ral
                </th>
            </tr>
            <tr>
                <td>
                    {{$employee -> id}}
                </td>
                <td>
                    {{$employee -> firstname}}
                </td>
                <td>
                    {{$employee -> lastname}}
                </td>
                <td>
                    {{$employee -> ral}}
                </td>
            </tr>
        </table>
        <h1>
            Tasks
        </h1>
        <table>
            <tr>
                <th>
                    title
                </th>
                <th>
                    description
                </th>
            </tr>
            
            @if (count($employee -> task) > 0)
                @foreach ($employee -> task as $task)
                    <tr>
                        <td>
                            {{$task -> title}}
                        </td>
                        <td>
                            {{$task -> description}}
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td>
                        Task Title non presente
                    </td>
                    <td>
                        Task Description non presente
                    </td>
                </tr>
            @endif
                
        </table>
        <a id="backHome" href="{{route('home')}}">
            back to home
        </a>
    </main>
    
@endsection