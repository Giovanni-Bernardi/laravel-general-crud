@extends('layout.main-layout')
@section('title')
MATCH DETAILS
@endsection
@section('content')

<main>
    <h1>MATCH DETAILS</h1>
    <table>
        <tr>
            <th></th>id</th>
            <th>team 1</th>
            <th>team 2</th>
            <th>score 1</th>
            <th>score 2</th>
            <th>result</th>
        </tr>
        <tr>
            <td>{{$MyMatch -> id}}</td>
            <td>{{$MyMatch -> team1}}</td>
            <td>{{$MyMatch -> team2}}</td>
            <td>{{$MyMatch -> score1}}</td>
            <td>{{$MyMatch -> score2}}</td>
            <td>{{$MyMatch -> result}}</td>
        </tr>
    </table>
    <a id="backHome" href="{{route('home')}}">
        back to home
    </a>
</main>

@endsection