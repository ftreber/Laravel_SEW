@extends('template/app')

@section('content')

    <h1 style="margin-top: 50px; margin-bottom: 50px; font-size: 50px">Customer</h1>

    <table class="table">
        <tr>
            <th>ID</th>
            <th>Vorname</th>
            <th>Nachname</th>
            <th>Straße</th>
            <th>PLZ</th>
            <th>Stadt</th>
            <th>Tel.</th>
        </tr>

        @foreach($customers as $cust)
            <tr>
                <td>{{$cust -> id}}</td>
                <td>{{$cust -> firstName}}</td>
                <td>{{$cust -> lastName}}</td>
                <td>{{$cust -> address}}</td>
                <td>{{$cust -> postalCode}}</td>
                <td>{{$cust -> city}}</td>
                <td>{{$cust -> phone}}</td>
            </tr>
        @endforeach
    </table>

@endsection

@section('navbar')

@endsection

