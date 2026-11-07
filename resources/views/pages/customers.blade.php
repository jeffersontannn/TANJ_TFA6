@extends('layouts.app')

@section('title', 'Customers - TANJ POS')

@section('content')
    <h1>Customer Accounts</h1>
    <div class="card">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody>
                @foreach($customers as $customer)
                    <tr>
                        <td>{{ $customer['id'] }}</td>
                        <td>{{ $customer['name'] }}</td>
                        <td>{{ $customer['email'] }}</td>
                        <td>{{ $customer['phone'] }}</td>
                        <td>{{ $customer['address'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
