@extends('master')
@section('content')
<table class="table">
    <thead>
      <tr>
        
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Password</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($getdata as $data)
        <tr>
          <td>{{ $data->name }}</td>
          <td>{{ $data->email }}</td>
          <td>{{ $data->password }}</td>
          <td><a href="{{ url('update' . $data->id) }}" class="btn btn-success">Update</a> <a href="{{ url('delete' . $data->id) }}" class="btn btn-danger">Delete</a></td>
        </tr>                  
      @endforeach
    </tbody>
  </table>
@endsection