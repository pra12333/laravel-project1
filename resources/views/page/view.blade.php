@extends('master')
@section('content')
<table class="table">
    <thead>
      <tr>
        
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Password</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($getdata as $data)
        <tr>
          <td>{{ $data->name }}</td>
          <td>{{ $data->email }}</td>
          <td>{{ $data->password }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection