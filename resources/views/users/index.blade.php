@extends('welcome')

@section('content')
<style>
    body {
        background: #f6f9f6;
        font-family: 'Poppins', Arial, sans-serif;
    }
    .user-table-container {
        max-width: 900px;
        margin: 40px auto;
        background: #fff;
        border-radius: 16px;
        box-shadow: 0 4px 24px rgba(0,128,0,0.08);
        padding: 32px;
    }
    .user-table-title {
        color: #3a7d2c;
        font-size: 2rem;
        font-weight: 700;
        margin-bottom: 24px;
        text-align: center;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        background: #fff;
        border-radius: 12px;
        overflow: hidden;
    }
    th, td {
        padding: 16px 12px;
        text-align: left;
    }
    th {
        background: #eafbe7;
        color: #3a7d2c;
        font-weight: 600;
        border-bottom: 2px solid #c6e6c1;
    }
    tr {
        border-bottom: 1px solid #eafbe7;
    }
    tr:last-child {
        border-bottom: none;
    }
    td {
        color: #444;
    }
</style>
<div class="user-table-container">
    <div class="user-table-title">Daftar User</div>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
        </tr>
        @foreach($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->role }}</td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
