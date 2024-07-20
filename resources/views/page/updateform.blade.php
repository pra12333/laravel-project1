@extends('master')

@section('content')
<form action="{{ url('addupdate', $data->id) }}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input type="text" value="{{ $data->name }}" class="form-control" name="name" id="exampleInputEmail1" placeholder="Enter name"> 
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" value="{{ $data->email }}" class="form-control" name="email" id="exampleInputEmail1" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" value="{{ $data->password }}" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection